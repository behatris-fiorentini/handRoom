package serial;

import java.io.BufferedReader;
import java.io.InputStreamReader;

import gnu.io.CommPortIdentifier; 
import gnu.io.SerialPort;
import gnu.io.SerialPortEvent; 
import gnu.io.SerialPortEventListener;

import java.util.Enumeration;

import DAO.SensorDAO;
import entity.Sensor;


public class SerialRead implements SerialPortEventListener {
	SerialPort serialPort;
	//A porta que a ser usada. 
	private static final String PORT_NAMES = "COM3";

	//Um BufferedReader que ser� alimentado por um InputStreamReader convertendo os bytes 
	//em caracteres fazendo os resultados exibidos independente de p�gina de c�digos
	private BufferedReader input;


	//Milissegundos para bloquear enquanto aguarda porta aberta 
	private static final int TIME_OUT = 2000;

	//Bits padr�o por segundo para porta COM. 
	private static final int DATA_RATE = 9600;

	//Objeto sensor
	Sensor s = new Sensor();
	SensorDAO dao = new SensorDAO();

	// Variavel utilizada para contar as leituras feitas em 30 segundos (30000 milisegundos)
	int cont = 0, cont2=0, cont3=0, cont4=0;

	// Variavel que possui o resultado de presen�a ou ausencia
	float soma = 0, soma2=0, soma3=0, soma4=0;;
	
	
	//m�todo de inicializa��o, onde s�o definidos os dados relevantes para transferencia de dados Ardu�no/Computador
	public void initialize() {

		CommPortIdentifier portId = null;
		
		Enumeration portEnum = CommPortIdentifier.getPortIdentifiers();

		//Primeiro, localize uma inst�ncia de porta serial como definida em PORT_NAMES.
		while (portEnum.hasMoreElements()) {
			CommPortIdentifier currPortId = (CommPortIdentifier) portEnum.nextElement();

			//pega o nome da porta serial (COM3)
			String portName = PORT_NAMES;
			
			//pega a porta
			if (currPortId.getName().equals(portName)) {
				portId = currPortId;
				break;
			}
		}
		//caso n�o se enconte a porta serial informada
		if (portId == null) {
			System.out.println("N�o foi poss�vel encontrar a porta COM.");
			return;
		}

		try {
			//abre a porta serial, e usa o nome da classe para o appName.
			serialPort = (SerialPort) portId.open(this.getClass().getName(),
					TIME_OUT);


			//setSerialPortParams = int baudrate, int dataBits, int stopBits, int parity
			//Define os par�metros de porta serial.
			serialPort.setSerialPortParams(DATA_RATE,
					SerialPort.DATABITS_8,  //8 bit de dados formato.
					SerialPort.STOPBITS_1,	//N�mero de bits de parada - 1.
					SerialPort.PARITY_NONE); //Sem bit de paridade.

			//Abre as streams de entrada e saida de dados
			input = new BufferedReader(new InputStreamReader(serialPort.getInputStream()));

			// Adicionar ouvintes de eventos
			serialPort.addEventListener(this);
			serialPort.notifyOnDataAvailable(true);
			
		//caso algo d� errado
		} catch (Exception e) {
			System.err.println(e.toString());
		}
	}


	 //Isso deve ser chamado quando voc� parar de usar a porta. Impedir� o bloqueio de portas em plataformas como o Linux.
	public synchronized void close() {
		if (serialPort != null) {
			serialPort.removeEventListener();
			serialPort.close();
		}
	}


	//Gerencie um evento na porta serial. Leia os dados e imprima-os.
	public synchronized void serialEvent(SerialPortEvent oEvent) {
		if (oEvent.getEventType() == SerialPortEvent.DATA_AVAILABLE) {
			try {
				//l� o resultado vindo do sensor
				String inputLine=input.readLine();

				//se a leitura for 1, acrescenta no cont e na soma
				if(inputLine.equals("11") ){
					soma+=1;
					cont+=1;
					//se a leitura for 0, s� acrescenta no cont
				}else if(inputLine.equals("10") || inputLine.equals("Null")){
					cont+=1;
				}
				
				if(inputLine.equals("21")){
					soma2+=1;
					cont2+=1;
					//se a leitura for 0, s� acrescenta no cont
				}else if(inputLine.equals("20") || inputLine.equals("Null")){
					cont2+=1;
				}
				

				//para realizar uma m�dia na coleta, e tornar os dados mais precisos
				if(cont == 300){
					//m�dia
					soma = soma/300;
					soma2 = soma2/300;
					
					//restarta o cont
					cont = 0;
					cont2=0;

					//(metade das amostras positivas) 50 dividido 300 = 0.167
					//SENSOR1
					if(soma>=0.14){
						s.setId_sensor(1);
						s.setEstado(true);
						dao.Salvar(s);
						
					}else if(soma<0.14){
						s.setId_sensor(1);
						s.setEstado(false);
						dao.Salvar(s);
					}
					
					
					//SENSOR 2
					if(soma2>=0.14){
						s.setId_sensor(2);
						s.setEstado(true);
						dao.Salvar(s);
						
					}else if(soma2<0.14){
						s.setId_sensor(2);
						s.setEstado(false);
						dao.Salvar(s);
					}
					
					
					

					System.out.println("Soma1 = "+ soma+" | Soma2 = "+ soma2);

					//restarta a soma
					soma = 0;
					soma2 = 0;
				}

				System.out.println("in: "+inputLine);

			} catch (Exception e) {
				System.err.println("Null");
			}
		}
		// Ignore todos os outros eventTypes, mas voc� deve considerar os outros.
	}


	public static void main(String[] args) throws Exception {
		SerialRead main = new SerialRead();
		main.initialize(); //inicializa a fun��o
		Thread t=new Thread() { //inicializa a thread
			public void run() {

				// a seguinte linha manter� este app vivo por 1000 segundos,
				// aguardando a ocorr�ncia de eventos e respondendo a eles (impress�o de mensagens de entrada para o console).
				try {
					Thread.sleep(1000);
				} catch (InterruptedException ie) {
					System.out.println("Erro na Thread Main"+ie);
				}
			}
		};
		
		t.start();
		System.out.println("Programa Iniciado!");
	}
}