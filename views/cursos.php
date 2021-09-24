<a  href="?pagina=inserir_curso">Inserir Novo Curso</a>
<table border="1px" cellpadding="5px" cellspacing="0">
        <tr>
            <th>Curso</th>
            <th>Carga Horaria</th>
        </tr>

        <?php
            while($linha = mysqli_fetch_Array($result_cursos)){
                echo '<tr><td>'. $linha['nome_curso'].'</td>';
                echo '<td>'.$linha['carga_horaria'].'</td></tr>';
            }
        ?>
</table>
