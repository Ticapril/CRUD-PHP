<!-- CRUD -->
<?php
// primeiro conectar as páginas criadas
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
#se a variavel página existir página recebe a página atual senão a página recebe home
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}else {
    $pagina = 'home';
}

if($pagina == 'cursos'){
    include 'views/cursos.php';
}
elseif($pagina == 'alunos'){
    include 'views/alunos.php';
}
elseif($pagina == 'inserir_curso'){
    include 'views/inserir_curso.php';
}
elseif($pagina == 'processa_curso'){
    include 'views/processa_curso.php';
}
elseif($pagina == 'matriculas'){
    include 'views/matriculas.php';
}
elseif($pagina == 'home'){
    include 'views/home.php';
}
# Rodapé
include 'footer.php';
