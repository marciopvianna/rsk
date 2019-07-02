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
        $p = $_GET['p'];

        $con = mysqli_connect('localhost', 'delgrande', 'dege01', 'marcio');
        if (!$con) {
            die('Não foi possível conectar: ' . mysqli_error($con));
        }
        mysqli_select_db($con);
        $sql = "SELECT * FROM `times` WHERE `team` = '" . $p . "'";
        $result = mysqli_query($con, $sql);

        echo "<br><h1>" . $p . "</h1>";
        echo "<table>
             <tr>
             <th>Participações anteriores</th>
             <th>Títulos</th>
             <th>Finais</th>
             <th>Semifinais</th>
             <th>Ranking da Fifa</th>
             </tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['Previous appearances'] . "</td>";
            echo "<td>" . $row['Previous titles'] . "</td>";
            echo "<td>" . $row['Previous finals'] . "</td>";
            echo "<td>" . $row['Previous semifinals'] . "</td>";
            echo "<td>" . $row['Current FIFA rank'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($con);
        ?>
    </body>
</html>