<?php
	if(isset($_POST["concordo"])) {
		$data=$_POST["data"];
		$numID=$_POST["numeroID"];
		$firma=$_POST["firma"];
		$endereco=$_POST["endereco"];
		$complemento=$_POST["complemento"];
		$bairro=$_POST["bairro"];
		$cidade=$_POST["cidade"];
		$estado=$_POST["estados"];
		$cep=$_POST["cep"];
		$cnpj=$_POST["cnpj"];
		$inscricao=$_POST["inscricao"];
		$email=$_POST["email"];
		$telefone=$_POST["telefone"];
		$celular=$_POST["celular"];
		$obs=$_POST["obs"];

		file_put_contents("dadosForm.csv", "$data,$numID,$firma,$endereco,$complemento,$bairro,$cidade,$estado,$cep,$cnpj,$inscricao,$email,$telefone,$celular,$obs\n", FILE_APPEND);
/*
		$conn=new mysqli('localhost','root','','fdi_formbootstrap');
		if($conn->connect_error){
			die('Connection failed: '.$conn->connect_error);
		} else {
			$stmt=$conn->prepare("INSERT into registro (data, numID, firma, endereco, complemento, bairro, cidade, estado, cep, cnpj, inscricao, email, telefone, celular) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$stmt->bind_param("ssssssssssssss", $data, $numID, $firma, $endereco, $complemento, $bairro, $cidade, $estado, $cep, $cnpj, $inscricao, $email, $telefone, $celular);
			$stmt->execute();
			echo "Registro concluído com sucesso!";
			$stmt->close();
			$conn->close();
		}
*/

	} else {
		echo "Para registrar, é necessário aceitar os termos e condições de uso!";
	}

?>