	<?php  

	class Salas extends CrudSala{

		protected $tabela = 'estado';

		 //busca o status da ultima leitura do sensor, recebendo como parametro o sensor (id) a ser buscado no banco
		public function sensor1($id_sensor) {
			//query que busca nome, data-hora e status da ultima leitur do sensor
			$sql = "select s.nome_sensor, t.nome_estado, e.data from estado e
			join sensor s
			on s.id_sensor = e.id_sensor
			join tipo_estado t
			on t.estado = e.estado
			where e.id_sensor = :id_sensor
			order by e.id_estado desc 
			limit 1";
	        $stm = DB::prepare($sql); //estabelece a conexão com o BD
	        $stm->bindParam(':id_sensor', $id_sensor, PDO::PARAM_INT); //define o dados passado como parâmetro
	        $stm->execute(); //executa a query no banco de dados
	        return $stm->fetchAll(); //retorna o nome, data-hora e status do sensor passado como parâmetro
	    }


	    //função para mudar a cor do texto printado no status dos sensores
	    function cor($sensor){
	    $salas = new Salas(); //cria um objeto
	    foreach ($salas->sensor1($sensor) as $key => $value) { //passa o sensor lido como parâmetro
		if($value->nome_estado == "Ausente"){ //se o resultado da variavel for Ausente
		echo '<style>#status{color: red;}</style>'; //printa a palavra em vermelho
		echo $value->nome_estado; 
		}else{ //se tiver outro resultado (que no caso é Presente)
		echo '<style>#status{color: green;}</style>'; //printa a palavra em verde
		echo $value->nome_estado;
	}
}
}


public function historicoSensores() {
			//query que busca nome, data-hora e status da ultima leitur do sensor
	$sql = "select e.id_sensor, s.nome_sensor, t.nome_estado, e.data from estado e
	join sensor s
	on s.id_sensor = e.id_sensor
	join tipo_estado t
	on t.estado = e.estado";
	        $stm = DB::prepare($sql); //estabelece a conexão com o BD
	        $stm->execute(); //executa a query no banco de dados
	        return $stm->fetchAll(); //retorna o nome, data-hora e status do sensor passado como parâmetro
	    }
	}
	?>