package entity;


public class Sensor {
	
	//Instanciando atributos
	private int id_sensor;
	private boolean estado;

	
	public int getId_sensor() {
		return id_sensor;
	}
	public void setId_sensor(int id_sensor) {
		this.id_sensor = id_sensor;
	}
	public boolean isEstado() {
		return estado;
	}
	public void setEstado(boolean estado) {
		this.estado = estado;
	}
}
