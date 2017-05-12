//Define as portas do Arduíno em que estão ligados a porta de transferencia de informação do sensor de presença
int pinou = 2; 
int pinod = 3;
int pinot = 4;
int pinoq = 5;

//variaveis para guardar os valores dos sensor
int acionamentou, acionamentod, acionamentot, acionamentoq; 

void setup() {
  //define os pinos dos sensores como entrada
  pinMode(pinou, INPUT); 
  pinMode(pinod, INPUT); 
  pinMode(pinot, INPUT); 
  pinMode(pinoq, INPUT); 

  //frequencia da porta serial. Define a taxa de dados em bits por segundo para transmissão de dados serial.
  Serial.begin(9600); 
}

void loop() {
  //Lê os valores dos sensores
  acionamentou = digitalRead(pinou); 
  acionamentod = digitalRead(pinod);
  acionamentot = digitalRead(pinot);
  acionamentoq = digitalRead(pinoq);

  //SENSOR 1
  if(acionamentou == LOW){ //caso não seja identificado movimento
  Serial.println(10); //a porta serial printa 0
   acionamentou = digitalRead(pinou);
  }else{
  Serial.println(11); //caso aja movimento, a porta printa 1
   acionamentou = digitalRead(pinou);
  }


  //SENSOR 2
   if(acionamentod == LOW){ //caso não seja identificado movimento
  Serial.println(20); //a porta serial printa 0
   acionamentod = digitalRead(pinod);
  }else{
  Serial.println(21); //caso aja movimento, a porta printa 1
   acionamentod = digitalRead(pinod);
  }

/*
  //SENSOR 3
  if(acionamento3 == LOW){ //caso não seja identificado movimento
  Serial.println(30); //a porta serial printa 0
   acionamento3 = digitalRead(pino3);
  }else if(acionamento3 == HIGH){
  Serial.println(31); //caso aja movimento, a porta printa 1
   acionamento3 = digitalRead(pino3);
  }


  //SENSOR 4
  if(acionamento4 == LOW){ //caso não seja identificado movimento
  Serial.println(40); //a porta serial printa 0
   acionamento4 = digitalRead(pino4);
  }else if(acionamento4 == HIGH){
  Serial.println(41); //caso aja movimento, a porta printa 1
   acionamento4 = digitalRead(pino4);
  }*/

  
  //deley de 100 milisegundos para a próxima leitura
 delay(100); 
}
