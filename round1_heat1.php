<?php
   include('session.php');
?>

<html>
   
   <head>
      <title>RSK - R1H1</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }

      </style>
           
   </head>
     
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">	
	      <img src="rsk.png"/><br><br>
      </div>
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #003366; " align = "center">
            <div style = "background-color:#003366; color:#FFFFFF; padding:3px;"><b>Round 1 - Heat 1</b></div>
				
            <div style = "margin:30px">
               
               <form>
                    <label>atleta : </label><input type="text" name="juiz" value='fulano' /><br /><br />
                    <br>
                    <label>nota &ensp;&ensp;: </label><input type="text" name="nota1" 
                    value='
                    
                    <?php
                    mysqli_select_db($db, "ajax_demo");
                    $sql = "SELECT nota FROM marcio.notas WHERE round=1 AND heat=1 AND atleta='fulano' ORDER BY nota DESC LIMIT 1";
                    $result = mysqli_query($db, $sql);
                    while ($row = mysqli_fetch_array($result)) {           
                        echo $row['nota'];
                    }
                    //mysqli_close($db);
                    ?>
                    
                    ' /> <br /><br />
                    <label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: </label><input type="text" name="nota2" 
                    value='
                    
                    <?php
                    $sql2 = "SELECT nota FROM marcio.notas WHERE round=1 AND heat=1 AND atleta='fulano' ORDER BY nota DESC LIMIT 1,1";
                    $result2 = mysqli_query($db, $sql2);
                    while ($row2 = mysqli_fetch_array($result2)) {           
                        echo $row2['nota'];
                    }
                    mysqli_close($db);
                    ?>
                    
                    ' /> <br /><br />
                    <label>Nota final : </label><input type="text" name="nota" 
                    value='
                    
                    <?php
                    
                    ?>
                    
                    ' /><br /><br />
               </form>
                
               <!--<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php #echo $error; ?></div>-->
            </div>
         </div>	
      </div>      
   </body>
</html>