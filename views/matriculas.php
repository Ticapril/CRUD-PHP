<table border="1px" cellpadding="5px" cellspacing="0">
        <tr>
            <td>Matriculados</td>
            <td>Cursos</td>
        </tr>
        <?php
            while($linha = mysqli_fetch_Array($result_matriculados)) {
                echo '<tr><td>'.$linha['nome_aluno']. '</td>';
                echo '<td>'.$linha['nome_curso']. '</td></tr>';
            }



        ?>
</table>