package DAO;

import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;

import entity.Sensor;

import java.sql.PreparedStatement;
import java.sql.SQLException;



public class SensorDAO {


	//conexão com banco de dados
	Conexao conexao = new Conexao();

	
	//método salvar
	public void Salvar(Sensor sensor){
		conexao.conexao();
		try {
			PreparedStatement ps = conexao.con.prepareStatement
					("INSERT INTO estado (id_sensor, estado, data) VALUES (?, ?, ?)");

			ps.setInt(1, sensor.getId_sensor());
			ps.setBoolean(2, sensor.isEstado());
			ps.setString(3, dataAtual());

			ps.execute();

			System.out.print("Cadastro Realizado com Sucesso.");

		} catch (SQLException e) {
			System.out.print("Erro SQL: "+e);
		}
	}


	//Pega data e hora atuais do sistema
	public String dataAtual(){
		Calendar c = Calendar.getInstance();
		Date data = c.getTime();
		SimpleDateFormat sdf = new SimpleDateFormat("YYYY-mm-dd HH:mm:ss ");
		String dt = sdf.format(data);
		return dt;
	}
}

