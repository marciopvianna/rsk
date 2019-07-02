
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>RSK 2019</title>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
        <script>
            function showUser(str1) {
                if (str1 == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET", "getteams.php?q=" + str1, true);
                    xmlhttp.send();
                }
            }
        </script>
                
    </head>
    <body>
        <h1>Heats do RSK</h1>
        <form>
            <select name="users" onchange="showUser(this.value)">
                <option value="">Selecione o round:</option>
                <option value="101">Round 1 - Heat 1</option>
                <option value="102">Round 1 - Heat 2</option>
                <option value="103">Round 1 - Heat 3</option>
                <option value="104">Round 1 - Heat 4</option>
                <option value="105">Round 1 - Heat 5</option>
                <option value="106">Round 1 - Heat 6</option>
                <option value="107">Round 1 - Heat 7</option>
                <option value="108">Round 1 - Heat 8</option>
                <option value="">------------------</option>
                <option value="201">Round 2 - Heat 1</option>
                <option value="202">Round 2 - Heat 2</option>
                <option value="203">Round 2 - Heat 3</option>
                <option value="204">Round 2 - Heat 4</option>
                <option value="205">Round 2 - Heat 5</option>
                <option value="206">Round 2 - Heat 6</option>
                <option value="207">Round 2 - Heat 7</option>
                <option value="208">Round 2 - Heat 8</option>
                <option value="">------------------</option>
                <option value="301">Round 3 - Heat 1</option>
                <option value="302">Round 3 - Heat 2</option>
                <option value="303">Round 3 - Heat 3</option>
                <option value="304">Round 3 - Heat 4</option>
                <option value="">------------------</option>
                <option value="401">Quartas - Heat 1</option>
                <option value="402">Quartas - Heat 2</option>
                <option value="403">Quartas - Heat 3</option>
                <option value="404">Quartas - Heat 4</option>
                <option value="">------------------</option>
                <option value="501">Semi - Heat 1</option>
                <option value="502">Semi - Heat 2</option>             
                <option value="">------------------</option>
                <option value="601">Finais - 3º e 4º</option>
                <option value="602">Finais - 1º e 2º</option>
            </select>
        </form>
        <div id="txtHint">

            <p>Os heats serão mostrados aqui</p>
        </div>
    </body>
</html>