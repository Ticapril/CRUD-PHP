
    <table border="1px" cellpadding="5px" cellspacing="0">
        <tr>
            <th>Nome</th>
            <th>Ano de Nascimento</th>
        </tr>
        <?php
            //mysqli_fetch_array($result) ele pega uma consulta mysql armazenada na variavel $query e varre toda consulta
            // em c seria varrer um vetor printando!
            while($linha = mysqli_fetch_Array($result_alunos)){
                echo '<tr><td>'.$linha['nome_aluno'].'</td>';
                echo '<td>'.$linha['data_nascimento'].'</td></tr>';
            }
        ?>
    </table>
