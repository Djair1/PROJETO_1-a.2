<?php

include '../bd/Conexao.php';


$aluno = $_POST['aluno'];
$dc =  $_POST['dc'];
$nt1 =  $_POST['nt1'];
$nt2 =  $_POST['nt2'];

 $sql = "INSERT INTO alunos (nome, disciplina, nota_1, nota_2)
  VALUES ('".$aluno."', '".$dc."', '".$nt1."','".$nt2."')";
 $conn->exec($sql);

  echo "<h1> Dados salvos com susseso </h1> ";
  echo "Aluno: ".$aluno."<br> materia: ".$dc."<br> 1 nota: ".$nt1."<br> 2 nota: ".$nt2;
  //header("Location: ../index.php");
  $conn = null;
  //die();
?>