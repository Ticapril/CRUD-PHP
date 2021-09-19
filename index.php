<?php

#mysqli
/*$server = "localhost";
$user = "root";
$password = "";
$database = "agendaphp";

$connect = mysqli_connect($server, $user, $password, $database);

if($connect) {//se conexão for verdadeiro
    echo "the connection worked!";
}
/*
#Criando tabelas usando PHP

#Tabela cursos(nome do curso, carga horaria)
    $query = "CREATE TABLE CURSOS
    (
        id_curso int not null auto_increment,
        nome_curso varchar(255) not null,
        carga_horaria int not null,
        primary key(id_curso)
    )";

    $execute = mysqli_query($connect,$query);
    
#Tabela alunos(nome do aluno, data de nascimento)
    $query = "CREATE TABLE ALUNOS
    (
        id_aluno int not null auto_increment,
        nome_aluno varchar(255) not null,
        data_nascimento varchar(255) not null,
        primary key(id_aluno)
    )";
    //utilizo uma função que se conecta no servidor e cria as tabelas dinamicamente para mim
    $execute = mysqli_query($connect,$query);

#Tabela alunos_cursos(aluno, curso)
    $query = "CREATE TABLE ALUNOS_CURSOS(
        id_aluno_curso int not null auto_increment,
        id_aluno int not null,
        id_curso int not null,
        primary key(id_aluno_curso)
    )";
    $execute = mysqli_query($connect,$query);
    if($execute)
        echo "</br>success! (alunos_cursos)";
    else
        echo "</br>error! (alunos_cursos)";


#inserindo dados nas tabelas ************************
 $query = "INSERT INTO ALUNOS
 (
     nome_aluno,
     data_nascimento
 )VALUES
 (
     'José',
     '01-01-1990'
 )";
// $execute = mysqli_query($connect, $query);


#inserindo cursos

// $query = "INSERT INTO CURSOS(nome_curso,carga_horaria)VALUES('Javascript', 40)";
// $execute = mysqli_query($connect, $query);

$query = "INSERT INTO ALUNOS_CURSOS(id_aluno,id_curso)VALUES(1,1)";
$execute = mysqli_query($connect, $query);*/

// if(mysqli_query($connect, "DELETE FROM CURSOS WHERE ID_CURSO = 3")){
//     echo "</br>the data was deleted";
// }else {
//     echo "</br>failed to deleted data";
// }
// $query = "INSERT INTO ALUNOS
//  (
//      nome_aluno,
//      data_nascimento
//  )VALUES
//  (
//      'José',
//      '01-01-1990'
//  )";
//  $execute = mysqli_query($connect, $query);
//  $query = "INSERT INTO ALUNOS
//  (
//      nome_aluno,
//      data_nascimento
//  )VALUES
//  (
//      'Maria',
//      '20-03-1991'
//  )";
//  $execute = mysqli_query($connect, $query);
//  $query = "INSERT INTO ALUNOS
//  (
//      nome_aluno,
//      data_nascimento
//  )VALUES
//  (
//      'Pedro',
//      '25-06-1995'
//  )";
//  $execute = mysqli_query($connect, $query);

//  if(mysqli_query($connect,"UPDATE ALUNOS SET nome_aluno = 'João' WHERE id_aluno = 2")){
//      echo "the query was success!";
//  } else {
//      echo  "the query failed";
//  }


// echo '<table border=1>
//         <tr>
//             <th>id</th>
//             <th>Nome</th>
//             <th>Data de Nascimento</th>
//         </tr>';
// $view = mysqli_query($connect, "SELECT * FROM ALUNOS");
// while($row = mysqli_fetch_array($view)){
//     echo '<tr>';
//         #1 row  
//             echo '<td>';
//             echo $row['id_aluno'];
//             echo '</td>';
//         #2 row
//             echo '<td>';
//             echo $row['nome_aluno'];
//             echo '</td>';
//         # 3 row
//             echo '<td>';
//             echo $row['data_nascimento'];
//             echo '</td>';
//     echo '</tr>';
// }
// echo '<table>';

#ALTERAR O NOME DE UMA COLUNA DE UMA TABELA NO CASO É A COLUNA ID
// mysqli_query($connect, "ALTER TABLE CURSOS CHANGE id id_curso INT NOT NULL AUTO_INCREMENT");

/*$view = mysqli_query($connect, "SELECT A.nome_aluno,C.nome_curso FROM ALUNOS AS A, CURSOS AS C, ALUNOS_CURSOS AS AC 
WHERE AC.id_aluno = A.id_aluno AND AC.id_curso = C.id_curso");
echo '<table border=1>
            <tr>
                <th>Nome do aluno</th>
                <th>Nome do curso</th>
            </tr>'; // linha cabeçalho table
while($row = mysqli_fetch_array($view))
{
echo      ' <tr>
                <td>'.$row['nome_aluno'].'</td>
                <td>'.$row['nome_curso'].'</td>
           </tr>' ;
}
echo '</table>';

?>
*/