<?php


$server = "localhost";
$user = "root";
$password = '';
$db = "agendaphp";

//primeiro conexão com o banco de dados do servido localhost
$conection = mysqli_connect($server,$user,$password,$db);

//aqui eu faço uma consulta mysql e armazeno o resultado em uma variavel
$query = 'SELECT * FROM CURSOS';
//aqui eu utilizo a função mysqli_query(conexão, consulta);
$result_cursos = mysqli_query($conection, $query); // realizou a consulta e armazenou na variavel result

$query = 'SELECT * FROM ALUNOS';
$result_alunos = mysqli_query($conection, $query);

$query = 'SELECT A.nome_aluno, C.nome_curso FROM ALUNOS AS A, CURSOS AS C, ALUNOS_CURSOS AS AC WHERE A.id_aluno = AC.id_aluno AND C.id_curso = AC.id_curso';
$result_matriculados = mysqli_query($conection, $query);
