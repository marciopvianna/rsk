<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }

            table, td, th {
                border: 1px solid black;
                padding: 5px;
            }

            th {text-align: left;}
        </style>
    </head>
    <body>

        <?php
        $q = intval($_GET['q']);

        $con = mysqli_connect('localhost', 'delgrande', 'dege01', 'marcio');
        if (!$con) {
            die('Não foi possível conectar: ' . mysqli_error($con));
        }
        mysqli_select_db($con, "ajax_demo");
        $sql = "SELECT * FROM notas WHERE chave='".$q."' ORDER BY atleta,onda";
        $result = mysqli_query($con, $sql);

        echo "<table>
        <tr>
        <th>Hora</th>
        <th>Juiz</th>
        <th>Atleta</th>
        <th>Onda</th>
        <th>Nota</th>
        </tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['hora'] . "</td>";
            echo "<td>" . $row['juiz'] . "</td>";
            echo "<td>" . $row['atleta'] . "</td>";
            echo "<td>" . $row['onda'] . "</td>";
            echo "<td>" . $row['nota'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($con);
        ?>
    </body>
</html>