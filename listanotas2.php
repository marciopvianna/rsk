<?php
include('../session.php');

//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
//whether ip is from remote address
else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}
//echo $ip_address;
?>

<html>
    <head>
        <title>Exemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- <script src="../js/jquery-3.3.1.js" ></script> -->
        <!-- <script src="../js/jquery.dataTables.min.js" ></script> -->
        <!-- <script src="../js/dataTables.bootstrap.min.js" ></script> -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

        <script>
            $(document).ready(function () {
                var groupColumn = 3;
                var table = $('#example').DataTable({
                    "columnDefs": [
                        {"visible": false, "targets": groupColumn}
                    ],
                    "order": [[groupColumn, 'desc']],
                    "displayLength": 10,
                    "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({page: 'current'}).nodes();
                        var last = null;

                        api.column(groupColumn, {page: 'current'}).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before(
                                        '<tr class="group"><th>Heat:</th><td colspan="5">' + group + '</td></tr>'
                                        );

                                last = group;
                            }
                        });
                    }
                });

                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === groupColumn && currentOrder[1] === 'asc') {
                        table.order([groupColumn, 'desc']).draw();
                    } else {
                        table.order([groupColumn, 'asc']).draw();
                    }
                });
            });
        </script>

        <!-- <link rel= "stylesheet" href= "../css/dataTables.bootstrap.min.css" >  -->
        <!-- <link rel= "stylesheet" href= "../css/bootstrap_1.min.css" > -->
        <link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel= "stylesheet" href= "https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" >
        <link rel= "stylesheet" href= "https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" >

    </head>

    <body>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Hora</th>
                    <th>Juiz</th>
                    <th>Round</th>
                    <th>Heat</th>
                    <th>Atleta</th>
                    <th>Onda</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $con = mysqli_connect('localhost', 'delgrande', 'dege01', 'marcio');
                if (!$con) {
                    die('Não foi possível conectar: ' . mysqli_error($con));
                }
                mysqli_select_db($con, "ajax_demo");
//        $sql = "SELECT * FROM notas WHERE juiz='$login_session' ORDER BY id_nota DESC";
                $sql = "SELECT t1.hora,t1.juiz,t1.round,t1.heat,t2.nome,t1.onda,t1.nota FROM (notas as t1, atletas as t2) WHERE t2.id_atletas=t1.atleta AND t1.juiz='$login_session' ORDER BY t1.id_nota DESC";
                $result = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['hora'] . "</td>";
                    echo "<td>" . $row['juiz'] . "</td>";
                    echo "<td>" . $row['round'] . "</td>";
                    echo "<td>" . $row['heat'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['onda'] . "</td>";
                    echo "<td>" . $row['nota'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_close($con);
                ?>
            </tbody>

        </table>
        <h1><a href = "welcome.php"><font size="3" face="bold">Voltar</font></a></h1>
    </body>
</html>
