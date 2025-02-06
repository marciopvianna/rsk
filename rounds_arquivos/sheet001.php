<?php
include('../session.php');
include('../config.php');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if (!$con) {
    die('Não foi possível conectar: ' . mysqli_error($con));
}
mysqli_select_db($con, DB_DATABASE);

// Supondo que você tenha o ID do atleta, round e heat disponíveis
$atleta_id = 1; // Substitua pelo ID do atleta real
$round = 1; // Substitua pelo round real
$heat = 1; // Substitua pelo heat real

$sql = "SELECT somatorio FROM baterias WHERE atleta = $atleta_id AND round = $round AND heat = $heat";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$somatorio = isset($row['somatorio']) ? (float)$row['somatorio'] : 0.00;

mysqli_close($con);
?>

<td class=xl95 style='border-left:none'><?php echo number_format($somatorio, 2, ',', '.'); ?></td>
?>

<html xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:x="urn:schemas-microsoft-com:office:excel"
      xmlns="http://www.w3.org/TR/REC-html40">

<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=ProgId content=Excel.Sheet>
    <meta name=Generator content="Microsoft Excel 12">
    <link id=Main-File rel=Main-File href="../rounds.html">
    <link rel=File-List href=filelist.xml>
    <!--[if !mso]>
            <style>
            v\:* {behavior:url(#default#VML);}
            o\:* {behavior:url(#default#VML);}
            x\:* {behavior:url(#default#VML);}
            .shape {behavior:url(#default#VML);}
            </style>
            <![endif]-->
                            <title>RSK SC ABRIL 2019</title>
                            <link rel=Stylesheet href=stylesheet.css>
                                <style>
                                    <!--table
                                    {mso-displayed-decimal-separator:"\,";
                                     mso-displayed-thousand-separator:"\.";}
                                    @page
                                    {margin:.79in .51in .79in .51in;
                                     mso-header-margin:0in;
                                     mso-footer-margin:0in;}
                                    -->
                                </style>
                                <![if !supportTabStrip]><script language="JavaScript">
                                    <!--
                                function fnUpdateTabs()
                                    {
                                        if (parent.window.g_iIEVer >= 4) {
                                            if (parent.document.readyState == "complete"
                                                    && parent.frames['frTabs'].document.readyState == "complete")
                                                parent.fnSetActiveSheet(0);
                                            else
                                                window.setTimeout("fnUpdateTabs();", 150);
                                        }
                                    }

                                    if (window.name != "frSheet")
                                        window.location.replace("../rounds.html");
                                    else
                                        fnUpdateTabs();
                                    //-->
                                </script>
                                <![endif]>
                                </head>

                                <body link=blue vlink=purple>

                                    <table border=0 cellpadding=0 cellspacing=0 width=1488 style='border-collapse:
                                           collapse;table-layout:fixed;width:1116pt'>
                                        <col width=52 style='mso-width-source:userset;mso-width-alt:1901;width:39pt'>
                                            <col width=79 style='mso-width-source:userset;mso-width-alt:2889;width:59pt'>
                                                <col width=64 style='mso-width-source:userset;mso-width-alt:2340;width:48pt'>
                                                    <col width=22 style='mso-width-source:userset;mso-width-alt:804;width:17pt'>
                                                        <col width=81 style='mso-width-source:userset;mso-width-alt:2962;width:61pt'>
                                                            <col class=xl97 width=39 style='mso-width-source:userset;mso-width-alt:1426;
                                                                 width:29pt'>
                                                                <col width=63 style='mso-width-source:userset;mso-width-alt:2304;width:47pt'>
                                                                    <col width=25 style='mso-width-source:userset;mso-width-alt:914;width:19pt'>
                                                                        <col class=xl84 width=71 style='mso-width-source:userset;mso-width-alt:2596;
                                                                             width:53pt'>
                                                                            <col width=81 style='mso-width-source:userset;mso-width-alt:2962;width:61pt'>
                                                                                <col width=39 style='mso-width-source:userset;mso-width-alt:1426;width:29pt'>
                                                                                    <col width=64 style='mso-width-source:userset;mso-width-alt:2340;width:48pt'>
                                                                                        <col width=22 style='mso-width-source:userset;mso-width-alt:804;width:17pt'>
                                                                                            <col class=xl84 width=71 style='mso-width-source:userset;mso-width-alt:2596;
                                                                                                 width:53pt'>
                                                                                                <col width=81 style='mso-width-source:userset;mso-width-alt:2962;width:61pt'>
                                                                                                    <col width=39 style='mso-width-source:userset;mso-width-alt:1426;width:29pt'>
                                                                                                        <col width=63 style='mso-width-source:userset;mso-width-alt:2304;width:47pt'>
                                                                                                            <col width=24 style='mso-width-source:userset;mso-width-alt:877;width:18pt'>
                                                                                                                <col class=xl84 width=71 style='mso-width-source:userset;mso-width-alt:2596;
                                                                                                                     width:53pt'>
                                                                                                                    <col class=xl84 width=81 style='mso-width-source:userset;mso-width-alt:2962;
                                                                                                                         width:61pt'>
                                                                                                                        <col width=39 style='mso-width-source:userset;mso-width-alt:1426;width:29pt'>
                                                                                                                            <col width=64 style='mso-width-source:userset;mso-width-alt:2340;width:48pt'>
                                                                                                                                <col width=25 style='mso-width-source:userset;mso-width-alt:914;width:19pt'>
                                                                                                                                    <col class=xl84 width=71 style='mso-width-source:userset;mso-width-alt:2596;
                                                                                                                                         width:53pt'>
                                                                                                                                        <col class=xl84 width=81 style='mso-width-source:userset;mso-width-alt:2962;
                                                                                                                                             width:61pt'>
                                                                                                                                            <col width=39 style='mso-width-source:userset;mso-width-alt:1426;width:29pt'>
                                                                                                                                                <col width=37 style='mso-width-source:userset;mso-width-alt:1353;width:28pt'>
                                                                                                                                                    <tr height=20 style='height:15.0pt'>
                                                                                                                                                        <td height=20 width=52 style='height:15.0pt;width:39pt' align=left
                                                                                                                                                            valign=top><!--[if gte vml 1]><v:shapetype id="_x0000_t75" coordsize="21600,21600"
                                                                                                                                                             o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe" filled="f"
                                                                                                                                                             stroked="f">
                                                                                                                                                             <v:stroke joinstyle="miter"/>
                                                                                                                                                             <v:formulas>
                                                                                                                                                              <v:f eqn="if lineDrawn pixelLineWidth 0"/>
                                                                                                                                                              <v:f eqn="sum @0 1 0"/>
                                                                                                                                                              <v:f eqn="sum 0 0 @1"/>
                                                                                                                                                              <v:f eqn="prod @2 1 2"/>
                                                                                                                                                              <v:f eqn="prod @3 21600 pixelWidth"/>
                                                                                                                                                              <v:f eqn="prod @3 21600 pixelHeight"/>
                                                                                                                                                              <v:f eqn="sum @0 0 1"/>
                                                                                                                                                              <v:f eqn="prod @6 1 2"/>
                                                                                                                                                              <v:f eqn="prod @7 21600 pixelWidth"/>
                                                                                                                                                              <v:f eqn="sum @8 21600 0"/>
                                                                                                                                                              <v:f eqn="prod @7 21600 pixelHeight"/>
                                                                                                                                                              <v:f eqn="sum @10 21600 0"/>
                                                                                                                                                             </v:formulas>
                                                                                                                                                             <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
                                                                                                                                                             <o:lock v:ext="edit" aspectratio="t"/>
                                                                                                                                                            </v:shapetype><v:shape id="image1.jpg" o:spid="_x0000_s1027" type="#_x0000_t75"
                                                                                                                                                             style='position:absolute;margin-left:23.25pt;margin-top:14.25pt;width:106.5pt;
                                                                                                                                                             height:107.25pt;z-index:1;visibility:visible' o:gfxdata="UEsDBBQABgAIAAAAIQD0vmNdDgEAABoCAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRQU7DMBBF
                                                                                                                                                          90jcwfIWJQ4sEEJJuiCwhAqVA1j2JDHEY8vjhvb2OEkrQVWQWNoz7//npFzt7MBGCGQcVvw6LzgD
                                                                                                                                                          VE4b7Cr+tnnK7jijKFHLwSFUfA/EV/XlRbnZeyCWaKSK9zH6eyFI9WAl5c4DpknrgpUxHUMnvFQf
                                                                                                                                                          sgNxUxS3QjmMgDGLUwavywZauR0ie9yl68Xk3UPH2cOyOHVV3NgpYB6Is0yAgU4Y6f1glIzpdWJE
                                                                                                                                                          fWKWHazyRM471BtPV0mdn2+YJj+lvhccuJf0OYPRwNYyxGdpk7rQgYQ3Km4DpK3875xJ1FLm2tYo
                                                                                                                                                          yJtA64U8iv1WoN0nBhj/m94k7BXGY7qY/2z9BQAA//8DAFBLAwQUAAYACAAAACEACMMYpNQAAACT
                                                                                                                                                          AQAACwAAAF9yZWxzLy5yZWxzpJDBasMwDIbvg76D0X1x2sMYo05vg15LC7saW0nMYstIbtq+/UzZ
                                                                                                                                                          YBm97ahf6PvEv91d46RmZAmUDKybFhQmRz6kwcDp+P78CkqKTd5OlNDADQV23eppe8DJlnokY8ii
                                                                                                                                                          KiWJgbGU/Ka1uBGjlYYyprrpiaMtdeRBZ+s+7YB607Yvmn8zoFsw1d4b4L3fgDrecjX/YcfgmIT6
                                                                                                                                                          0jiKmvo+uEdU7emSDjhXiuUBiwHPcg8Z56Y+B/qxd/1Pbw6unBk/qmGh/s6r+ceuF1V2XwAAAP//
                                                                                                                                                          AwBQSwMEFAAGAAgAAAAhABZd4TrIAQAACAQAABIAAABkcnMvcGljdHVyZXhtbC54bWykU02P0zAQ
                                                                                                                                                          vSPxHyzfadJ2F62iJitEtQhpBVUBcZ51Jo3BX7JNtsuvZ2ynW+CE6G08H29m3htvbo9asQl9kNa0
                                                                                                                                                          fLmoOUMjbC/NoeVfPt+9uuEsRDA9KGuw5U8Y+G338sXm2PsGjBitZwRhQkOOlo8xuqaqghhRQ1hY
                                                                                                                                                          h4aig/UaIj39oeo9PBK4VtWqrl9XwXmEPoyIcVsivMvY1O0tKvUmtyiuwVtdLGFVV2+qNEMycwEZ
                                                                                                                                                          H4ehW9dXN/U5llw57O1jtywlyTz5UnzOJnfOzrDnXniMTByJm/V6fV0TP+IpPa7W9eqaVwXISVEM
                                                                                                                                                          M+2k2PnyEB+mnWeyb/mKMwOa6JMaDrhcfHOHU2lKSiWMiBjQ71FBlBPuMcifVFCnvDzRH9APSro7
                                                                                                                                                          qWh1aJI9awD/oYAGafhc/08K2mGQArdW/NBoYpHR57GtCaN0gTPfoH5AWty/75fEGF1QpGWclyam
                                                                                                                                                          haAJ0WMU46VzJ6iBeNijiImoZ+CZtDNP6VaCS9JA43yI79DqS7uTZiHSktScrhYamO7DPMapRXIb
                                                                                                                                                          m6S6tNnpDsoS+SSez04oSVJsIQIb7q34Hr7KOH5Kn+r3C/rrS2WI8oW7XwAAAP//AwBQSwMEFAAG
                                                                                                                                                          AAgAAAAhAFhgsxu6AAAAIgEAAB0AAABkcnMvX3JlbHMvcGljdHVyZXhtbC54bWwucmVsc4SPywrC
                                                                                                                                                          MBBF94L/EGZv07oQkaZuRHAr9QOGZJpGmwdJFPv3BtwoCC7nXu45TLt/2ok9KCbjnYCmqoGRk14Z
                                                                                                                                                          pwVc+uNqCyxldAon70jATAn23XLRnmnCXEZpNCGxQnFJwJhz2HGe5EgWU+UDudIMPlrM5YyaB5Q3
                                                                                                                                                          1MTXdb3h8ZMB3ReTnZSAeFINsH4Oxfyf7YfBSDp4ebfk8g8FN7a4CxCjpizAkjL4DpvqGkgD71r+
                                                                                                                                                          9Vn3AgAA//8DAFBLAwQUAAYACAAAACEAYSWlOxUBAACIAQAADwAAAGRycy9kb3ducmV2LnhtbExQ
                                                                                                                                                          y07DMBC8I/EP1iJxQdQmEGhCnariIcGlqAUJjlbiPERsB9s0oV/PJqEKp9XM7szu7GLZqZrspHWV
                                                                                                                                                          0RwuZgyI1KnJKl1weHt9PJ8DcV7oTNRGSw4/0sEyOT5aiDgzrd7I3dYXBE20iwWH0vsmptSlpVTC
                                                                                                                                                          zUwjNfZyY5XwCG1BMytaNFc1DRi7pkpUGjeUopF3pUw/t9+Kg7p8yF8+qmfVeeq/0vf7ta73Z5yf
                                                                                                                                                          nnSrWyBedn4a/lM/ZRwC6KNgDEjwvq5e6bQ0luQb6ao9Hj/yuTWKWNNywLCpqYeKeJ3nTnqcmrPo
                                                                                                                                                          JhxaByqIwgAp2tt6M4rxMYMYl/4XRywcbQ/aK8Z6CrV0umkA0wOTXwAAAP//AwBQSwMECgAAAAAA
                                                                                                                                                          AAAhADUqJhjchQAA3IUAABUAAABkcnMvbWVkaWEvaW1hZ2UxLmpwZWf/2P/gABBKRklGAAEBAQDc
                                                                                                                                                          ANwAAP/bAEMAAgEBAQEBAgEBAQICAgICBAMCAgICBQQEAwQGBQYGBgUGBgYHCQgGBwkHBgYICwgJ
                                                                                                                                                          CgoKCgoGCAsMCwoMCQoKCv/bAEMBAgICAgICBQMDBQoHBgcKCgoKCgoKCgoKCgoKCgoKCgoKCgoK
                                                                                                                                                          CgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCv/AABEIATMBQAMBIgACEQEDEQH/xAAfAAABBQEB
                                                                                                                                                          AQEBAQAAAAAAAAAAAQIDBAUGBwgJCgv/xAC1EAACAQMDAgQDBQUEBAAAAX0BAgMABBEFEiExQQYT
                                                                                                                                                          UWEHInEUMoGRoQgjQrHBFVLR8CQzYnKCCQoWFxgZGiUmJygpKjQ1Njc4OTpDREVGR0hJSlNUVVZX
                                                                                                                                                          WFlaY2RlZmdoaWpzdHV2d3h5eoOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPE
                                                                                                                                                          xcbHyMnK0tPU1dbX2Nna4eLj5OXm5+jp6vHy8/T19vf4+fr/xAAfAQADAQEBAQEBAQEBAAAAAAAA
                                                                                                                                                          AQIDBAUGBwgJCgv/xAC1EQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGh
                                                                                                                                                          scEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlq
                                                                                                                                                          c3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV
                                                                                                                                                          1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/APyDooor94Px8KKKKACiiigAoooo
                                                                                                                                                          AKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigA
                                                                                                                                                          ooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAorsfg3+z38cv2h/EY8JfAr4R+IvF
                                                                                                                                                          uo5Aa10DSZblkz03FFIT6tivur9nr/g16/4KY/GGKDUviTonhv4b2UwB/wCKk1tLi6Cnv5Np5uPo
                                                                                                                                                          zKwPUCuPE5hgcGv31RR9Xr92510MDjMT/Dg2fnJg4zRjNfvR8GP+DQL4I6N5V38ev2uPEmvyDBls
                                                                                                                                                          /DOgQ6bED3XfLJOzD3AQ+1fTPw4/4Np/+CSfgOONtZ+Bur+KJo8HzvEPi++OT6lLeSJD9CCK8Srx
                                                                                                                                                          dlNN2jzS9F/nY9Wlw3mM1eVo+r/yufy/EEdqMHGa/rk8Lf8ABHX/AIJd+DY1j0L9hr4efKMB7zQU
                                                                                                                                                          un/Fpt7H8TXX2H/BOz9g3TI/JsP2O/htGv8AdHg6z/8AjdcUuNMKvhpS+9f8E648K1+tRfcz+OzB
                                                                                                                                                          oII61/YdqX/BOH9gbWF2an+xv8NZh6P4Os//AI3XFeLf+CLf/BK3xsjprn7DfgNN4wz6bprWT/g1
                                                                                                                                                          syEfgaI8aYR/FSl96/4ApcK1+lRfcz+SfY3pSEYr+m/4lf8ABsV/wSi8cxyHwx8NPEvhGVgdraD4
                                                                                                                                                          uupFU+u27ab8q+XvjT/wZ9eD7tZr79nv9srULFxkw6Z4w8MpcKx9DcW8sZUf9smNd1HizKKjtJuP
                                                                                                                                                          qv8AK5yVeHMxpq8Upej/AM7H4Y0V98/tE/8ABtl/wVH+BEM+r+HfhVp3xA0yAFmuvBesRyzBR3+z
                                                                                                                                                          TeXM30RXNfEfxC+GXxE+EviWbwb8UfAur+HdWt/9dput6dJazL77JADj36V7mHx2DxavRqKXo/03
                                                                                                                                                          PJr4LFYZ/vYNf13MKig0V1HMFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFF
                                                                                                                                                          ABRRRQAUYIGa93/Yb/4JwftYf8FCvHy+Cv2c/h1Nd2sMqrq3ibUA0Ol6Yp5zNcbSAcAkIoZ2xwpr
                                                                                                                                                          98v+Ccn/AAbnfsc/sYwWPj74wadD8UPH8O2VtR8QWaPpthLgf8etowK8HkSS72zyNvQeLmee4HLF
                                                                                                                                                          yzfNP+Vb/PsetgMnxeP95K0e7/Tufi1+wp/wQ3/b7/bta18QeEPhk3hPwlcMD/wmHjJHtLWRMjLQ
                                                                                                                                                          ptMtxxnBRdpIxuFfsF+xt/wa8/sKfACK08RftBzah8VvEUO12GqsbTS0kHPy2kTZkHtK7g+lfoP8
                                                                                                                                                          VfjH8Hv2evAtz4/+MHxC0PwnoGnxZl1HWr6O1hQAcKpYjLdgq5J6AGvys/bd/wCDsT4G/D57zwd+
                                                                                                                                                          xH8LbjxvqcW6NPFHiVHtNKD9mjiVhPcKD1z5OccEg5r46eaZ/nsnDDRcY+Wn3yf/AAPQ+mjl+T5T
                                                                                                                                                          BSrNOXnr9yP1e+H3w1+Gfwf8KweD/hl4G0bw3o9mmIdP0bT4rWCMDvtjAH1NeM/tG/8ABVj/AIJ4
                                                                                                                                                          /sredafGb9q3wnZahD97RdOv/t99n0MFsHdfqwA96/nB+O//AAU//wCCpv8AwUe8VN4J1H4qeMdW
                                                                                                                                                          TUpNsPgb4d2s9vayZORH9mtMvMP+uhc8ZznmvUf2af8Ag2t/4KeftE+Trvi7wRo/w502ch5Lvx3q
                                                                                                                                                          RjuWBwci2gWSXdz0cJ6Eg1ouG8NhY8+Y4hR8lv8Ae9/uE88r13y4Oi5eb2/D/M/Q742f8Hbv7Gvg
                                                                                                                                                          6Sax+B/wG8beNJlz5d3fSQaVav8ARmMsvX1jH1r5d+Jv/B3b+1vrUskfwo/Zt8C6DESfKbV7m6v3
                                                                                                                                                          A99rRA/kK+gPgV/waF/s+aPFDeftH/tQeLNenXBls/CVlb6bCT6F50ncr9Ap96+rvhf/AMG8X/BJ
                                                                                                                                                          n4YRx7P2ZItfmjwftHifWrq8ZiO5UyBD9NuPap9vwlhdIU5VH31/Vr8gVHiLEaynGC/r1/M/GjxZ
                                                                                                                                                          /wAHPP8AwVq8SOzaT8UvCugg5wmk+CbRgv0NyJT+tcXff8HEf/BXu8cvN+1/PGT2i8L6TGPyW1Ff
                                                                                                                                                          0d+Df+CcX7AHw/hSHwh+xV8K7MxgBZl8BWDy/jI8Rcn3JrlP2pPj/wD8Ez/2CYdGT9pCx8DeDU17
                                                                                                                                                          zRo6N4QRvtAi279ohgbGN69cdaunnWUzmoUcCpN9LJv8mKWV5hFc9TFtL5pfmj+fPTP+Din/AIK+
                                                                                                                                                          2Egkg/a6kmwfuz+FNIlH4g2td54P/wCDov8A4Ku+G5EOt+M/BfiFQfnTV/BkMe4fW1aHFfvR+zj4
                                                                                                                                                          o/4J8ft0/Def4o/AXwZ4E8ZeHItSk064vv8AhEIdguESN3iKzQgnCyoemPmqbxv/AMEwv+CdfxFi
                                                                                                                                                          aPxZ+xD8LZmf709v4IsreY/9tIY1f9aUs7ydScK2BSa30V/yQ45XmTipU8W39/8Amz8gfhd/wd7/
                                                                                                                                                          ALROkyRxfGL9lHwlrcQx5smhaxcWEjfQSCYD8jX1X8Df+DsD9gP4hyxaf8Xvh5438A3LECS4uLOL
                                                                                                                                                          UbRT7SW7eYR7mIV638Vv+Dbr/gk58UIpRZ/ArUPC00mdtx4V8RXMBjPqElaSP8CpFfJHx7/4NA/A
                                                                                                                                                          lxFNd/sxfta6tYyEEwWHjnSorlT7Ge1ERH18o/jS9pwji9JQlTfz/RtfgHs+I8NqpRmv69D9QP2e
                                                                                                                                                          f+ChX7Ef7VlvE37P/wC074Q8RzygEabb6qkV6uezW0u2ZT9UFdh8bP2d/gP+0f4VfwX8dfhH4f8A
                                                                                                                                                          FumuGAtdc0uO4CZGCUZgSjf7SkH3r+Z39o//AIN/v+Cp/wCydcS+IrP4OP4xsbLLprfw1vXv2AHO
                                                                                                                                                          4QhI7kEY/wCef51S/Ze/4Li/8FQv2GdZTwnJ8WNU8Radp7iO48I/E2Ga9WNQcGMNKy3EOOgCyALg
                                                                                                                                                          cYGKHw1Csva5diFK3nr96/yQLPJUn7PG0XH8V9z/AM2fp9+2h/wajfsu/FSG78U/sdePb74cay4Z
                                                                                                                                                          49E1V5NQ0mRzztBY+fAD6hnA7Lxivx7/AG2v+CUn7cH7A2pSv8efg5ef2Esm238YaKDd6VPyQP36
                                                                                                                                                          D90T/dkCN7V+0v7Dn/B0p+x18fJLPwV+1DoF38K/EU5VDqVzJ9q0WVz/ANPAw8HP/PRNoH8dfpNp
                                                                                                                                                          +o/Db4y+CUvtJvtE8UeHNZtcrNBJFe2V7Cw7EbkkQg+4NKlnWeZLUVPFxcl5/pJb/iFTK8pzSHPh
                                                                                                                                                          2k/L9V/wx/FPg5x3pK/og/4KQ/8ABr/+zt8fYL74lfsUXdr8N/F8gaQ+HZAf7BvmwTtVFUvZsTjm
                                                                                                                                                          PKD/AJ5jrX4T/tQ/sj/tD/sa/Eu5+E37R3ww1Lw1rEBJi+1wkwXkfaW3mHyTof7yEjscEEV9nlud
                                                                                                                                                          YHNI/upWl/K9/wDg/I+Xx2VYvAP31ePdbf8AAPN6KKK9Y8wKKKKACiiigAooooAKKKKACiiigAoo
                                                                                                                                                          ooAKKKKACiinwW811OltbRNJJK4SONFyzMTgAAck0N2BK41VLHA6+lfqT/wR8/4N0fiR+1xDpf7Q
                                                                                                                                                          /wC2Db6h4S+G8pS50rQ1Hlal4hjz1weba3OPvkb3B+UAEPX0j/wQ5/4N4NP8GQ6T+13+3z4PS51p
                                                                                                                                                          gl34S+HOoxZj07kNHdXq5w8vdYGBVM5fLfKv6x/tDftGfBX9k74S6n8Z/jx45svDvhvR4C1xeXbY
                                                                                                                                                          Ltg7YokHzSSNjCooLE9BXwudcSzlP6rgdW9HJa/KP+f3H1+VZFGMViMXtvZ/m/8AL7y18Hfgt8HP
                                                                                                                                                          2a/hnY/DD4NeBtJ8K+GdHt9trp+nQLDFGoHzOx/iY4yzsSxOSSTX5xf8FN/+Dmj4C/sxzaj8Iv2O
                                                                                                                                                          rOy+I/ja3LQ3WttKf7F0yQEgjzFwbtx/djIT1fIK1+dH/BWb/gv38f8A9v7VL/4LfAt9Q8E/CqSZ
                                                                                                                                                          oBpdrL/xMPEC7vle7dRlVbAxbodvPzFzjHov/BK7/g2f+Lv7Stvpvxs/bZn1DwJ4KnCz2PheKMJr
                                                                                                                                                          GrxEAqz5P+hxEHqwMhHRVyGrhw2SYXAUvrebT3+z1b8+rfl97OutmlfF1Pq+Xx20cui9P8/uPj/W
                                                                                                                                                          PFX/AAUq/wCCy3x6TT57jxZ8UPEUr7oNPt/k0/SoycZCArb2cQzjcdoPckkmv04/YU/4NNfC+lQ2
                                                                                                                                                          fjr9vv4pS6ld/LI3gjwfMY7ZD1KT3hG+T0IiCf75r9av2d/2YvgJ+yf8O7b4U/s7fC/SvCug2uCt
                                                                                                                                                          lpsBBlbGN8sjEvK57u7Mx7mu9rmxvE2JqR9lhI+ygtrb/wDA+X3nRhchoQl7TEv2k/Pb/g/P7jwV
                                                                                                                                                          Pht+xr/wS4/Zr8R/Er4a/AbT/DHhfwjo0l9rCeEtBWW+uIIwNzM3+snfHJZ3JwCScCvlb9gX/g4t
                                                                                                                                                          +Dv7e/7btr+yr4U+C+oeGdJ1bSbuXw/4g1zVENxfXkIEggMCKVjDRLKwPmMcoFxyK/RHxj4S0Dx7
                                                                                                                                                          4U1PwT4r09LvTNX0+ay1C1k6SwyoUdT9VYiv5IPir4Z+Jn/BK/8A4KQ6jpmiGQax8KfiCLnRpX+Q
                                                                                                                                                          XtrHMJIGPXCywFc4zjeR2qckwGGzanXjVbdW14tv+uu9+480xdfLp0pU7Knez0P68Fxjilrm/g78
                                                                                                                                                          U/CPxw+FXh74xeAb8XWi+J9Ht9S0yfu0M0auoPowzgjsQRXSV824yi7PdHuJqSugr8Q/+Dw7OPgg
                                                                                                                                                          B66z/wC21ft5X4if8HhvX4H/AF1n+VtXucNf8jul8/yZ5Wef8iup8vzR79/wabf8o0ddP/VWNT/9
                                                                                                                                                          ItPr9Pa/MP8A4NNv+UaGuf8AZWNT/wDSLT6/TyufPP8Akb1v8TNcp/5FtL0QUhIHJpa8I/4KYftZ
                                                                                                                                                          2v7EX7EPxA/aM+0xx3+jaI8WgrJj95qM5ENsuCPm/eurY9FNebSpTrVY04btpL5ndUnGlBzlstT4
                                                                                                                                                          s+In/B0L+zn8H/2yvGX7NvxA+Cut3Xhnw54ibSLLxl4cvo7p7iWPakrNauEwolEija7EhRxnivtT
                                                                                                                                                          9pL9gb9iz9vXwXBP+0H+z1pGsy39kstrq1xp32XVbQOgIKzptmjYAjKk4yMEHGK/nE/4Ia/sm3n7
                                                                                                                                                          bH/BS7wboPia2fUNI8N3beLfFclxlxLDayo6iQk/N5lw8KHOc7znvX9WCqF6V9DnuFw2UYmnDCtq
                                                                                                                                                          aV5O7+Xptc8bKa9fMaM510nFvRW6H4O/t4/8Gn3xE8IQ3vjz9gb4jt4mtV3SjwR4qljgvVGc7ILr
                                                                                                                                                          5YpfYSCM8feY18Jfs6/twf8ABRz/AIJCfF668EeH9X8QeFLixuc618PfFtrI2n3POCXtpCAM44li
                                                                                                                                                          KsR0bFf1oV4x+2X+wD+yt+3n4AbwF+0r8LbPWkjiK6dq0WYNQ05j/HBcJh05525KH+JSOK2wfE1R
                                                                                                                                                          w9jj4e0g+tlf/J/g/MzxORQUva4SXJNfd/wP60Pmf/gmN/wcD/sq/t9yWPwx8fPF8OviVPhE8O6r
                                                                                                                                                          d7rTUZOB/odywAdiTxE21/TdjNfVf7W37G37Of7cHwrufhF+0d8N7LXtMmRjZ3EkYW60+UjAmtph
                                                                                                                                                          80Mg9QcHGCCMiv54/wDgqX/wQA/aX/4J8SXfxe+FFxd+P/hnbyeadfsLXZf6MvLD7XChJCrj/Xp8
                                                                                                                                                          nALCMkCvZv8AgkF/wcl+P/gRdaV+z1+3prN74n8FbkttK8cP+81HQ0zgC4wpa7gGfvHMqAcFwAo1
                                                                                                                                                          xWR06tP67lM7pa2vqvTr8nr6mWHzWpCf1bMI2b69H6/57Hgf/BW//ghV8eP+CcOqXXxN8Ffa/GXw
                                                                                                                                                          nnuMWviaGAfaNK3NhIb6NfuHkKJgNjn+4SFr4NOe9f2qaLrfwv8Aj98MYda0LUNI8U+E/E+l7opo
                                                                                                                                                          il1Z6haSrj3V0YEgg+4Nfgp/wXJ/4N9tR/ZnGq/tZ/sU+Hrm/wDh9ua58TeD4A0s/h3JJaeDJLS2
                                                                                                                                                          nIyvLRdclOU9bIuJVXksNjNJ7J7X8n2f5nnZtkPs06+G1ju129PI/JailKkdaSvsz5UKKKKACiii
                                                                                                                                                          gAooooAKKKKACiiigAoooHJoAUKW4AySeg61+8f/AAb3f8EL7X4d6Zo/7dn7Yvgzd4iukW68AeEN
                                                                                                                                                          TtuNMhZQUv7iNh/r2BzGhH7tcMfmICfPn/BuH/wR3i/aW8bQftvftIeFhL4C8M6hjwjo19BmPXtQ
                                                                                                                                                          jPMzqww9vC2PZ5AByEYH92v2kP2jfhD+yR8Etc+O/wAbfE0Wj+G/D1n5t1OQC7nokMScb5HYhVQd
                                                                                                                                                          SRXwvEmdznP6jhXdvSTX/pK/X7j7DIsqjCP1vELzV/zf6GB+2r+2l8Cf2C/gVqXx7+PPiZbLTbNT
                                                                                                                                                          HYWELKbrVboqSlrboSN8jYPsACxIAJr+Zf8Abm/b4/bB/wCCyv7Tmm6NHoWpXcN1qX2T4f8Aw30F
                                                                                                                                                          XmjtN5CjCj/WzMAC8zD1xtUYDP29P25/2n/+CyH7XVj9g0DUriG81IaZ8Ovh7pjtKlnG7bVwoOGn
                                                                                                                                                          fhpJeOnZFAH7qf8ABFz/AIIs/Df/AIJu/DiD4h/ESystc+L2uWQ/tzWyiyR6Ojcmzs2Iyq9A8g5k
                                                                                                                                                          I7KAKyo0MLwxhVXrrmry2Xb+ur+SNKtWvn2IdKk+WjHd9/66L5s8v/4JA/8ABAT4QfsL+HrL9pz9
                                                                                                                                                          saPSNe+JFvbC9jgvXRtL8KqE3EqXwsk6j70zfKhHydN5+xf2Tv8Agpf+xt+2t8RPF/wu/Zz+LVpr
                                                                                                                                                          mreC7sRX8KDYt3FgA3NqT/r4A5KGReNw9GUt1X7a/wCyt4W/bW/Zj8V/s0eMfEuq6PZeJrAQ/wBp
                                                                                                                                                          aNePDNbyKweNjtIEiB1XdG2VcZBHcfy4+PvBf7ZH/BFf9ulbeHUJvD/jTwhe/aNH1WAP9j1qwZmV
                                                                                                                                                          ZAPl862mUFWQ/wC0pwy8ebg8L/rHKrOtV/ffZXS3+XTTbfU7cTXWSKnGnT/ddX1/rr+B/XEOlFfN
                                                                                                                                                          /wDwTG/4KS/CD/gpb+z1a/FrwDJHp+vWW228X+FpJgZtJvMcjHVoX+9G/wDEODhgwH0hXztajVw9
                                                                                                                                                          V06itJbo9ylVp1qanB3TA9K/Bn/g7c/ZB/4Rv4seBf21fDGlbLTxFp//AAjniaSKP5ftkG+W2lY/
                                                                                                                                                          3nhZ09xbr6Gv3mJwM18a/wDBd/wf8Avid/wTc8f+AvjX8SvDnhq5OnjUfClzrupxQM+qWp82FIQ5
                                                                                                                                                          3O77WiwgJKyMOhNejkeLlg80pzWzdn6P/Lc4c1w8cTgZwfqvVHg3/BrF+1//AMLp/Yg1D9m7xHqn
                                                                                                                                                          m618LdYaG0R3y7aVdFpYPfCSedH6BVQdq/ULIxnNfyQf8Esf+ClPjn/gl9+0JqHxv8I+EE8R2ure
                                                                                                                                                          GrjSdV8P3F+1vFdBmSSJywVsMksanO0naXUY3Gvob45/8HRX/BTj4rzTWvgHUvCPw/sXyIYvDeg+
                                                                                                                                                          dOq9t0128uW91VR7V9BmnDGNxGZznQSUJa3b6vfu9zxsBn2Eo4GEKrbktLJfd5H9LO5f7w/OvxF/
                                                                                                                                                          4PDCCfggQe+s/wDttX5yah+3h/wWB/aUvXt9P/aT+OviF5j89l4X1bUo42z/ANMLHamPbbWR4m/Y
                                                                                                                                                          s/4KqfGZodT8c/s0/HLxG0e4wT694b1W4ZM4ztM6EjOB9a6Ms4feWY6GIrVo+7fT1VutvyMcfnH1
                                                                                                                                                          /Cyo0qUtba/M/bD/AINNiP8Ah2jrgJ/5qxqf/pFp9fp5uX+8Pzr+Rjw5+y9/wVn+A+nsPBPwL+Pv
                                                                                                                                                          hW1Epmb+wND1m1QPgAufIUDOAPm9hWz4f/4Kb/8ABX39nHUls7z9qz4w6ZLbY3WHjHUbu7VQD0Me
                                                                                                                                                          oCQAfgKzx/Dc8fi6lejWi+Z3t/w1y8HnccHhoUqtKS5Va/8AVj+s4kbc5/Wvw9/4O4/2wRNfeAP2
                                                                                                                                                          HvDWqZ8qP/hKvFMUb5AJMkFnG+O+BO+09mQ9xXgvwG/4Osf+Chvw2khsfi/4X8FfELT0IEzXumPY
                                                                                                                                                          XpA/uzWziMH3aJq+LP2zv2pPFf8AwUC/bF8R/tCeNHt9Gm8Ya1Elrb3l2Xg0q1GyGGNpMZ2RoBuY
                                                                                                                                                          DsxA7U8l4cxeCzJVsSlyxTaad9fz89hZpneGxWCdOi3eVk7q2h+1X/Bp/wDsff8ACs/2WPEv7W/i
                                                                                                                                                          bS/L1T4i6qbLRZJEw40uzcqWGegkuDJ9REp9K/WavKv2KNC+A3gn9l3wT8PP2bfHGi+IfCXh/wAP
                                                                                                                                                          W2n6Zquh38VxDcCNArSFoiV3M25mH95jXqtfJZlip43H1K0ur/Dp+B9JgaEcNhIU10X49QoPSivh
                                                                                                                                                          f/gtl/wWC8If8E1Pg7/wifgS5tNT+LPiizb/AIRjR5MSLp8JJU6hcqCCEUhgin/WOuOitjDDYatj
                                                                                                                                                          K8aNJXkzSvXpYak6lR2SPYPid/wU6/Ya+G/7Vtj+w58S/jHpVl4z1jTw/wBjvips0eQgR2c8xOyO
                                                                                                                                                          eVTuWN8bgR/eUH85f+C0P/BuFo/iqz1b9qj/AIJ6+FY7TVVWS88RfDWzTEN6AMtLp6gYjk6kwfdb
                                                                                                                                                          +DB+Vvzf/wCCb/7Af7RP/BXr9re4j1XxHqsunC//ALV+I/xA1CRpXgjaQFsSNnfcyHIRPYscKpr+
                                                                                                                                                          qX4aeANE+Ffw70T4Z+G7m+m0/QdKgsLObU757m4eKJAimSWQlpGwOWJyTX0WLh/qziqf1WredvfX
                                                                                                                                                          T5+vbdb3PGw7/tzDz9vTtC/uvr/X4H8yf/BIj/gst8bP+CXfxMb4XfEi21TWfhheakY/EvhK6DC5
                                                                                                                                                          0iYEq9xaq+PKkU/fiOFfGDhsMP6W/g18ZPhN+0p8J9K+LXwl8Waf4i8MeIrET2V9auJI5Y2HKOP4
                                                                                                                                                          WHKsjDKkEEAgivzS/wCC9H/BCDR/2o9D1T9r39kXwrBZ/Emxga48R+HLGJY4/FEa4LSKAOLwAEg/
                                                                                                                                                          8tQNp+bBr81P+CLn/BX34g/8ExfjQ/w3+KU+o3vwq13UDH4p0CQO0mjXOQhvreMn5ZF2gSIBl1XH
                                                                                                                                                          3lWu7GYPC8Q4R4zBq1WPxR7/APB7PrtucmGxOIybELDYl3pv4Zdv67dD3b/g4G/4Ia/8My6hf/to
                                                                                                                                                          /sk+E2/4V9fXHmeLvDNhCW/4R2Zyc3ESgcWjHqP+WTED7pG38lyMV/atZaj8Nvjr8NEvLCfS/E3h
                                                                                                                                                          TxTpOUcbLmz1Gznj/FXR0bBB6g4r+Zf/AILp/wDBJbV/+Cb/AMf/APhLfhxplxN8KPGd1JL4WuyC
                                                                                                                                                          /wDZlxjdJp8rY4K5JjJ5aMdyjGu7hnPZYi2DxD99fC318n5r8Tjz7KY0v9poL3Xuu3n6HwjRQeDi
                                                                                                                                                          ivsz5UKKKKACiiigAooooAKKKKACvoz/AIJb/sAeMv8Ago1+1voXwI0LzrbQ4mGoeM9YiXP9n6XG
                                                                                                                                                          6+aw/wCmj5EaD+84PQGvnWOKSV1jiQszHCqBkk+lf1E/8EAf+Cc1v+wb+xdYeIPGejCH4g/ESKLW
                                                                                                                                                          PFjOmJLWIhja2XPTy43yw/56SP6CvDz/ADRZZgXKPxy0j+r+R6+TZe8fi0pfDHV/5fM+xvhr8Ofh
                                                                                                                                                          58AvhXpHwz8AaNaaJ4Z8LaRHaadaR4SK1toUwMk+wyWPU5JPWv5t/wDgvn/wVn1b/goJ8f3+D/wk
                                                                                                                                                          1uYfCnwRfPb6RFCxC63fqWSTUGGBleSkQPRMt1c4/RX/AIOc/wDgp1P+zr8Dof2KPhD4g8nxf8RL
                                                                                                                                                          Bn8S3VrLiXTNG3bSmR917ghkHfy1kPG5TXxv/wAG0X/BK+H9pn4wt+2r8a/DvneB/AepeX4bsrqM
                                                                                                                                                          +Xq2soFcOc/ejtwysexkKDnawr5XJMNSy/CSzXFa78q6t9/V9PvPo81r1MZiI5fh3b+Z9l2+XX5I
                                                                                                                                                          +5v+Dez/AII12n7GPw3t/wBqv9oXwwh+KfinT86fYXcYLeG9PkwREAfu3EgAMjdVB8sfx5/TwAAY
                                                                                                                                                          FImMcUtfLYzGV8fiJVqr1f4eS9D3sLhqWEoqlTWi/q4EA9a+T/8AgrV/wSz+F/8AwU4+AUng3U1t
                                                                                                                                                          tJ8caJG8/grxW0WWtJiMmCUjlreTADL1Bww5HP1hRWdCvVw1aNWk7SWzNKtKnXpunNXTP5JP2Zv2
                                                                                                                                                          iv2t/wDgi/8AtvXOoTaFdaP4i8OX39m+NvCF7LiDVbPcrPA5GVZWG145RnB2uuRwf6bP2cv+Cg/7
                                                                                                                                                          MP7SP7J1r+2V4Z+JWn6b4NFg0+t3esXSQHRpY+Jre53EbHRuP9rKlchlJ+GP+DoX9kP9krxt+zJF
                                                                                                                                                          +1H4+8daZ4P+JPh9ls/DV1KpaXxNH8x/s0xr8zkZLrJjEeG3Haxx+AvgOT4veOIofgR8OJdd1SPx
                                                                                                                                                          Dq8DQeFNKklkTUL0ApE32dDiSQBiAcZANfevB4binBwxX8Oa0k7aPv8A8B9NmfILE18gxMsOvfg9
                                                                                                                                                          Yr1/r5n7Mf8ABSf/AIOp/s1zqHwn/wCCc2hRzBGaGX4l69ZnaSDgtZ2ki8j0kmH/AGz71+bXwp/Z
                                                                                                                                                          u/4KW/8ABX/4tXHijw5o3iz4las85TUfFOv35WxscnJVrmZhFEoBz5Sc4wFQ8Cv0x/4JZf8ABrro
                                                                                                                                                          un2em/G3/go4ftt3IqXFn8MLC5KxQcZAv542zI3IzDGQoxhmYErX7K+BfAPgn4YeFLHwL8OvCmn6
                                                                                                                                                          HoumwCGw0vS7VYIIIx0VUQACuKpnGV5KnSy6mpS6zf8AV38rI64ZbmGZtVMbPlj/ACr+tPxfofjj
                                                                                                                                                          +yT/AMGjXgvTre28SftpftB3mp3Jw03hnwPAIIFPUq93MC7+nyxpj+8a/RH4Af8ABIH/AIJtfs02
                                                                                                                                                          8B+GP7I3hL7ZABjVtcsf7TvGI7+bdGRl55wuB7V9KUV85is3zLGP97Vduy0X3I9rD5bgcKv3cF67
                                                                                                                                                          v72VNI0HRPD9immaDo9rZW0QxHb2kCxxoPQKoAFWwAOlFFea9TuskIVB5NZvibwX4P8AGmnNo/jH
                                                                                                                                                          wrp2rWjgh7bU7JJ4z9VcEVp0ULR3Qmk9z5K/aK/4Icf8Ewf2k7e4m8Wfsq6Fo2pTgn+2fB4bSrlW
                                                                                                                                                          PViLcrHIf99Gr83/ANr/AP4NHvF+jQXPib9iT4+R6yoBaPwr43iW3n/3Y7yIbG9AHjT3Y9a/dWiv
                                                                                                                                                          Vwmd5ngn+7qNrs9V+P6HBicrwGKXvwV+60f4H8jmna9/wUw/4I6fGwWaz+MfhV4hEm+SymO6x1NF
                                                                                                                                                          IzlcvbXcfAGRvHTBHBr9d/8Agmf/AMHQvwh+ONxp3wj/AG69Ks/AfiedkgtfGFluOj6hITgecpBa
                                                                                                                                                          yY8csWjzzuQHA/Tn46/s9/Bf9pn4fXfwr+PXw20nxT4fvQfO03VrUSKrYIDofvRuATh1IYZ4Ir8M
                                                                                                                                                          P+CrP/Bsh48+B1pqfx0/YFe/8V+FrcPPqHgO5Jl1TTYwNzNbOTm8jAz8hHmgDjzDyPoaeY5Rny9n
                                                                                                                                                          jYezqdJLb7/0d15njSwWY5S3PCy54dYv+vy+4/WD/gp1/wAFQvg1/wAE5P2Z2+M2tajZ63ruu25T
                                                                                                                                                          wB4et7kH+2ZyqkSBlzi3RWV3k6YIAyWUH+cD4UfC79sL/gtN+3RPZLqk2t+L/Ft817r2t3mfsmjW
                                                                                                                                                          KkbpGxxHBEhCJGOT8qjJNeB+J/FXjjXYtO8M+NfEmp3Mfh+3On6bZ6ncyONNhEjM0EaMT5Sh2Y7A
                                                                                                                                                          AMk8V/UL/wAEJf2RP2TP2aP2J9C8U/s0eNtM8aXnjK2jvvFXjmzUh7672Ddb7W+aCOEkoIWwQdzM
                                                                                                                                                          NzGuqpRo8KYBzh79WeilbRf126vyOeFSrxDi1GXu046tX1f9fge5/sKfsPfBT/gn/wDs+aV+z78F
                                                                                                                                                          dI2Wtkvm6pq08YFzq14wHmXMxHVmIwB0VQFHAr2UAAYFFFfBVKk6s3Obu3q2fXwhCnBRirJAQD1r
                                                                                                                                                          8Rf+DlD/AII12iQal/wUT/Zj8KCNkxJ8T/D+nxYDZJzqsajvkgTADpiTHDmv26qvqumadrWnz6Pq
                                                                                                                                                          9jDdWt3C0NzbXEYeOWNgQyMp4IIJBB6g115dmFbLMUq1P5ruuxzY3B0sdh3Sn8vJn4Jf8G0X/BXS
                                                                                                                                                          f4UeNbP/AIJ7/tB+JmPhnX7oj4d6ndyE/wBm6hI4/wBAJPSKYklOcLJx/wAtOP2d/bW/ZG+F/wC3
                                                                                                                                                          H+zZ4l/Zx+LGnLJYa7YstnfBA0unXagmG6iPZ43w3oRlTkEiv5wf+C4P/BM/V/8Agmn+1mNV+Glp
                                                                                                                                                          cQ/DzxbM2qeBr+MtnT5FYNLYl853wsQVOclGQ9Qcftv/AMEIP+ClsH/BQ39kG2j8c6sknxG8CiLT
                                                                                                                                                          PGkZYBrrhvs98B6Soh3dvMSQelfQ57hISUM2wbtGVm7dH3+/R+fqeNlOImpTy/E6uO3mu3+XkfzU
                                                                                                                                                          /tV/s1fEr9kH9oLxT+zp8WtMNtrXhjVJLWZ1H7u5jzmK4jPeORCrqfRhnkEV55X9Bv8AwdJf8E5Y
                                                                                                                                                          /jN8C7T9ur4aaEG8SfD+3Ft4tS2jy99ozyALKQOpt3Ytn/nnI5PCDH8+WMV9pk2ZRzPAxq/a2a8/
                                                                                                                                                          +DufK5rgZYDFuHR6r0CiiivVPNCiiigAooooAKKKUDNAH3D/AMG/37CUf7b37fmiSeLNG+0+Dvh7
                                                                                                                                                          GniTxN50W6GdopVFtatkYJkmKkqeqRSelf01fHD4veCf2e/g74m+N/xC1JLLQ/CmiXGp6nOzAYih
                                                                                                                                                          jLlRnqxwFA6kkAcmvhL/AINlv2Oof2cv+Ce1l8Xdf0oReIvipfvrNy7ph009CYrOPOM4KBpf+22O
                                                                                                                                                          1ePf8HYX7a83w7+A3hX9i3wdq5j1Hx1dnVPFCRPgpplsw8qNsH/lrPz9Lc+or8yzKU894hWHj8Kf
                                                                                                                                                          L8l8T/P8D77ARjlOTOtJatX+/ZH5IeLNc+PP/BYP/go7JPZxyT+J/il4v8nTrZgzx6XZZO1MDOIr
                                                                                                                                                          e3TJPpGzHkk1/Sb4+0mz/wCCVX/BM+80X9l74Oar4rufh34QWDQdB0fTXurjUL04U3MyRDcwMjNP
                                                                                                                                                          KwGdofGMDH5v/wDBph+w1Ey+Lv2+PHGjjzA7eHfA7TR8gYDXtwpPTrHCCP8ApqPSv27IyuDS4kx1
                                                                                                                                                          OWMhhIL93StddG+3yWn3jyPCTWGliJv36nXsv61+4/mg/Yd/4ORv28P2U/GE2l/HXWJvil4Xu9Qk
                                                                                                                                                          m1LS/EkpXULR3kLP9mucZjwSQInVkHAAXFfuR+wZ/wAFaf2Lv+Ch2gxS/BH4lxWniMQh73wR4heO
                                                                                                                                                          21a29cQ7iJlB/jiLqMjJGcV5/wD8FD/+CD/7Ev7fsF34ruPCqeBfHkylk8ZeFbVInuJMHBu4AAly
                                                                                                                                                          M9SdsmBgOMCvwr/bm/4I6/t/f8EwfFg+I1xpN9qfhzTboTaV8SPA803l2xBBV5dmJbNx6thc/ddq
                                                                                                                                                          7FSyHP4/u/3Nbt0f6P5Wfkc/tM3yd+/+9p9+q/r5o/qsryf9tT9sv4L/ALCH7P8ArP7Q3xw1r7Pp
                                                                                                                                                          mlx7bSxhdftOp3TZ8u1gViN8jEfQKGY4Ck1+IP8AwTo/4Oj/AI+/A8WPwy/be0a4+InhmLZEniq0
                                                                                                                                                          2prlog4zJuIS8AGPvbZDyS7Zr50/4LM/8FRPF/8AwVJ/aditvh8NTX4eeH5vsHgLw/5TrJeSO2Gv
                                                                                                                                                          JIRkmeUkKF6qgVQMls8eG4Vxzx6pV1amtXJbNdl5nTX4gwv1TnpO83ol5+ZxH7Sv7Sf7Y/8AwWl/
                                                                                                                                                          bOs5P7Evda13Xb4WHg7wZpJdrXSLUtwiA8Kqj55ZmxnBZiAAB++P/BH3/gij8GP+CbXga38a+L7O
                                                                                                                                                          x8TfFrUrQf234neIPFp27rbWO5QY0A4aT78hBzhcKML/AIIRf8EfPD//AATx+DEXxZ+LOhW9x8Xv
                                                                                                                                                          FtgG1q5kRXOiWjEMunwt2PCtKwPzOAOiCv0EqM7zqNVfU8J7tKOmnX/gfnuysqyx039ZxGtSWuvT
                                                                                                                                                          /g/kAAHAooor5g94KKKKACiiigAooooAKKKKACggEYNFFAH5b/8ABbz/AIICeDP2vNG1X9p39kfw
                                                                                                                                                          /Z6J8U7eNrjVdEt1WG18UActkAYju8Z2ycCQ8PyQ4/J7/glV/wAFSvjr/wAElf2h7vw/4s0nVrjw
                                                                                                                                                          Vd6m1p8QPAV2jRzQSofLeeKOQr5V3HtwQcBwuxv4Sv8AVTX5Bf8AByB/wRssvjD4N1H9vj9mvwqq
                                                                                                                                                          eLtCtBJ490TT4AP7ZskzuvVVRzcRL9/+/GufvIN31uS5vCtD+z8d71OWib6dlft2fQ+czTLZ05/X
                                                                                                                                                          MLpOOrS6/wBde5+q/wAHPjB8Ofj78M9G+MPwk8V2mt+HPEFil3pWpWcm5Jo2H5hgchlPKkEEAiul
                                                                                                                                                          JCjJr+an/ghX/wAFubf/AIJzy698Gf2iptY1b4X6jaz6hpNvpkJuLnS9UAB2wozBRHOAVYZAD7Wy
                                                                                                                                                          Buo/4KLf8HI37X/7YbX3w3+AEk/ws8D3JaHydFu2Or6hEeCJ7pcGMN/chC8HBZqynwpmDx0qMPgX
                                                                                                                                                          2ntb/M0jxBg/qiqS+L+Vd/8AI/YT/gof/wAF1v2Jf+Cfltd+F9V8XL428dxIVi8F+E7mKaWCTsLu
                                                                                                                                                          bdstR3IbMmOQhr8bfHf/AAcTf8FLPj/+1f4T+JHge7l0/TNF1+OfSPhb4Rt5mg1RMlTb3G3dLdu6
                                                                                                                                                          My88A4ZUBArN/wCCeX/Bvj+2x+3deWvxJ+JNnP8ADnwNeuJ5PEnia3c32oI3Je2tWIeTPXzJCinO
                                                                                                                                                          QW6V+7X7BX/BIv8AYq/4J46JEfgv8NYb7xMYgl7448QIlzqk5wMhZCoECEjOyIKPXOK65/2BkdNw
                                                                                                                                                          t7ars+y/Rfiznh/a+azU7+yp7+b/AF/Qof8ABRn9jjQf+Cpf/BPm88Aal4Ru9D8R32kRa94Ng8QW
                                                                                                                                                          ZgvNG1ZYS8UU64JjJ3tBIB0Dt1wK/nv/AOCSX7Z3jL/gmP8A8FB9J17xzHdaZotxqZ8NfEjSpwVa
                                                                                                                                                          G1aYRyOykj54JAJOf7jAda/q7YEjj+dfzi/8HRX7DMX7PH7Zdn+0z4O0cW/h34s273F2IExHDrFu
                                                                                                                                                          qLcjA+6ZUaOX/aZpD64y4ZxVOv7TLq3wVE7eT6/hr6ovPcPOlyY2n8UGr+n9fmf0Ra/ofg/4peA7
                                                                                                                                                          vw9rlpbatoXiDSnguYWw8V3azRkEehVkb9a/kT/4KRfsfa7+wp+2Z43/AGcdUimNlpWqtN4euplw
                                                                                                                                                          brTJiZLWXOBk+WQrEcbkb0r+gr/g3K/bVk/a1/4J6aP4S8T6sbrxP8MJk8N6s0r5lktkjDWczZ5O
                                                                                                                                                          YcJu7mFupzXzF/wdufscw+IPht4I/bh8O6Vm78P3S+GvE00ScmzmZ5LV3PokxkQH1nA7inw/WqZT
                                                                                                                                                          nU8HU2k+X5rZ/P8AUWc0oZjlccRDda/Lqj8H6KUjB65pK/ST4QKKKKACiiigArtf2cPgtr37Rvx7
                                                                                                                                                          8H/AbwyzLfeLvEdppcMqrkxCaVUaTHfapLY/2a4oDJxX6J/8GwvwIi+Lf/BT/TPGup2Xm2Xw/wDD
                                                                                                                                                          N/rbFlyv2llW1gH1DTs494q48wxP1TA1K38qb+fT8TqwND6zjIUu7X3dT+k/wL4M8N/DbwPpPw/8
                                                                                                                                                          I6elnpGhaZDYabap92G3hjEaL+CqBX8q3/BY79ovWv24v+CoXjvX/DEz31lF4hj8L+EbaM5BgtiL
                                                                                                                                                          ZNv/AF0mEkn1lx2r+lv/AIKBfHqL9mD9if4n/HhZ1juPD3gy+m05pOhvGiMduD7GZ4xX8s3/AATS
                                                                                                                                                          +I3wI+Gn7efw8+M37VHiKe18JeGPEa65qtwllJdSTT2+ZoF2ICWzOsZOeMA5r4bhOi1GvjLczirL
                                                                                                                                                          u3u/nt959fxDVjKVHDXspO79Nv8AM/qf/YJ/Zn0X9j79jz4ffs6aNbojeGvDVvDqMirgz3rL5lzK
                                                                                                                                                          fd5nkb2zjoK9er4CX/g5j/4JLAc/GLxB/wCEfd//ABNL/wARMf8AwSW/6LF4g/8ACPu//ia8Cplm
                                                                                                                                                          b1ajnKjK7d37r6ntQxmApwUY1I2Wm6PvyodQ06x1Wym07UrSO4t7iJo54Jow6SIwwVZTwQQSCD1r
                                                                                                                                                          4J/4iY/+CS3/AEWLxB/4R93/APE0n/ETH/wSW/6LFr//AIR93/8AE1H9kZp/z4l/4Cyvr2Bf/L2P
                                                                                                                                                          3r/M/Oj/AIOe/wBkj9gT9lvxv4Pvv2f/AAEPDPxF8YyXGoa9o2iXHl6ctip2i5a3IIhkklyqiMop
                                                                                                                                                          8uQlc8mx/wAGu/8AwTUs/jl8Xr39uv4s6CLjw14DvjZ+ELa5jzHeazsVmnwT8y26OpHGPMkXuhFf
                                                                                                                                                          F3/BQT9pLxn/AMFQv+CjOv8Aj7wRDc3sfivxPFongDT5FIZbESCCzQr/AAs4IkYc4aRvSv6hv2Hv
                                                                                                                                                          2XPCP7GH7Kvgr9m3wbCgg8NaLFDe3Kpg3d4w33Fwfd5WdvYEDtX1maYrEZVkNPCyk3UmtW3ql1X6
                                                                                                                                                          HzeAw9HMM3nXUUoQelur7/qerjpRRRXwR9eFFFNlljhQySuFVRlmJwAPU0AOoJxX5+f8FBv+Div9
                                                                                                                                                          iD9i2W88D/D/AFX/AIWj42t8xto3he8Q2VpLzxcXnzIuD1SMO46EDt+Nv7X3/Bfz/gpN+2Vf3Hhn
                                                                                                                                                          SfiXL4G8PXjlLfwz4Aja2d0P8MlyCbiU46/MF9FFe9gOHcxx65rcke8tPuW55GMzrBYR8t+aXZH9
                                                                                                                                                          G37RH7fX7Gn7J0Uh/aH/AGkfCnheeJdzafe6mr3ZHtbx7pW9gFOa+KvjN/wdXf8ABN74fyy2nwx0
                                                                                                                                                          rxt48kjJCTaZoX2KCT6NeNG4H1QV/OFqN/qGqX0uoapezXFzK5eaa4kLvIxOSSxySSepNfZP/BOb
                                                                                                                                                          /ghj+2f/AMFEbeDxt4e0eHwX4DlfH/Ca+JoZFiuQMZ+ywjD3P+8NsecjeCDj6L/VjKMBR9rjKrsv
                                                                                                                                                          kvu1f4nif2/mOLq+zw1Nfm/0R90+Ov8Ag8UufNkt/hp+wim3nyrrXfHxz7Ziis//AGpXn+of8Hf3
                                                                                                                                                          7WMkmdJ/ZQ+HcK+lxf38p/MSJWV/wUb/AOCY/wDwS1/4JB/A61tfifr/AIm+Lnxf8SWzL4c8O3Wt
                                                                                                                                                          f2bYwDkG+nhtNsqwowwFMuZG+UYAZh+eH7Jn7G/7Q/7cvxch+EH7OHw1uda1SciS6eIFLTTYC2DN
                                                                                                                                                          cTN8sUY9WOTjADHiuvB5bw7Xw7rxpWgvtSbSfmrvb7jDFY7O6NZUnUvN9IpXX4H6YaH/AMHgn7SV
                                                                                                                                                          vKp8SfseeB7xAfnWx168tifoWEuPyNen+Av+Dw/wHdyxx/FH9hvWNOQ8SzaD42ivSPcJLaw/+hV0
                                                                                                                                                          f7KP/BpN+z34Z8O2+rftj/GjXfFGtSRq1zpPhCVbCwgYjlPMdGllAP8AEPLzjoOlfMv/AAVw/Zn/
                                                                                                                                                          AOCCn7B0d58HPhf4U8ceKviikW2TStB8esbbSHOcG9mljlVXGM+Sql+mdgINefCHC+MxPsKFGUn3
                                                                                                                                                          je3rq197R2Snn+Goe1q1YxXnb9EfpH+zv/wcl/8ABLf473UGi698WdR8BancELHbeNdHkghLE9Pt
                                                                                                                                                          MXmQr9XdK+4/BXjrwZ8SPDdr4x+H/irTtb0m9j32ep6VepcQTL6q6EqfwNfxV+H/AAz4j8X6tHof
                                                                                                                                                          hPw/e6nezH91Z2Fq80r/AEVASfyr1v8AZF/b6/a5/YJ8dDxT+zt8V9T0F0uAdS0K4JlsL3acGO4t
                                                                                                                                                          X+Ru4zgOOzA1pjeDqErvC1LPtLVfetV9zM8LxNVjpiIXXdH9h1MniinhaGaNXR1IZGGQwPUEdxXw
                                                                                                                                                          5/wR7/4LXfCb/gpv4Vk8EeItOt/CvxR0azEur+GjcZi1CMcNdWZblowfvRn5kyOWHzV9zda+HxOG
                                                                                                                                                          r4Ss6VaNpI+roV6WJpKpTd0z+XX/AIL8/wDBNeD9gD9r6XXPhvohtvh18QPN1PwusSYjsJ93+k2I
                                                                                                                                                          54EbMGTp8kij+E194f8ABsH+xv8A8E9vi58BJf2i774cReI/i34Z16Sz1uTxHILmHSSWL20tpAQE
                                                                                                                                                          QPFt/eMGcOjgMB1+2v8AguP+xDbftzf8E/fFng7StKW48UeFIW8SeEGVMyG8to3LQrjk+bCZY8dC
                                                                                                                                                          WX0BH4Tf8EHf+Ckfhj/gnJ+15deIvi3qt5a/D/xbosmn+KTa27TGGSPMttP5a8syvuTgZAmb3r7e
                                                                                                                                                          jicTnXDsoU5P2sLXtvJf8Ffe0fLVKFDLM7jOaXJPa/R/8B/gz+phEVBtXgdhS18Bn/g5j/4JLD/m
                                                                                                                                                          sWv/APhIXf8A8TR/xEx/8Elv+ixeIP8Awj7v/wCJr5L+yM0/58S/8BZ9J9fwP/P2P3o+/K+Lv+C+
                                                                                                                                                          v7JEX7Wn/BNbxxYabpouNe8E2x8U+H9q5fzLRWaZF93tzMoHckCuU/4iY/8Agkt/0WLxB/4R93/8
                                                                                                                                                          TVXWv+Dkz/gkRr+k3Wh6p8Wtemtby2eC5hbwfd4eN1Ksp+XuCRW+Gy/N8LiIVo0ZXi0/hZlXxWX1
                                                                                                                                                          6MqcqsbNW3R+XP8Awa5/tVTfBH/goWPgfqupGLR/iposunGNnwn9oWyPc2zH3KrPGPeUDvX70f8A
                                                                                                                                                          BQb9mi0/bB/Yx+In7Os9ukk/iPw1PHpgfHy30Y822bJ6YmSM57V/KH4Z+LHhn9nX9te1+M/wP1ua
                                                                                                                                                          70Pwh8R/7T8MX3kNE9xYwXu+FtjYKFogPlPIzg1/YZ4S8R6b4y8K6X4v0e4Saz1XT4by1mjbKvHI
                                                                                                                                                          gdWB7ghga9niulLD4+li4aOST+cbfpb7jyuHqirYOph5a8rt8n/TP4nriCe1ne2uYHikjYrJHIpD
                                                                                                                                                          Iw4IIPQg0yvpX/gsH8B0/Zx/4KU/F34ZWll9ntB4rl1LT49uALe8VbuPHtib9K+aq/QcPWjiKEas
                                                                                                                                                          dpJP7z4mvSdGtKm+ja+4KKKK2MgooooAAcEH0r9yv+DPj4UQjw18ZvjjcWvzyX+maFazbeoRJLiV
                                                                                                                                                          c/8AA4T+NfhqOtf0if8ABqJ4Li8N/wDBMnUfEYiAfxH8TdUvGbHLCO3tLUfh/o5/M183xXVdPJ5J
                                                                                                                                                          faaX6/oe9w5DnzJPsm/0/U0f+Dpr4uS/Dn/gmFJ4QtLopN428daZpBVWwTEizXkn4YtQD/vCvyf/
                                                                                                                                                          AOCUP/BCvx7/AMFR/hH4i+L+jfHXT/BtloevjS4or3RJLs3beSsjOCsibQN4GOa+3v8Ag8M8byRe
                                                                                                                                                          Avgr8N45sJPq+ranNHnqUigiQ49vMk/Ovpf/AINgPAUPhP8A4JQ+HfEqwgP4n8V6zqDPjlglybT9
                                                                                                                                                          PsxrwMNiq+VcLxrUXaU59r9+/lE9qvh6WYZ86dVXjGP+X+Z8af8AEHl8Tf8Ao97Q/wDwjp//AI/R
                                                                                                                                                          /wAQeXxN/wCj3tD/APCOn/8Aj9fuzRXk/wCs+d/8/f8AyWP+R6P9hZX/AM+/xf8AmfhN/wAQeXxN
                                                                                                                                                          /wCj3tD/APCOn/8Aj9H/ABB5fE3/AKPe0P8A8I6f/wCP1+7NFL/WfO/+fv8A5LH/ACD+wsr/AOff
                                                                                                                                                          4v8AzPyg/wCCb/8AwbI6J+xp+1P4f/aZ+Ln7Q8PjOTwlM13oOiWGgm1iN5sZEmmaSRywj3b1VQPn
                                                                                                                                                          VSTgYP6vAYGM0tFeZjMdisfVVSvK7St2/I7sNhMPg6fJRjZBRQSBya+fP+CjX/BRn4Ef8E3PgTcf
                                                                                                                                                          F74v6h9p1C6EkHhbwxbSAXWs3gXIiQH7qDILyHhFPclQcKVKpXqqnTV5PZI2qVIUoOc3ZI7X9rH9
                                                                                                                                                          sH9n/wDYm+Et78aP2ifH9roej2i4hjdg1zfS9oLeHIaaQ/3V6DkkAEj+eP8A4Kg/8HBX7Uf7emqX
                                                                                                                                                          3ws+CtxqHw9+Gs0hhh0fSrhk1PWELED7ZNG2cMMfuIzs7MX614h8fP2iP24/+C0v7XtnaT2Go+Jv
                                                                                                                                                          EWs3b2/hLwZpLN9i0e2Jz5cSsdsaKoy8zkE4LM3p+33/AASS/wCDfX4FfsK6bp3xi+Pllp/jn4rG
                                                                                                                                                          NZluriESafoLkDMdpGww8inI89hu/uhR1+zp4PLeHKSrYv36z1Ue39d38j5ieJx2dVHTw3uUlvLv
                                                                                                                                                          /Xb7z80/+Cb3/BtP+1R+1rFY/E/9pm6ufhd4HuNssdteWx/tzUIyQf3du4xbqR0eXnpiNgc16r/w
                                                                                                                                                          Wm079i//AIJG/BbTf2Gf2GvhnYWXxD8baW0njXx5qO261u10ckr5QuiA0L3LBgyxhF8tG4+YY/e2
                                                                                                                                                          6uobC0kvblgqQxl5G9FAyT+VfyP/ALXfxM8b/wDBSv8A4Kd+Idd0e4ku7/4ifESLRfDMZbcI7dp0
                                                                                                                                                          s7ONfRRGI/1J6mtMpx2MzzHyqYiVqVNX5Vtfpfv317EZhhcNlOEUKKvUnpd7+dux9X/8G9//AARg
                                                                                                                                                          079tvxa37Vn7S3h+SX4Y+G9Q8rStFuFKr4lvlGWVsj5raI434xvYhM4Div3/APiv8Svhb+yv8Cdb
                                                                                                                                                          +J/ipbfRvCngnQJbu4hs4UjSC2gjyIokG1QSAEVRgZIFRfsw/ADwR+yz+z/4S/Z9+HenR2+k+E9D
                                                                                                                                                          t9PtxGoBlZEHmTN6u7lnY9SzE1+ev/B1v+0XqHwv/YM0T4IaHfNDcfEbxbFDf+W2GextF+0OnHYy
                                                                                                                                                          /Z8+oBHevDr4mvxFnEIN+63ZLsuvztqepRoUsmy2UkveSu33f+Vz8W/iB4y/aW/4LG/8FBvt0Vq9
                                                                                                                                                          94u+I/iFLTSbAyO1vpNmDiOPPOyCCEFmYDorNjLc/wBN/wDwTu/4J8fBD/gnT+z5p3wV+EukRSXv
                                                                                                                                                          lrL4m8SSwKLvWbzHzzSsBnaCSEToi4A5yT+U/wDwaLfspaRrPi74jftkeIdMSabR4I/DXhySRARD
                                                                                                                                                          JNtnupFz0bYsKZ6hXcfxGv3TAA6d67OKMe3iFgaWlOmkrd3b9DnyHCL2TxdTWc76+X/BPzw/4OCv
                                                                                                                                                          +CsGpf8ABPv4A2vwo+DOsRw/E/4gW8sek3SMC+i2CkLLfYzkOSTHETxv3Nz5ZFfjT/wSb/4JL/Gj
                                                                                                                                                          /grH8Y9R8ReIPEV/pPgTSr/zPGvje4zLcXE7/Obe3ZwRLcvu3FmyEDbmySqtjf8ABZb9oTxR+2f/
                                                                                                                                                          AMFR/iFf6RPJfW9j4pPhTwnaq+VNvaym1j2Z7SSh5P8AtrX9KX/BPD9kXwd+w9+yD4L/AGd/CNjE
                                                                                                                                                          j6VpEUmt3Uce03upSIGuZ29S0mcZ5Cqo7V3TqrhzJYKkv31XVvt/w10l53Zywp/21mk3U/h09Eu/
                                                                                                                                                          /Dj/ANkT/gnz+yJ+w54Lh8I/s5fBnStGdYgt5rklsk2pXxH8U90w8yT1xkKOwFflf/wcs/8ABHe3
                                                                                                                                                          a0m/4KEfsweAwjoT/wALQ0PSLXAZMDbqiRxr1GCJz3BEh6OT+3NRXlna6hayWN7bRzQzIUlilQMr
                                                                                                                                                          qRgqQeCCOMV8vgs0xeCxqxKk2+t3uuzPdxWAw+KwroNWXS3Q/j4/4Jy/EX4nfCr9un4U+M/g7Jd/
                                                                                                                                                          8JBD44sIbSCz3F7iOaZYpoSF5ZXid1YdCpOa/sLUkqCfSvHfhv8A8E+/2Ivg78SX+Mfws/ZP8A6B
                                                                                                                                                          4qeV5BruleGLaG5jd87mR1T92Tk5K4zk5r2OuzPc2pZvWhOEOWytru/+AjnynLqmXUpQlK93cZNB
                                                                                                                                                          FcRtDMoZHUqykZBB6ivxj/aV/wCDSmw+JHxu8R+P/gl+1TbeHPD2t6rNfWmg6r4aa4ewMrF2iWSO
                                                                                                                                                          VAyKxIX5QQuAc4yf2forz8FmOMy6Tlh5cre+if5nZisFhsbFKtG9j8Jv+IPL4m/9HvaH/wCEdP8A
                                                                                                                                                          /H6P+IPL4m/9HvaH/wCEdP8A/H6/dmivS/1nzv8A5+/+Sx/yOL+wsr/59/i/8z8Jv+IPL4m/9Hva
                                                                                                                                                          H/4R0/8A8fo/4g8vib/0e9of/hHT/wDx+v3Zopf6z53/AM/f/JY/5B/YWV/8+/xf+Z/KF/wVr/4J
                                                                                                                                                          M+Mv+CU/jbwd4V8TfFS08X23jHS7q7tNRs9Le1WKS3kRJIirO2SBJG2c/wAfSv6Gf+CLHxem+Nv/
                                                                                                                                                          AAS9+Dfi+8u/OubTwfDpN0xbcd9kWtRk9ztiUn3NfCv/AAeB+BY774FfB34kLbZk03xZqOnNIP4U
                                                                                                                                                          uLZJP1Nute0f8GrHjibxZ/wS4GgSylv+Ea+Imracu452hkt7sD/yZr1M0r1cx4apYmq7zUmm/vX+
                                                                                                                                                          RwYCjTwOd1KNNWi43X4f8E/Pf/g7M+FSeE/+Cg3hv4nWtr5cfi74e23nOBxJPazzRM318toR9FFf
                                                                                                                                                          lrX7if8AB4b4KUaX8EfiLHANxuNY02WXuBttpVH/AKH+Vfh3X1fDlV1cmpN9E19zaPnM9pqnmdRL
                                                                                                                                                          rr96QUUUV7Z5AUUUUAA68V/UF/wbUabHp3/BJHwI0agG41XV5mIHUm+l/wAK/l96V/UR/wAG2d3H
                                                                                                                                                          d/8ABI74f+Wc+XqOrRt9RfTV8nxj/wAiyH+Jfkz6Xhe312X+F/mj4H/4PBtUkf45/BrRSfkTwpqU
                                                                                                                                                          2Pc3MY/9lr9If+Df7S49I/4JBfBa2ijCh9H1CcgdzJqt5IT/AOPV+bP/AAeCWEiftAfB3UinyP4P
                                                                                                                                                          1GMN7i6Q/wBa/Sv/AIIF3yah/wAEiPgpNGOF0G9jP1TUrtD+or5/MP8AklcNb+b/AOSPaweuf1/R
                                                                                                                                                          fofYVFFFfJn0IUUUUAFFFIzqgJdsADJNAHmX7YX7WXwk/Ym/Z98QftE/GrWha6PodsTFAh/fX1yQ
                                                                                                                                                          fKtYh/FJI2FA7ck4AJH8uX7Q3x5/a5/4LQ/ty294mj3Or+I/FOpLp3g7wpZvm30ez3fJCpwAsaLl
                                                                                                                                                          5JmxkhnY+nuP/Bwd/wAFQL39vD9qJ/gx8K/EDXPw0+H189poq2sm6PV9SGUnvvlOHXOYojz8gJH+
                                                                                                                                                          sIr9R/8Ag3o/4JKaf+xH8CIP2jPjL4bUfFPx3pySyw3UX7zQdOY7o7RcjKSuNry987U/g5+3wdOj
                                                                                                                                                          w5lv1usr1p/Cu39bv5I+UxM6md476tTf7qO77/10+89m/wCCSP8AwST+Dv8AwTH+DSWdlDb618RN
                                                                                                                                                          dtY28Y+L2i+aV8Z+zW+STHboeABguRubnAH17QPpRXx1fEVsVWdWq7ye59NRo06FNU6asked/tde
                                                                                                                                                          ItQ8H/spfE3xbpLlbrS/h7rV3bMvUSRWMzqfzAr+Yz/ggh4R0vxf/wAFbvgxY6rGjw2euXN8sb95
                                                                                                                                                          LeyuJYz9RIqN/wABr+pr4m+DbP4i/DnxB8P9Rj322u6Jd6fcIT1SaFo2H5Ma/ku/Yu+IOr/8E/P+
                                                                                                                                                          Cm/gnxZ4/R7V/h58SlsfEyuu1kthM1pdnB6HyXlIz7V9ZwynVy/F0ofE46fc0fPZ61DGYapL4U/1
                                                                                                                                                          R/Xai4FfhX/weG65e/8ACw/gf4d3H7ONH1m429i/m2q5+uP51+5ulajY6vp0Gq6ZeJcW1zCktvPE
                                                                                                                                                          25ZEYZVge4IIOa/G/wD4O/Pgzqeq/Cr4SfH2zs2e30bXL7Rb6YLkR/aYkmiyccZNu/5V5PDUoxzm
                                                                                                                                                          lfz/ACZ6GeRlPK6lvL80e6f8GrWgafpP/BLSPVLRV83VfiFq9xdEdd6iCEA/8BiX86/RbxLfTaZ4
                                                                                                                                                          ev8AUYFy9vZSyJ9VQkfyr8jf+DRn9pDRvEH7OfxB/ZZvtQRdU8NeJRr1jbM43PZ3cUcTso67VlhG
                                                                                                                                                          fQyj1Ffr5cwQ3ltJazLlJEKuPUEYNY57CdPN6yl/Nf5PVfga5VOM8upuPa33H8if7E1jb+P/APgq
                                                                                                                                                          V8N7PxCgkj1X40WJuxIfvb9SVjn8TX9d6elfyE+KTqf7EX/BTnUJteheKb4a/GaSS4Gw5MdrqRbe
                                                                                                                                                          vqCi7ge4INf10+Gdf0vxV4fsfE2iXcdxZajZxXVpcROGWWKRA6MCOCCpBBHrXt8XpynQqL4XHT8D
                                                                                                                                                          yuG/djWg/iUtS9RRRXxx9MFFFFABRRRQAUUUUAFFFFAH5bf8HZukLef8E8/DWst1sviVaKv/AAO2
                                                                                                                                                          uR/SsD/g0K1KST9ib4m6KXykHxVadR6GTTLJT/6KFdN/wdj6lBb/APBObQdLYgPdfEqxKD/ctron
                                                                                                                                                          +dcn/wAGg1jJH+xr8UdSKnZL8TxEG9SmnWpI/wDHx+dfWR/5JB/4/wBUfPSsuJFb+Qg/4O/dJSX9
                                                                                                                                                          kb4Va+cbrb4kS2445xJp87H/ANEiv5/K/oJ/4O+tQiT9jf4XaOT+8m+JxmUeoTTrpT+sgr+favqO
                                                                                                                                                          FL/2NH1l+Z89xHb+036IKKKK+kPBCiiigAHWv6VP+DVvxdH4k/4JZxaKku5tA+IWr2MgznaWEFyB
                                                                                                                                                          +VwK/mrHXmv3m/4M/PihFd/BL4w/BeW5AbTvFdlrdvFnqLm28iRh/wCAsQ/EV8zxZTc8ob/laf6f
                                                                                                                                                          qe/w3PkzJLumv1/Q5v8A4PDvB0osfgj8QUhynnaxp0knocW8ij8fm/I19d/8GznjSLxV/wAEjPA2
                                                                                                                                                          jLLvfw7rmt6dKSckE6jNcgf983K/hXnP/B2H8KpPGv8AwTn0P4h2dtum8HfEexuZ5AuSttcW9xbO
                                                                                                                                                          PYGWSA/8Br4I/wCCKH/Bd34R/wDBND9nPX/gZ8XvhT4n8RfbvFT6rpc2gzQBIUkhjR1YSsDndHnj
                                                                                                                                                          tXgU8PWzLhaFOiryhPb7/wBGe1OvSwWfynVdlKO/3f5H9HFFfkj/AMRef7Hg6/szfEX/AL/2X/xy
                                                                                                                                                          j/iL0/Y7/wCjZviL/wB/7L/45Xif2BnH/Pl/h/mer/bGWf8AP1H63UV+SP8AxF6fsd/9GzfEX/v/
                                                                                                                                                          AGX/AMco/wCIvT9jv/o2b4i/9/7L/wCOUf2BnP8Az5f4f5h/bGWf8/UfrdXwb/wcLft+XP7En7C2
                                                                                                                                                          o6D4F1prXxv8RnbQvDzwylZbWBlzd3QIIKlIjtUjo8qHsa8CP/B3p+x52/Zn+In4z2X/AMcr8tf+
                                                                                                                                                          Czv/AAU8X/gqF+0vp3xO8MaBqeh+EvDvh2LTfD+iapKjSROXaW4nbYSu93YLwfuxIO1ellHD2NeP
                                                                                                                                                          g8VTcYLV3trbZff+Bw5lnWFWDkqE7yeit59T1n/g2/8A+Cc9p+2X+2H/AMLl+JWgC58C/C7ydSuY
                                                                                                                                                          54g0V/qpcG0tiCMMq7WmYekagj56/pfVQgwK+TP+CKH7Flv+w/8A8E+vBXw71PSRb+JNdtRr/i12
                                                                                                                                                          TEjXt0ofy2/65ReXFjt5Z7k19aV52fZg8wzGUk/djovRdfm9TtyjBrBYOMWveer9f+AFFFFeMemF
                                                                                                                                                          fzy/8HQX/BN3W/gt+0Uf25vhx4ed/CHxDnVPExtYvk03WVQKXcAfKtwqhw3eQSZ5YZ/oarlfjZ8F
                                                                                                                                                          vhl+0P8ACzW/gx8YvCNrrnhzxDYvaappt2mVkRh1B6q4OGVhgqwBBBFenlOZVMrxirLVbNd1/Wpw
                                                                                                                                                          5jgo4/DOm9Hun2Z+U/8Awbwf8Ft/BnxC+Heh/sIftUeMYtO8V6Fbx2PgTxDqlzti1mzRcR2ckjnC
                                                                                                                                                          3EYARM/6xQAPmGG/RL/gop+xv4b/AG+P2PvGP7NGvTwwTa5YCXRNQlXIstQhYSW02cEgCRQGxyUZ
                                                                                                                                                          h3xX4Lf8FTf+Deb9pn9inxJqPxX/AGbtH1Tx/wDDMTPcQXWmw+ZqmhpuyI7iFPnkVegnjBBxlgnf
                                                                                                                                                          lP2Mf+Dif/gop+x/pVr4F1jxfafETw3YgRW+j+OI3lntowMeXHdIVmAGOA5cDsMcV9NiMmp4+qsf
                                                                                                                                                          ldRXve21nv8AL0Z4VHM54OH1TMIO1rX3uv19UePfse/tJfH/AP4JD/t4QeNtV8M3dhrfhTUpdH8b
                                                                                                                                                          +FrpzH9tsi6i5tWI4OdqujcruSNuQK/qe/ZV/ar+Cf7ZXwW0j47fAXxhBq+h6tAGARgJrSUfft54
                                                                                                                                                          85ilQ8FT9RkEE/zS/wDBUb/gpV+zL/wU1is/i5dfsn6h8O/ivaJHBe65o+vx31jrNsowI7lWhhcO
                                                                                                                                                          oPySAMQBtO4YK+I/sYf8FAf2q/2BPHx8e/s0fE+60c3DINV0iYCaw1JFP3J4G+V/Zhhx2YV6OZ5L
                                                                                                                                                          VznDRrSj7OslZp7P5q/yZw4HNKeV15UlLnpPa26+T/FH39/wdP8A7Ams/Cn9pCw/bg8E6Ez+G/iB
                                                                                                                                                          FHaeJZoIvls9XhQIrPgcCaFVIJ6tE49M/Vn/AAba/wDBXHwl8avgvpf7CXxy8VxWnjrwhbfZvB1x
                                                                                                                                                          fzhRrelRqPLgVmPM8IymwdY1Uj7rY+d9W/4Oe/g1+1P8AdX/AGdP2/P2FjrOla9YC21a48I+IF2S
                                                                                                                                                          sMMs0cNwgaCRHCupErFWUEHtX5MeJtZ8OeFvibda/wDA/XddtdMs9Tafw3fX+231C3QNujLmFiFl
                                                                                                                                                          XgbkbkjIxnAVDK8Vj8r+pY2DjKHwy0a8tvua7eY62Pw+Dx/1rCyUoy+KO39d/U/tUByM0V/PB+w7
                                                                                                                                                          /wAHVH7UHwN0Sy8BftZ+AYfijpdqoiTxBDeiy1hEHQyNsaO5OOPmCMepcnr9Y/8AEXn+x3j/AJNm
                                                                                                                                                          +In/AIEWX/xyvk6/DecUanKqfN5pqx9DSzzLasOZzt5M/W6ivyR/4i9P2O/+jZviL/3/ALL/AOOU
                                                                                                                                                          f8Ren7Hf/Rs3xF/7/wBl/wDHKy/sDOf+fL/D/M1/tjLP+fqP1uor8kf+IvT9jv8A6Nm+Iv8A3/sv
                                                                                                                                                          /jlH/EXp+x3/ANGzfEX/AL/2X/xyj+wM5/58v8P8w/tjLP8An6j9bqK/JH/iL0/Y7/6Nm+Iv/f8A
                                                                                                                                                          sv8A45R/xF6fsd/9GzfEX/v/AGX/AMco/sDOf+fL/D/MP7Yyz/n6j9bqK/JH/iL0/Y7/AOjZviL/
                                                                                                                                                          AN/7L/45R/xF6fsd/wDRs3xF/wC/9l/8co/sDOf+fL/D/MP7Yyz/AJ+oo/8AB3z40j039l74VeBl
                                                                                                                                                          lXzdU8c3N0yE8mOC0Kkj/gUy/nXon/Bp94Nk8N/8EztX8QyRYHiH4papeRtj7ypa2Vt/6FA1flr/
                                                                                                                                                          AMFy/wDgrl8P/wDgqf4o+Hlx8Lfh/rvh3SfBdhqAnt9dkhZ57i6eAll8piMBIFHPOWNfuB/wQU+F
                                                                                                                                                          Uvwk/wCCUnwk0i6tTDPq+iy61MpHX7XPJOp/FHQ/jXtZhRq4DhilQqq0pSu197/yPLwdWGMz2dWm
                                                                                                                                                          7xUd/u/4J8O/8Hhvi6OPwD8EvAiON8ms6vfyrnkBIreNTj/gb1+FdfrL/wAHc3xQXX/20vh/8KYJ
                                                                                                                                                          wy+HPh+LyZAeA93dS4z77bcfgRX5NV9Tw3T9nk1Jd7v72z57PpqeZz8rL8EFFFFe6eMFFFFAB0r9
                                                                                                                                                          Ov8Ag1N+OCfDz/gonqfwlv70RW3j7wTd29uhOBJd2rJcxj/v0tx+OK/MWvWf2FP2iZ/2Tv2wPh3+
                                                                                                                                                          0MkrpB4X8U2t1qHl5Ja037LhQB1zEzjHfpXBmmG+uZfVordp29en4nbl1f6vjadTs/w6n9Sn/BWT
                                                                                                                                                          4By/tL/8E6fi38JbCyNxqFx4Pub3SYlXLPd2q/aYkX3Zogo/3q/mK/4Jo/s5fB/9rv8AbT8Ffs2f
                                                                                                                                                          Gzxdqeh6L4xvJbCHU9IaMSx3ZidoF/eKVw7qExjJLiv69oJdL8Q6QlxbyxXVne24ZJI3DJNE68EE
                                                                                                                                                          cEEHr3Br+Sn9uD4WeLf+CcH/AAU/8VeG/C0UllceA/iFFrfhWVRtH2fzUvbN1PpsaMcdCCO1fF8J
                                                                                                                                                          V5yoV8LGVpNXi+z2/wAj6riGjCNWjiJK8U7P03/zP14X/g0S/YuYZ/4aM+In/fNn/wDGqX/iES/Y
                                                                                                                                                          w/6ON+Iv/fNn/wDGq/TL9nH40eGv2jPgL4P+PHg67SbTfF3hy01W1ZGBCiaJXKHrgqSVI6gqQeld
                                                                                                                                                          rXhyz3OoScZVnden+R60cpyuUU1SVmfkx/xCJfsYf9HG/EX/AL5s/wD41R/xCJfsYf8ARxvxF/75
                                                                                                                                                          s/8A41X6z0Uv7fzj/n8/w/yH/Y+Wf8+kfkx/xCJfsX/9HG/EX/vmz/8AjVdN8HP+DU39g/4Y/ErS
                                                                                                                                                          PH3ib4leNvFVrpF7Hdf2Dqk1vHbXbowZVlMcYZkyBlQRuHBODX6g1xf7RPxn0j9nT4GeLPjt4g0i
                                                                                                                                                          5v7HwloNzql3ZWbKJZ44ULlELEAMQMDJxSeeZxU932z106DWVZbB8ypLQ7QDAxRX5Fj/AIO+v2SM
                                                                                                                                                          f8mqfEb/AMDLD/47R/xF9fskf9GqfEb/AMDLD/47Vf6v5z/z5f4f5k/2zln/AD8X4/5H66UV+YPw
                                                                                                                                                          i/4Ovv8AgnV4+1WHRviF4H+IvgppXIbUNS0e2u7OMdsvbXDy/wDkLA9a/Q34G/H74M/tKfD60+Kn
                                                                                                                                                          wI+Jej+KvD96P3OpaNeLMgbAJRwOY5BkZRgGHcCuLFZdjsEr16biu/T79jpw+OwmKdqU03+P3HY0
                                                                                                                                                          UAg9DQSByTXGdQjKGGDXzn+07/wSU/4J4/tg3s+tfHX9mDw/f6rckmbW9MEunXsjddzT2jxu5z/e
                                                                                                                                                          Jz3zXG/t7/8ABb/9g7/gn1qs3gr4k+OrvxJ4vhX994P8GRRXl5bnsLgtIkVue+13D45CnjPwf4o/
                                                                                                                                                          4PCtBXVnXwZ+xLePYjIjfVPF6LK3JwSI4CFyMcZODnk17GAyvOayVXCwkl3vy/qrnm4vH5ZSbp15
                                                                                                                                                          J+Vr/wCZ7Z40/wCDTf8A4J1a7dvc+EfH/wAR9CVzkW66zb3KJ7DzIN2Pqxrmz/waI/sXZ4/aM+Iv
                                                                                                                                                          /fNn/wDGq1v2Zv8Ag6+/Yq+KuvW3hb4+/C/xR8N57hlRdYZ49S01CcAmR49ssYySf9UwAHLCv058
                                                                                                                                                          B+PvBXxQ8Iaf4/8Ah34s0/XNE1W2W403VtKu0nt7mJujo6Ehh9K68VjeJcutGvOUV52a+/X8zmoY
                                                                                                                                                          bI8bd0oxf4fhoflh/wAQiX7GH/RxvxF/75s//jVH/EIl+xh/0cb8Rf8Avmz/APjVfrPXyX/wVI/4
                                                                                                                                                          K4fCf/glhYeEdQ+KHwt8ReJV8XzXUdougSwIYDAELF/Ndc53jGPSsaGc59iaqpUqrcnstDWrlmU0
                                                                                                                                                          KbqTppJb7nyZ/wAQiX7F/X/ho34i/wDfNn/8ao/4hEv2MP8Ao434i/8AfNn/APGq95/4Jo/8F5/g
                                                                                                                                                          X/wU2+Pt/wDs/wDw1+Cfizw5qFh4YuNbkvtcntWhaKKeCExgROzbibhT0xhTX3cSB1NXis04hwVT
                                                                                                                                                          2depKMt7aEYfAZLioc9KCa26n5Mf8QiX7GH/AEcb8Rf++bP/AONUf8QiX7GH/RxvxF/75s//AI1X
                                                                                                                                                          vP8AwUd/4L/fsm/8E6fjDbfAnxF4V13xr4kFn9o1q08LzW23SN2PLinaVxiVgS2wchcE43CuZ/Ye
                                                                                                                                                          /wCDhv4df8FAfj5pv7PvwI/Y++Ib6hdqZtR1W8ubMWelWi433Nw6OxVBkADGWZlUcmumGJ4qqYf2
                                                                                                                                                          6lLkte+i076mM6HD9Ot7KUY821td/keWf8QiX7GH/RxvxF/75s//AI1R/wAQiX7GH/RxvxF/75s/
                                                                                                                                                          /jVfrMm7HzUted/b+c/8/n+H+R2/2Pln/PpH5Mf8QiX7GH/RxvxF/wC+bP8A+NUf8QiX7GH/AEcb
                                                                                                                                                          8Rf++bP/AONV+s9FH9v5x/z+f4f5B/Y+Wf8APpH5Mf8AEIl+xh/0cb8Rf++bP/41TJ/+DRn9iy2i
                                                                                                                                                          aeb9pD4iKiKWd2FkAoHUn91X61V8z/8ABX79qq2/Y7/4J5/Er4uQ3yw6vNoEuk+GwXALahdgwQkc
                                                                                                                                                          jOwuZCPSM1rRzrO8RWjThWd5NLp1foRVyvKqVNzlSVkrn8s/jP4QeG9f/aw1P4D/AAG1C91PSrrx
                                                                                                                                                          7LoXhO9vdrT3UBuzBBLIEAG5l2sQABya/sM+EPgDSfhN8J/DPwr8P24isfDXh6z0uzjH8EVvAkSD
                                                                                                                                                          8kFfzQf8G5X7MNz+0l/wU98J+JdXsWuNF+HkM/ifVndSwM0SlLVSeeftMkb89RGa/pG/ag+OPh39
                                                                                                                                                          mb9njxn8f/FJj+xeEfDl3qciSPtErRRlkjznq77V/wCBV6vF1aVXE0cLF3cV+L0/T8TzeHKShh6m
                                                                                                                                                          Ieik/wAEfzAf8F2vjlH8e/8Agqh8V/FFndiez0nV4tCsSpyojsoUt2x9ZEkb6sa+Q6v+KfEmt+Mv
                                                                                                                                                          EuoeL/Et811qOq30t5qFy/WaeVy7ufcsxP41Qr77C0FhsNCkvspL7kfG4mq6+InUfVthRRRXQYBR
                                                                                                                                                          RRQAUqnBpKKAP6n/APggB+1/F+1v/wAE2PBtxq+qfaPEPgdG8MeIVd8uGtgBbyHPJD25hOfUMOxr
                                                                                                                                                          4W/4O2v2MZY7vwL+3P4S0ksjqfDXjB4k+6RmSymY46HM0ZJ6YjHevnn/AINhv254v2bf21pv2ePG
                                                                                                                                                          useT4Y+LFslhbiR8JBrMbbrR/wDgamWHHGWkj5+XB/fL9tr9lrwb+2f+yx42/Zr8aRoLfxRoktva
                                                                                                                                                          3TLk2d2Bvt7hfeOVUf3wQeCa/MsUpZBxH7X7Dd/+3Zb/AHfoj7/DtZxkvI/iSt81t9/6n5z/APBq
                                                                                                                                                          P+2/F8Tv2cfEH7F/i/Vh/bHw+vDf+HIpX5m0q5cl1XP/ADynLZHpOnvX63DkV/JB+yD8efi3/wAE
                                                                                                                                                          j/8Ago1Y+LfFOlXNrqXgPxNcaL440UcfarPeYLqLHIYFf3iHkblRh2r+sX4dfEDwj8VvAWjfEvwF
                                                                                                                                                          rcOpaLr+mQahpV/btlJ7eVA6OPqrCseJ8AsNjvbw+Cpqn59f8/ma5Fi3WwvsZ/FDR+nT/I2qKKK+
                                                                                                                                                          aPcCvB/+Cof/ACjs+NP/AGTfVf8A0naveK8H/wCCof8Ayjs+NP8A2TfVf/Sdq1o/xo+q/MmXws/k
                                                                                                                                                          N0KwTVdbs9LlkKrc3UcTMvVQzAZH51+9Fp/waC/syXNpHcN+1148BkjVsDSLLjIz6V+D/g3/AJG/
                                                                                                                                                          Sv8AsJQf+jFr+1vTCP7Nt+f+WCfyFfovFWYYzAQovDz5b819unLbf1Ph+H8HhsXOoq0b2tb8T+bL
                                                                                                                                                          /grn/wAG9vjv/gnL8K2/aM+F/wAWn8ceBrW9it9aN9potb7SjM4SF3CMySxl2VC42kMy/Lg8cF/w
                                                                                                                                                          QK/bw+IP7IH7eXhPwTD4huT4K+Imrw6H4m0R5j5DyTkR290EzgSxyFPm6lSy9Dx+tH/Byb+3N+z9
                                                                                                                                                          8M/2BvGH7LknjrS9S8d+PDaWVj4ctLtZZ7SKK8hnluJ1XPlKqwlRuwSzDGcGvw2/4JV/BnxR8eP+
                                                                                                                                                          CiHwh8AeFLGWaZfG9jqNy0ak+TbWkq3MsjeihImJNaZPiMRmeS1Hjldaq7Vrq2/y7/qic1oUcBmM
                                                                                                                                                          Pqmj0dt7O/69v8z+vFc45FfNX/BXr9rLxJ+xX/wT3+Ifx08DPs8Q2+mpYeH58f8AHveXUiwRz/WP
                                                                                                                                                          eZAO5QDvX0qpyK+ev+Cqf7Iuq/tw/sH/ABA/Z48NTRprmp6WLnw60pwjX9u6zwxsewdk8snsHz2r
                                                                                                                                                          83wrpLE03V+G6v6XV/wPuK3tPYy9n8Vnb1tp+J/KT8Kvh78S/wBrP9oTQ/hppOqSal4s8feJobOO
                                                                                                                                                          +1O4Zmnu7mYAyyuck/MxZjyetfu/8Jf+DSn9iTQvA9rafGP4xePvEHiF4FN/e6Xe29lapLj5hDF5
                                                                                                                                                          LsFz3dmJxnjOK/B/RNU+Mn7Ifx/tNajsbzwz458AeI0mW3vrbbNY31tKGAdG9GXp0I+tfux+xX/w
                                                                                                                                                          dZ/sq/Efw/Y+HP2zvCOp/DzX441jvNc0u0l1LSrhgBmULEpnhycnZskx/ePb9Lz/APtd0acsv+Hr
                                                                                                                                                          y79LW8vQ+Eyj+zlWmsb8XTm287+fqfnL/wAFrf8Agixe/wDBLbVvD3jr4f8AxAvfFHw/8VXcllY3
                                                                                                                                                          urQol7YXqIZPImMYCSbkDMrqFzsYbRjJ+h/+DVD9u3x54Y+Puq/sLeL/ABBcXnhfxJpU+qeGLS4l
                                                                                                                                                          LLpt/B88qxAn5UljLFlHG6NT3bP7I+F/Hf7Cn/BRj4fwzeHtc8AfFnw9Z3S3cdtILfUEtJwrIJGh
                                                                                                                                                          kBaJ9rsuWUH5iK3Ph9+xr+yX8J/FNv45+GP7N/gnw/rNoGFtqmj+HLe3niDKVYK6ICMgkHnoa+bq
                                                                                                                                                          8QSq5ZPB42m3OzV9FZ9Ha26Pcjk0Y46OJwk0oq2m/rZ9mj0uvxT/AODwv/kWvgl/1/ax/wCgW9ft
                                                                                                                                                          ZX4p/wDB4X/yLXwS/wCv7WP/AEC3rzOHf+R1R9X+TPRzj/kV1fT9UfOv/Bpgcf8ABSrxIT/0SHU/
                                                                                                                                                          /ThptfrL/wAFpP8Agq34R/4Jpfs8ufD1xa33xM8V28tv4K0aRg3kEDDX0y9fKjJBAON74UcbiPxC
                                                                                                                                                          /wCCBf7YXwo/YS/ac+If7R3xg1ER6fpHwa1NbKyRsS6levf6d5NpF6u7DHoAGY8Ka+cP2xv2tvjH
                                                                                                                                                          +3d+0Zrf7QPxf1N7nV9duwtlYRuTDp9sDthtIRxhEXA6Ascsclia+xx2SvNM+U6i/dxir+bu9P8A
                                                                                                                                                          Py9UfL4HM1gMocYfHKTt5aLX/Lz9DG8K+F/jv+2l+0PB4e0KDUvF/j/x7rzEtI5knvruZizyOx6A
                                                                                                                                                          fMzMeFUEnAFf1E/8Ekv+CYXw4/4Jmfs62/gbTorbUfG2uJHd+OPEqxjfdXOwf6PGxGRbxchF7ksx
                                                                                                                                                          5Y14T/wQF/4I76T+wr8J4P2jPjbo1vcfFfxhpqSbHw//AAjljIoYWkZBKmVwQZXHsgOAS36RBVBy
                                                                                                                                                          BXhcSZ2sTL6nhnanHe3VrovJfi/RHq5HlbpL61X+N7X6X6+r/D7xaKKK+RPpQooooARjgZxmvwR/
                                                                                                                                                          4Oyv23YvHHxf8KfsN+DtWzZ+DYhrfi2OGTh9QuIwLaF8d44GL4/6eB6Cv2c/bT/ap8AfsV/syeLf
                                                                                                                                                          2k/iNdKLHw1pbzW9rvw17dkbYLZP9qSQqvtknoDX8t37Nvwk+Mn/AAVy/wCCjdl4e8RXs11rHxE8
                                                                                                                                                          Wyan4v1VBlbGyL+ZdTDkYVIgVReOQijGa+r4XwcXWnjaukKaf3/8BfofPZ/iZeyjhafxTf4f8F/q
                                                                                                                                                          ftH/AMGs37GMnwJ/Yq1H9pPxTpXla58V9RS4snlTDppNtvjtwO4DyNNJ/tAoewrJ/wCDrX9r2L4V
                                                                                                                                                          fsd6F+yt4f1MR6v8StZWbUo0fDLpdmyyPnuA8/kr7hXHev068CeCvCHwl+HekfD/AMI2MOnaJ4c0
                                                                                                                                                          eCx062UhUt7aCIIi+gARR+Vfyr/8Frf23m/bw/b+8W/EvRdSNx4Y0CT/AIR7wcQfkawtZJB5q+0s
                                                                                                                                                          ryy+uJB6YF5NTqZzn8sVNe7F83p0iv67E5nOOWZOqEd2rf5v+u58mHGeKKCc0V+lHwQUUUUAFFFF
                                                                                                                                                          ABRRRQBd8Pa/q/hTXrHxR4e1CWz1DTbuO6sbuByrwzRuHR1I5BVgCD6iv60f+CS37evh/wD4KH/s
                                                                                                                                                          YeGvjUl7CPEtrCNN8bacjDda6nCArsQOiSjbKv8AsyAdQQP5Ia+4v+CEP/BTa5/4J3fta29n451a
                                                                                                                                                          Vfhx49kg0zxjEzEpYtuIg1ALnGYmchz1MbP1IUV87xJlX9o4LmgvfhqvNdUe5kWYfU8Vyzfuy0fl
                                                                                                                                                          2Z9q/wDB1D/wTQuVubL/AIKMfCTQGaLy4tN+JcFtFnYcrHa35x0ByIXJ7+V6mr3/AAa4f8FRrW40
                                                                                                                                                          5/8AgnH8afEapcwvNe/DO8vJQPMjxvn00E9SDvljHXBkXsor9j/G3g34efHb4X6h4G8YabZa94Z8
                                                                                                                                                          UaS1veW74kgvLSZOx6FSpyCPYiv5Yv8Agpj+wf8AGn/gkZ+2mumeF9a1O10kX/8AbXww8ZWrsjvA
                                                                                                                                                          spMamQAAXEJAV1Hs2Nrivncor0s5y2WW13acdYN+X+W3oe5mNKplmNWOor3XpJf13/M/rBBz2or4
                                                                                                                                                          4/4I0/8ABVbwX/wUy/Z3h1LV7i00/wCJPhqFLfxvoERC5fot7CuSTBL1/wBh9y9gT9j18jiMPWwt
                                                                                                                                                          aVKqrSW59HRrU8RSVSm7phXg/wDwVD/5R2fGn/sm+q/+k7V7xXg//BUP/lHZ8af+yb6r/wCk7UqP
                                                                                                                                                          8aPqvzLl8LP5BoIZ7mdLe2iZ5JHCxogyWYnAAHrmvdNX/wCCdH/BSnw/olz4l139iz4x2enWVs9x
                                                                                                                                                          d31z4E1JIoYUUs0jMYsKoUEkngAV414N/wCRv0r/ALCUH/oxa/tWtrS1vdFis7yBJYZrQJLFIoKu
                                                                                                                                                          pXBBB4IIOMV+o5/nNXJ4U3CClzX38rf5n59k+W08xlNSk1y228z+J+0Ed/qcMWq6i0UckyrPdOpk
                                                                                                                                                          MakgFsdWwOcd6/qG/wCCMn/BJX9l/wDYM+Fdj8Zfhx4uTx54r8aaHBcS+P5IQkb2MyJIsVnGC3lQ
                                                                                                                                                          t8rEkl2OMnAAH4c/8Fyf2AZ/2Bf26Nd8O+HdKeDwX4yeTXvBbhP3cdvLITLag4AzDISgHUIYyeuT
                                                                                                                                                          +mP/AAav/wDBRE/FD4Qap+wb8Stc8zXfBaPqHgySeT5rjSHZfMtxk8mGVsjH8EoH8HPJn1WvmGRR
                                                                                                                                                          xGFk+V6yXddV8nuvW+x05VTp4PN3RxEby2T7Pp962+R+vYBHWkyGGDQpyOa/OH/g5a+Iv7XPwQ/Z
                                                                                                                                                          F8L/ABy/ZV+LfibwmNB8W+R4ruPDd88DPaXEJWN5CnVVlVAM8AyV+d4XDvF4mFFNLmdrvzPtMRW9
                                                                                                                                                          hQlUteyv9x7t/wAFAf8Agjt+xX/wUXtm1f4w+B5NL8WxweXZ+NvDkgt9QQD7qy8FLhB02yKxA4Ur
                                                                                                                                                          1r8jP2q/+DUL9sT4YG6179mT4laB8RtMjBaDTLsnTNTx127ZCYXPv5i5/uiuP/4JD/8ABbf9ovwH
                                                                                                                                                          +3T4Wf8Abc/a08W618O9WhudM1Y+Itaea1sJZY/3F06scBVlVFZv4Vdm7V/R34Z8VeFvG+iQeI/B
                                                                                                                                                          /iOw1awuoVltr7TbxJ4ZUYZVldCVYEcgg8ivpa9TO+GKkaaqc0GrrS8fTXVd9Lbnh0Y5XnsZTcLS
                                                                                                                                                          Xyfrpv8AM/jr1HSv2tv2AfjjHHqVn4v+F/jzRJBJFvE1jdIM8EHgSRtjtuRh6iv6Af8AggZ/wWd1
                                                                                                                                                          r/gof4U1L4EftCfZY/if4U09br+0baNYo9fsd2wziMcJMjFBIq4B3hlA+YD53/4O4viZ+zhrnw6+
                                                                                                                                                          Gnw90vWtHv8A4m2PiSW6lWyljkubLR2tpFdJipLIrzmAordfLcjvXxx/wbM2Hiu8/wCCrvha48Np
                                                                                                                                                          N9nt/DurPq7R52i2+zlfm9vMMfXvivdr+yz7IJYmtT5ZxUmn/h10e9n2/wCHPIgp5Rm8aNKd4tpN
                                                                                                                                                          evfzW5/TnX4p/wDB4X/yLXwS/wCv7WP/AEC3r9rK/FP/AIPC/wDkWvgl/wBf2sf+gW9fH8O/8jqj
                                                                                                                                                          6/oz6fOP+RXV9P1R+HMEM1zMtvbRM8kjBURBksScAADrXbfHX9m745/syeIdN8K/Hj4aap4X1HVt
                                                                                                                                                          Ft9W0601S3MbzWk67o5AO3cFTyrAggEYr7Y/4NjPgR8KPjv/AMFKvK+LPg201yHwp4Hvdf0W2vk3
                                                                                                                                                          xRahDd2cUUxQ8OUEzlQcgNtbqBX7Af8ABdn/AIJfab/wUQ/ZVn1bwNpMX/Cy/AsE+oeD51UB75Nu
                                                                                                                                                          6bT2bGSJQo2Z4EgXoC1fe5ln9LLsyp4acfdesn2vt93XyPj8BlE8dgp14vVbLu1Zv/geZ4j/AMG1
                                                                                                                                                          /wDwVX/4ae+DifsX/GrxDv8AHXgPTUXw5d3Mg36zo6DaoyeWlgAVW7lCjckNX6pV/GL8DPjV8W/2
                                                                                                                                                          Rvj1onxl+Guo3GieLPB2sedb+YrKUlQlJIJVyCUZd8boeqswPWv6zP8Agnt+298N/wDgoJ+y94e/
                                                                                                                                                          aK+HdxHG19ALfX9JEgaTS9SRV8+2fHPBIZScbkZG718vxTlCwtb63RXuT38pf5P8/ke9kGY+2p/V
                                                                                                                                                          qj96O3mu3y/L0PbqKKK+RPpApMjOPSlr8y/+Dhb/AILDWv7FXwqm/Zc+AfidB8VPF+n/AOlXlpNl
                                                                                                                                                          /DmnSblaclTlLiQArGOqjMnZc9WDwdfH4mNGktX+HmzDE4mlhKLq1Hoj4A/4OVf+Co0H7Vnxyi/Z
                                                                                                                                                          C+DniEXPgP4d6gX1a8tZQYtW1oBkdgV4eOAM0a9i5kPTaa+8v+DZz/gmhcfssfs5T/tZfFTQDb+N
                                                                                                                                                          /ibZxtp1tdRETaXooYtEhB5R5ziZh12iIHkEV+af/BAP/glDqf7f/wC0Onxk+LehyN8LfAt8lzqz
                                                                                                                                                          3CHZreoKyvHYLkYdP45fRcL/AB8f0ifFf4ofDz9nv4Ta18V/iJrVto3hrwtpEl7qN1JtSOC3iQnC
                                                                                                                                                          jgZwAqqOpIA6ivqM8xFLA4WGVYXW1ua3V9vm9X8kfP5TRqYvESzDEf8Abvku58M/8HGX/BRKH9jL
                                                                                                                                                          9jG6+EPgbXVg8e/FGGXS9J8qQebZaeNovLrHUfI3lKf70uR93FfzLli3JP1r3/8A4KY/t3eN/wDg
                                                                                                                                                          oj+1r4i/aE8UNLb6ZLM1n4T0h3JGm6XGzeRFjJG8gl3I4LuxHGAPn+vq8hyxZZgFGXxy1l69vlt6
                                                                                                                                                          nzmc4/6/i3KPwrRf5/MKKKK9s8kKKKKACiiigAooooAKB15oooA/eP8A4NpP+Cv8Xj/w9Yf8E7/2
                                                                                                                                                          iPE//E90m22fDTVr2Yk39miEnTmZv+WkSjMfPzRgqPuDP6K/8FIf+Ce/wj/4KQ/s3aj8DviXElpf
                                                                                                                                                          Lm68L+I44Q8+j3wHyyr3ZD910zhlJ7gEfyK+GfE3iDwZ4gsfFvhPWbnTtU0y7jutPv7OUpLbzIwZ
                                                                                                                                                          JEYchgwBB9q/pi/4Iaf8FnfC/wDwUR+GMPwd+MWrWun/ABh8OWIGo2pIjXxBbIqg38CgABv+ekQ+
                                                                                                                                                          6fmA2nj894hyitgcR9fwmivd26Pv6Pr29Gfa5LmVPF0fqmI1eyv1Xb1Pwm0TWP2zf+CKX7dhd4JP
                                                                                                                                                          D/jbwldiO8tSzNZa3p7sCVOMedazKoII5BGRtZeP6XP+Cb//AAUd+Bn/AAUl+Alr8XfhRfi11W1V
                                                                                                                                                          IfFfha4lButGuyDmN+m6NsEpIOGX0IZRx/8AwVl/4JPfB3/gp18GP7C1lYNF8eaJDI/g7xisJL2z
                                                                                                                                                          kH/R5gpBkt3ONynJU/MvIIP863hLxf8Atz/8ETP20pSlvd+E/GXh6cRajptyvmWGuWJYHa38NxbS
                                                                                                                                                          qMh15U4IKuvGjWF4pwvMrRxEF9//AAPy9CU6/D+Is7yoyf3f1+J/W9Xjf/BQvwR4t+JX7D3xW+H/
                                                                                                                                                          AIC0C51XWtZ8CajaaXptmm6W5neFgkajuSTgV5n/AMEu/wDgrl+zt/wU2+G6X3g2/i0LxzptqjeJ
                                                                                                                                                          /A17cA3Fq+OZYCQPtEBOcOoyOAwU8V9Xlc96+Mq0q+DxHJUjaUXsz6ilVpYikp03dM/k28Lf8EbP
                                                                                                                                                          +CpVn4m068uv2GfiAkUV/C8jto/CqHBJPPpX9YemqyWMMbqQyxKCCOhwKm2rjGKAAK9LNs6r5uoK
                                                                                                                                                          pFLlvtfrb/I4MuyqjlspOEm+a2/kfEf/AAXn/wCCdN5/wUC/Ysvbf4eeHRffEPwRKdW8GRxIPNuz
                                                                                                                                                          8ouLME/89Yx8o6GSOP61+Jv7IH7AX/BZD9jP9pDwp+0l8NP2HPiGup+GNUS4NudKKrdwH5ZrdyD9
                                                                                                                                                          2SNnQ/72e1f1H0hUHtWmW59ictw0qCipxfR367r0ZOPyehjqyquTjJdV+H3Gb4N1+TxV4T07xNLo
                                                                                                                                                          d9pj6hZRXD6bqcHlXFqXQMYpU/hdSdpHqDVD4tfCn4f/ABy+GutfCL4qeGLbWfDviHT5LLV9MvE3
                                                                                                                                                          RzwuMEexHUMOQQCCCK6IDHAorw7+9daHqpe7Z6n88f8AwUD/AODXH9qb4Q+KdQ8Z/sTPH8RPCEsz
                                                                                                                                                          y2+hTXkdvrGnxk5EZEhVLoL0DIQ54+Tqa+Kpv2Tf+Co3wVuX8HWfwF+NuhbCWez0jRNUWLIYqT+4
                                                                                                                                                          UoeQf8mv68CAetc58Wvih4P+CXwy174t+Pr57bRPDmlzahqlxHEXaOCJSzkKOTwOlfVYTizMIQVK
                                                                                                                                                          rBVO3Rv9H9x8/ieHsHObqQk4em39fM/lZ+B//BGr/gqF+1F4miTw9+y14rtBeur3Ou+MojpsEYJG
                                                                                                                                                          XkkuirNgHOAGYgHCnpX70/8ABGj/AII1+Cf+CXvgPUPEfiPxDb+JPiV4oto4vEGuwQlYLOBW3Czt
                                                                                                                                                          d3zeXuwzOcF2VeAFAr7Z029sNWsINV0y8juLa5hWW3nhcMksbAFWUjgggggj1qxjFcmZcSY7MaPs
                                                                                                                                                          bKEHulu/V/8ADG+ByTC4Ooql3KS2v0AZxzX5Pf8AB0F+xx+1F+1toPwltv2a/gdr/jOTRrvU21Vd
                                                                                                                                                          Ds/NNqJFgCF+eM7Wx9K/WGkKg9a8rA4ueBxcMRBXce/pY9LFYeOKw8qMnZSPwt/4Nr/+CfP7a/7K
                                                                                                                                                          /wC3trvxG/aJ/Zq8VeD9DufhlqFhBqmtaf5UL3L31g6xA5+8Vjc49FNfui4cjgD86UKB3NLWuZ5j
                                                                                                                                                          VzXE+2qJJ2S08jHL8DTy+g6UG2r31+X+R+Ff/BwB/wAENPjJ4o/aIi/am/Ye+DOo+JYPG80j+M/D
                                                                                                                                                          ugWwaSy1L7xu1QEfu5hktjpICf4+Ob/4IYfC3/gq7/wTk/acTTviD+xb8SP+FX+NHS08X239jsyW
                                                                                                                                                          MnSHUFUE/NGThsDLRlu4Wv33Kg9aCqkYIr0KXEOJjl31OpBTja2t726fd0fkjkq5LRnjPrMJOMr3
                                                                                                                                                          0tv/AMHqIjFskYpTwMk0BQvSvz+/4LD/APBdb4O/8E7/AA9ffCT4VXNj4r+L11bMlvo0cu+30Esv
                                                                                                                                                          y3F6R3GQywAhmxztU5Pj4XCV8ZWVKjG8n/Wp6dfEUcNSdSq7JHW/8Fjv+CwPwx/4JnfCN9J0Se01
                                                                                                                                                          r4p+ILN/+EU8Ms+5YFPy/bbrHKQqc4U4MjDaONzL+Af7GX7If7U3/BZn9s+8tbvxDfX15rF+2qfE
                                                                                                                                                          Hx1qKGSPToGf5pGzgFz9yKIY6AABVJDP2Zf2Xf20v+C0/wC2Bf3EWsX2t6zrF8L3xt461dCbXSIG
                                                                                                                                                          J/eSYwAMDbHAmM4CqAoJH9M/7BH7BXwL/wCCeXwCsfgV8ENG2IpFxrutXAButYvSoV7mZvU4wqD5
                                                                                                                                                          UUAAev2NSrhuF8I6VJqWIktX2/4HZdd2fM04V8+xCqVFy0Y7Lv8A117dDq/2Y/2Z/hD+x78DtC+A
                                                                                                                                                          PwR8Nx6X4e8P2vl28YwZJ5DzJPK2BvldsszHqT6YFfhd/wAHI/8AwV8T9ozx7P8AsM/s9+J/M8Ee
                                                                                                                                                          Fb//AIrDVrKU7Nc1KPGIFI+9BA2eejSAnkIpP0z/AMHC3/BcK1+CPh/Vf2Gv2TPFyv411GE2/jjx
                                                                                                                                                          Np8wP9hWzqQ1nEw/5eXB+ZgcxKSPvt8v4BMxdizHkmtOGslnOp9fxW71in1/vP8AT7+xnnuaQpw+
                                                                                                                                                          qUPR2/L/ADEPJzRRRX3Z8eFFFFABRRRQAUUUUAFFFFABRRRQAV0Hwt+KPxB+C3xA0n4pfCvxbe6H
                                                                                                                                                          4g0S7W60vVdPmKS28q9CCOo6gg5BBIIINc/RSlGMlZq6KjJwldbn9On/AARj/wCC4/wu/wCCinhS
                                                                                                                                                          2+E3xcvbDw18YNOtf9M0ousVvryLjNzZbjy3d4PvLyRleR7v/wAFG/8AgmT+zl/wUr+Er+AvjHof
                                                                                                                                                          2XWrGKRvDHi+wjUXukzMOqsf9ZESBvib5WA4w2GH8kvhPxb4o8B+JbHxn4J8Q3uk6vpl0lzp2p6d
                                                                                                                                                          ctDPazIcrJG6EMjAgEEHNfvF/wAEev8Ag5Q8K/FiDSv2cP8AgoBrVponij5LXRviFJiOy1VicKt5
                                                                                                                                                          zi3mPA8ziNu+w9fz7N+HsRgKv1vAXstbLePp3Xl+h9nludUcbT+rYu13pd7P18z8u/2vP2F/26P+
                                                                                                                                                          CNf7ROn+JLy91TSWsb9pfBnxK8MPKlnfBSfuyAfu5Cpw8D84YghlOT+qf/BKv/g5w+GHxittO+Cn
                                                                                                                                                          7f8Ad2Pg/wAVALDa+PEAh0jUTgAG5ycWkpPJb/VEknMfSv1I+K/wg+Df7SfwyvPht8XvBGjeLPC+
                                                                                                                                                          tWwFxp+o2yXFvOhGVdc5wRwyupBBAIIODX4b/wDBTr/g12+JfwxudQ+L3/BPu7uPFfh4bp7nwFqN
                                                                                                                                                          wP7TsgSSVtZCAt0g7KxEmOP3h5qaOZ5bntJUMwXJU6TWn/Dej0KngcblNR1cG+aD3j/W/rufvbpW
                                                                                                                                                          r6XrmnwatouowXlpcxiS3uraVZI5UIyGVlJDAjuKs1/Kf+w9/wAFgf8AgoD/AMEvPFTfDmx1a+1D
                                                                                                                                                          w9p9yY9T+GvjuKfybVg3zrErlZbKTg/dwM8sjV+2f7CX/Bxf+wT+2DDZeFfHnin/AIVf4yn2xyaN
                                                                                                                                                          4unSOznlPGIL3iNgewk8ts/wnqfKzDh3H4G84rnh3X6rf9D0cFnWExfuyfLLs/0f9M+/aKh0/UbH
                                                                                                                                                          VbOO/wBNvYbiCZA8U8EgdHU9CGHBHvU1eAewFFFI7rGpd2AAGSSeAKAPmr/gpb+3+n/BOPwP4R+O
                                                                                                                                                          Xi7wFea54KvvE66R4uk06Am402OaNjDdKxYLhZE2lGHzB+CCAD4T/wAHB/7QWmXv/BGHxD8QvhN4
                                                                                                                                                          pF3pPj2TRbfT9U02cbLmxup45SQw6o8akEdwxHHOPrf9s39mjwN+2t+zB4y/Zn8ZXKCz8U6O9tHd
                                                                                                                                                          RlWa0uFIeGdeuCkio3uAR3r+dr41/HX41fs8f8E/Pi7/AMEdv2prCRPEHw88b6bq/g+5kjyrWn2w
                                                                                                                                                          JOkckmGeJjNHNEVUHZJJkgDaPoslwlDFVKc4/HCceZd4trX5PfyseHmmIq0Izi/hnF2faSW3zW3m
                                                                                                                                                          ft3+wn+2d4G8B/8ABIH4bftXftHeMrfTNK0vwBb/ANqajPhDMYAYFWNScvI/lgKo5YngV6T/AME5
                                                                                                                                                          f2ufEX7dP7MVj+1Bqvw7fwxpniXWL5vC2mzy7520uKYwwzTEEr5jmORiFO0ZABOMn8MfCkXxr/4K
                                                                                                                                                          c+Ev2Zv+CQ/wSmvrTwx4O8KWuufE7VB5nl2pnmaV5ZCoZSIbeaMRhvlaacLxjNf0N/CT4c+A/gP8
                                                                                                                                                          LvDvwZ8CJHZ6L4Z0e303S7eR1DLBDGqLnAAJIAJIA5JrHNsJQwad/jnJu38sbu3/AIFv6I1y7EVs
                                                                                                                                                          S1/JGKXrKyv923qdTRRRXhnrhRRWb4s8YeFfAmg3Pinxr4l0/SNMs4jJd6jql4kEEKAZLPI5CqAO
                                                                                                                                                          5NFm3ZA3Y0qxfiB8R/AHwp8I3vj74m+M9L8P6HpsJlv9X1m+jtra3QfxPJIQqj6mvzf/AG8/+Dn/
                                                                                                                                                          APY8/ZzhvfBf7MFo3xV8WRbkS6tHMOi28gOPnufvTfSJSD/fFfjP+0Z+2v8A8FGv+CwPxgtPB/iH
                                                                                                                                                          Udf8WXN3ck6H8PfCFpMNPteSdyWqEglQeZpSzADl8Cvosv4bxuLXPW/dw6t7/Jfq7Hi4zPMLh3yU
                                                                                                                                                          /fn2X+f+R+gv/BVz/g57utfttR+BH/BOSWa0t3DW+pfE68ttksikEMLCJuU6/wCvkG7rtQcPXxl/
                                                                                                                                                          wTH/AOCNv7VP/BU/4hH4k+J7nUtB8AyagZvEfxC1xJJJdRctmRLTzObmc85cnYpOWJPyn70/4Jff
                                                                                                                                                          8Gt2l+GbrTvjP/wUZvINTu49s9l8NdKuQ9rG2QR9unH+t94Yzt9XYZFfsFc3Hws+Avw3a5nbQ/CP
                                                                                                                                                          hPw3pxYk+VZWOnWsa57bUiRQPYCvQr5xgcpovDZWrye89/u7v8OxxUctxeY1FXx7tHpH/Pt+Zx/7
                                                                                                                                                          IP7HHwC/YZ+DNh8EP2e/BMWk6TaKGurkgPdajPgBri4lxmWVsck8DoAAAK/On/guV/wcDaB+zpZa
                                                                                                                                                          r+yb+xR4qttS8fyo1v4k8X2Uiy2/h0cq8MTAkPd8YPURZ5y3A8A/4LHf8HKGtfE6DVf2Z/8Agnzr
                                                                                                                                                          dzpegSb7XXfiRHuhu78Zw0dhyGhiIyDMcOwPyhRyfxznuZ7qZ7i5maSSRi0kjtlmJOSST1JNdWS8
                                                                                                                                                          N1K1RYvH631UXu/OX+X3nPmmeU6MPq+E6aXWy8l/mSanqeoazqE+ravfz3V3dTNLc3VzKZJJpGOW
                                                                                                                                                          dmbJZieSTyTUFFFfeJJKx8e227sKKKKBBRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABQDg9aKKAPvn
                                                                                                                                                          /gl7/wAF/P2o/wDgn69j8NPHEk/xC+GUTKg8N6peFbrS4+mbK4YEoB18p8xnGBsyWr+gP9hv/gpV
                                                                                                                                                          +yH/AMFCfBi+Jv2dvifbXmoQwq+reGL9fs+p6c2BkSwNyVBIHmJujPZjX8gY4rX8D+PfG3wy8V2X
                                                                                                                                                          jr4d+LNR0PWtOl82w1XSrx4LiB/VXQgj098181mvDODzC9Sn7k+62fqv1R72XZ9icGuSp70fxXoz
                                                                                                                                                          +tX9uD/gld+xR/wUE0V4/j98JLWTXFi2WXi7SP8ARdUtuCBiZR+8Uf3JA68dOhr8ZP23v+DV79rr
                                                                                                                                                          4Jy3nir9knxNbfFLw+m6RNLlMdhrEEfXb5bv5VwR6oys3aPJxW1+wb/wdWftDfCKOz8C/ts+Ch8R
                                                                                                                                                          dGiCx/8ACT6V5dprEKcfNIuBDdYHr5bHqWJzn9f/ANkD/gq/+wd+3FZQL8C/j7pEusSKPN8L6xJ9
                                                                                                                                                          i1OJj/D5EuDJ/vRl196+Xi+IuHXbWUF/29H/ADX4H0H/AAi50r7S+6X/AAfxP5uPgz+3f/wU+/4J
                                                                                                                                                          eeNG+HXhv4keM/BMtjJ/pXgjxZZvJZsoyMfZbpSqg/349p44av0J/Zn/AODvPxHYwwaL+1t+y5Bf
                                                                                                                                                          FQFk1/wPqZhc8DlrS4yCe5Kygei1+zPxl/Z6+Bv7RnhZvBnx1+FGgeLdLbOLPXtLjuFQnglC4JQ+
                                                                                                                                                          6kGvgT9pD/g1l/4Jz/FySbVvg/ceKPhpfykkR6NqRvbIMec+Tdb2UeyyKoHQCt/7ZyLMV/ttDll3
                                                                                                                                                          j/wLP8zP+zc3wX+61eZdn/VvyPUPgR/wcQ/8EpPjkkNt/wANGL4S1CbG7TfGuj3FiUJ4wZ9jW559
                                                                                                                                                          JSa+ovCfxq/Zv/aO8M3WjeA/it4S8Y6bqdm8F3a6TrlvdrNC6lWRljcnBBIINfhd8bP+DRv9rzwm
                                                                                                                                                          8158C/2g/Bni+2XJit9Wt59Kuj6DGJoz9fMH0r5e+JH/AAQP/wCCt3woumnn/ZI1nV4oGyl74X1K
                                                                                                                                                          1vskd1SKUy/+OCp/sXIMTrh8Xy/4rfrysf8AaecUFath7+n9M/Y39ob/AIN4/DnivxzJ4+/Y/wD2
                                                                                                                                                          4/iZ8GZbu4kmvNJstQudTsQXzkQobqGSEYOMeY4AAAAr5T/ag/4NsP8Agpx8ffEFpr3xA/bd8IfE
                                                                                                                                                          a8sbZrSz1zxXBcrqItsnCSStHI7gZyoZ22EnaRk5/PVPhx/wWO+AY+yQ+Ev2h/C6Q/L5MUGs28ag
                                                                                                                                                          egGFx9Kni/bG/wCCyPhsfZE+NXx3ttvVJZtSyP8AvoV6tDLszo2dLFQlbZuKb+/V/iedVxmBqXVT
                                                                                                                                                          Dzjfezdvu0X4H6Pfsx/8G6//AAVL+DkWo6Zof/BRTRvhzaa5LCNdvvBdvcy6hdxxkKqNMogkkRFB
                                                                                                                                                          KxtKEB7DJNfVv7JH/BAD4SfBPxjB8Tf2mf2mPHvxr8Q2lw01uviXUJrXTEO7ILWgnlMvAXIkkZCV
                                                                                                                                                          B2jpX4ZT/tZf8FkPF4+yt8Yfj1d7v4YZ9Tz/AOOiopP2d/8AgsR+0OPsuofCv9oDxYk/DLqFlq9x
                                                                                                                                                          ER7+ZlAPrSr5ZmNdP22KhFPe0Un9+j/EdHHYKlb2eHnJra7b/DVfgf1I/FD9rX9lb4DWjD4t/tCe
                                                                                                                                                          C/DK2yYaDVvEdvDIgA6eWz7v0r5I+Pv/AAcr/wDBK/4LRzWvhj4t6n4+1GIECy8H6DO8ZP8A18Tr
                                                                                                                                                          FCR7o7fSvxg+F3/BvF/wVq+KMsbP+zJJ4bt5cFbrxRr1nagA85MYlaVfoUBr6r+Bn/BoX8fddlhv
                                                                                                                                                          /wBof9qbw14etzgy2HhfS5tRuMf3TJKYUQ+4DivL/sjh3Ca4jFc3lG36czPQeY51iNKOH5fX/g2E
                                                                                                                                                          /ae/4O4/jv4uiuNC/ZQ/Z40fwjbupWPXPFN6dRu8HPzLCgSKM+xMgr4O8SfFL/gp9/wVs+Ig0HUd
                                                                                                                                                          f8f/ABX1MzArpNhGzWNkWPB8mIJb2y/7RCjgknqa/dn9mr/g2a/4JkfAl7fWfG/gnWPiRq0JDC48
                                                                                                                                                          Yao32YMCORaweXGw46SB6+7PAfw5+HHwf8KQ+D/hr4L0fw5otmh8jTtIsI7W3iHchIwFHuaf9u5N
                                                                                                                                                          lytgMPd/zS/pv8hf2VmeN1xday7L+kvzPwv/AGG/+DTr4weM5bPxp+3b8S4fCWn5WSTwf4XmjvNQ
                                                                                                                                                          lGOUlusmGDtnYJe4BHWv2P8A2Sv2E/2Uf2HPBo8Ffs0/B3S/DkToBe38cZlvb5gB809w+ZJCeuCc
                                                                                                                                                          DsAMCvIP2zP+C4v/AATw/YngutJ8Z/Gm18TeJbZSB4T8GMt/d7xxtkZD5UBz2kdT6A1+OX7e/wDw
                                                                                                                                                          c2ftm/tPR3vgf9nWBfhN4SuAY3bS7kT6xcx5P37sqPJyMZEKqR03kdcfYcQ8Qu87xh56R+7d/j6m
                                                                                                                                                          jq5NkqtHWXlq/v6H7Lf8FEf+CzP7GX/BOfSrjSviF4yXxB428rNl4D8PuJb12Iypnb7lqnT5pCCQ
                                                                                                                                                          flVq/nu/4KS/8Fjv2tf+Ck/iKSx+IXiD/hHvA8Fx5mleAtEnYWcWOjzvw11IP7z8A52quTXypqOp
                                                                                                                                                          6jrF/NqurX811dXMrSXFzcSl5JXY5ZmZsliTySetQV9blXDuCy202uefd9PRdPzPm8wzvFY68V7s
                                                                                                                                                          ey/Vhk+tFFFfQHihRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAZPrUtne
                                                                                                                                                          3mn3SXthdywTRMGjmhkKshHQgjkGoqKLXGm09D6+/Zb/AOC6v/BTP9k6C20rwd+0Te+I9ItgFTQv
                                                                                                                                                          HSnVbfYOAgaRhMi+ySLjtiv0G/Z6/wCDvzRnjg0/9qv9k+7jbAFxqvgHVFkGe7C2u2X8vO496/Du
                                                                                                                                                          ivIxeRZVjHepSV+60f4fqelh84zHDaRnddnr+Z/Ul8Gv+Di//glF8YFiSb9oObwpcS4za+MdFntC
                                                                                                                                                          h9DIoeL8d+Pevpb4dfts/sbfF6NG+F37Vnw58QmQZWLR/GljcOPqiSlgfYjNfxsA4GMUBypDLwQc
                                                                                                                                                          gg9DXh1uC8HJ3pVJL1s/8j16XFOIX8Smn6XX+Z/bZp+uaHq0fnaVq9rcqf4redXH5qTU7w2z8vCh
                                                                                                                                                          +qA1/FXo3xX+J/hzZ/wj3xH1+w8v7n2PWZ4tv02sMV0lp+13+1ZYLssv2lvHsQ9I/F96P5S1xPgq
                                                                                                                                                          r9msv/Af+CdceKqL+Km/v/4B/ZisVvHykSL7hQKp6p4n8L6Ghk1rxDYWagZLXV2kY/8AHiK/jXvv
                                                                                                                                                          2sv2pNUUpqP7SHjudSMETeLbxh+slcvrXxE8f+JFZPEXjjWL8N94Xupyy5/76Y048FVL+9WX/gP/
                                                                                                                                                          AARS4qor4aT+/wD4B/X98Sv+Cg/7CXweSU/Ez9sP4aaPLDnfaXfjSyFxkdQIRIZGPsFNfMHxp/4O
                                                                                                                                                          Xf8AglV8IhMmi/FLXfG9zHkJbeDvD0kokI9JLgwx499351/MRkDoMfSkJzXdR4MwUXepUlL0sv8A
                                                                                                                                                          M46vFGJkv3cEvXX/ACP2i/aJ/wCDvfx3qUVxpn7Kf7LOn6Xuytvq3jvUXunA7Mbe2KKD7eaR9a/P
                                                                                                                                                          L9qj/grx/wAFDv2xUuNP+Mn7S+vf2Tc5Evh7QJv7NsGU/wALQ2+0SL7Pu/OvmqivdwmS5ZgtaVNX
                                                                                                                                                          7vV/ezyMRm2PxWk5u3ZaL8BXd3Yu7kknJJPJNJknqaKK9Sx5wUUUUAFFFFABRRRQAUUUUAFFFFAB
                                                                                                                                                          RRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFF
                                                                                                                                                          FFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUU
                                                                                                                                                          UAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAf/2VBLAQIt
                                                                                                                                                          ABQABgAIAAAAIQD0vmNdDgEAABoCAAATAAAAAAAAAAAAAAAAAAAAAABbQ29udGVudF9UeXBlc10u
                                                                                                                                                          eG1sUEsBAi0AFAAGAAgAAAAhAAjDGKTUAAAAkwEAAAsAAAAAAAAAAAAAAAAAPwEAAF9yZWxzLy5y
                                                                                                                                                          ZWxzUEsBAi0AFAAGAAgAAAAhABZd4TrIAQAACAQAABIAAAAAAAAAAAAAAAAAPAIAAGRycy9waWN0
                                                                                                                                                          dXJleG1sLnhtbFBLAQItABQABgAIAAAAIQBYYLMbugAAACIBAAAdAAAAAAAAAAAAAAAAADQEAABk
                                                                                                                                                          cnMvX3JlbHMvcGljdHVyZXhtbC54bWwucmVsc1BLAQItABQABgAIAAAAIQBhJaU7FQEAAIgBAAAP
                                                                                                                                                          AAAAAAAAAAAAAAAAACkFAABkcnMvZG93bnJldi54bWxQSwECLQAKAAAAAAAAACEANSomGNyFAADc
                                                                                                                                                          hQAAFQAAAAAAAAAAAAAAAABrBgAAZHJzL21lZGlhL2ltYWdlMS5qcGVnUEsFBgAAAAAGAAYAhQEA
                                                                                                                                                          AHqMAAAAAA==
                                                                                                                                                          ">
                                                                                                                                                             <v:imagedata src="image001.png" o:title=""/>
                                                                                                                                                             <o:lock v:ext="edit" aspectratio="f"/>
                                                                                                                                                             <x:ClientData ObjectType="Pict">
                                                                                                                                                              <x:SizeWithCells/>
                                                                                                                                                              <x:Locked>False</x:Locked>
                                                                                                                                                              <x:CF>Bitmap</x:CF>
                                                                                                                                                              <x:AutoPict/>
                                                                                                                                                             </x:ClientData>
                                                                                                                                                            </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
                                                                                                                                                                                                    position:absolute;z-index:1;margin-left:31px;margin-top:19px;width:142px;
                                                                                                                                                                                                    height:143px'><img width=142 height=143 src=image002.gif v:shapes="image1.jpg"></span><![endif]><span
                                                                                                                                                                                                    style='mso-ignore:vglayout2'>
                                                                                                                                                                <table cellpadding=0 cellspacing=0>
                                                                                                                                                                    <tr>
                                                                                                                                                                        <td height=20 class=xl65 width=52 style='height:15.0pt;width:39pt'>&nbsp;</td>
                                                                                                                                                                    </tr>
                                                                                                                                                                </table>
                                                                                                                                                            </span></td>
                                                                                                                                                        <td class=xl65 width=79 style='width:59pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65 width=64 style='width:48pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl66 width=22 style='width:17pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl67 width=81 style='width:61pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl94 width=39 style='width:29pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65 width=63 style='width:47pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65 width=25 style='width:19pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl67 width=71 style='width:53pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65 width=81 style='width:61pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65 width=39 style='width:29pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65 width=64 style='width:48pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65 width=22 style='width:17pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl67 width=71 style='width:53pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65 width=81 style='width:61pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65 width=39 style='width:29pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl74 width=63 style='width:47pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65 width=24 style='width:18pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl67 width=71 style='width:53pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl67 width=81 style='width:61pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65 width=39 style='width:29pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65 width=64 style='width:48pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65 width=25 style='width:19pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl67 width=71 style='width:53pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl67 width=81 style='width:61pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65 width=39 style='width:29pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl79 width=37 style='width:28pt'>&nbsp;</td>
                                                                                                                                                    </tr>
                                                                                                                                                    <tr height=20 style='height:15.0pt'>
                                                                                                                                                        <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td colspan=3 class=xl88>ROUND 1</td>
                                                                                                                                                        <td class=xl69>&nbsp;</td>
                                                                                                                                                        <td colspan=4 class=xl88>ROUND 2</td>
                                                                                                                                                        <td class=xl69>&nbsp;</td>
                                                                                                                                                        <td colspan=4 class=xl88>ROUND 3</td>
                                                                                                                                                        <td class=xl68>&nbsp;</td>
                                                                                                                                                        <td colspan=4 class=xl88>SEMI-FINAL</td>
                                                                                                                                                        <td class=xl69>&nbsp;</td>
                                                                                                                                                        <td colspan=4 class=xl88>FINAL</td>
                                                                                                                                                        <td class=xl79>&nbsp;</td>
                                                                                                                                                    </tr>
                                                                                                                                                    <tr height=20 style='height:15.0pt'>
                                                                                                                                                        <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl66>&nbsp;</td>
                                                                                                                                                        <td class=xl67>&nbsp;</td>
                                                                                                                                                        <td class=xl94>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl67>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl67>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl74>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl67>&nbsp;</td>
                                                                                                                                                        <td class=xl67>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl67>&nbsp;</td>
                                                                                                                                                        <td class=xl67>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl79>&nbsp;</td>
                                                                                                                                                    </tr>
                                                                                                                                                    <tr height=20 style='height:15.0pt'>
                                                                                                                                                        <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td class=xl65>&nbsp;</td>
                                                                                                                                                        <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>1</td>
                                                                                                                                                        <td class=xl113 style='border-left:none'>
                                                                                                                                                            <?php
                                                                                                                                                                    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                                    $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=1";
                                                                                                                                                                    $result = mysqli_query($db, $sql);
                                                                                                                                                                    while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                                    
                                                                                                                                                                    echo $row['nome'];
            
                                                                                                                                                                    }
                                                                                                                                                            ?>
                                                                                                                                                        </td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>9</td>
                                                                                                                                                    <td class=xl103 style='border-left:none'>2º heat 1</td>
                                                                                                                                                    <td class=xl70 style='border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>13</td>
                                                                                                                                                    <td class=xl103 style='border-left:none'>1º heat 1</td>
                                                                                                                                                    <td class=xl70 style='border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl98 style='border-bottom:.5pt solid black'>SF1</td>
                                                                                                                                                    <td class=xl105 style='border-left:none'>1º heat 13</td>
                                                                                                                                                    <td class=xl100 style='border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=3 class=xl91 style='border-bottom:.5pt solid black'>F</td>
                                                                                                                                                    <td class=xl107 style='border-left:none'>1º semi 1</td>
                                                                                                                                                    <td class=xl101 style='border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl113 style='border-top:none;border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                                    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                                    $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=2";
                                                                                                                                                                    $result = mysqli_query($db, $sql);
                                                                                                                                                                    while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                                    
                                                                                                                                                                    echo $row['nome'];
            
                                                                                                                                                                    }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl103 style='border-top:none;border-left:none'>2º heat 2</td>
                                                                                                                                                    <td class=xl70 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl103 style='border-top:none;border-left:none'>1º heat 7</td>
                                                                                                                                                    <td class=xl70 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl105 style='border-top:none;border-left:none'>1º heat 14</td>
                                                                                                                                                    <td class=xl100 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl103 style='border-top:none;border-left:none'>1º semi 2</td>
                                                                                                                                                    <td class=xl70 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl71>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl94>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl71>&nbsp;</td>
                                                                                                                                                    <td class=xl104>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl71>&nbsp;</td>
                                                                                                                                                    <td class=xl104>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl106>&nbsp;</td>
                                                                                                                                                    <td class=xl83>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl108 style='border-top:none;border-left:none'>1º semi 3</td>
                                                                                                                                                    <td class=xl102 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>2</td>
                                                                                                                                                    <td class=xl113 style='border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                            $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=3";
                                                                                                                                                            $result = mysqli_query($db, $sql);
                                                                                                                                                            while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                            echo $row['nome'];
                                                                                                                                                            }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>10</td>
                                                                                                                                                    <td class=xl103 style='border-left:none'>2º heat 3</td>
                                                                                                                                                    <td class=xl70 style='border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>14</td>
                                                                                                                                                    <td class=xl103 style='border-left:none'>1º heat 2</td>
                                                                                                                                                    <td class=xl70 style='border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl98 style='border-bottom:.5pt solid black'>SF2</td>
                                                                                                                                                    <td class=xl105 style='border-left:none'>1º heat 15</td>
                                                                                                                                                    <td class=xl100 style='border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl68>&nbsp;</td>
                                                                                                                                                    <td class=xl82>&nbsp;</td>
                                                                                                                                                    <td class=xl82>&nbsp;</td>
                                                                                                                                                    <td class=xl74>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl113 style='border-top:none;border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                            $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=4";
                                                                                                                                                            $result = mysqli_query($db, $sql);
                                                                                                                                                            while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                            echo $row['nome'];
                                                                                                                                                            }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl103 style='border-top:none;border-left:none'>2º heat 4</td>
                                                                                                                                                    <td class=xl70 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl103 style='border-top:none;border-left:none'>1º heat 8</td>
                                                                                                                                                    <td class=xl70 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl105 style='border-top:none;border-left:none'>1º heat 16</td>
                                                                                                                                                    <td class=xl100 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl72>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl94>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl72>&nbsp;</td>
                                                                                                                                                    <td class=xl104>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl72>&nbsp;</td>
                                                                                                                                                    <td class=xl104>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl77>&nbsp;</td>
                                                                                                                                                    <td class=xl106>&nbsp;</td>
                                                                                                                                                    <td class=xl83>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>01. Kbça</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>3</td>
                                                                                                                                                    <td class=xl113 style='border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                            $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=5";
                                                                                                                                                            $result = mysqli_query($db, $sql);
                                                                                                                                                            while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                            echo $row['nome'];
                                                                                                                                                            }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>11</td>
                                                                                                                                                    <td class=xl103 style='border-left:none'>2º heat 5</td>
                                                                                                                                                    <td class=xl70 style='border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>15</td>
                                                                                                                                                    <td class=xl103 style='border-left:none'>1º heat 3</td>
                                                                                                                                                    <td class=xl70 style='border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl98 style='border-bottom:.5pt solid black'>SF3</td>
                                                                                                                                                    <td class=xl105 style='border-left:none'>1º heat 17</td>
                                                                                                                                                    <td class=xl100 style='border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>02. Kxa</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl113 style='border-top:none;border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                            $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=6";
                                                                                                                                                            $result = mysqli_query($db, $sql);
                                                                                                                                                            while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                            echo $row['nome'];
                                                                                                                                                            }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl103 style='border-top:none;border-left:none'>2º heat 6</td>
                                                                                                                                                    <td class=xl70 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl103 style='border-top:none;border-left:none'>1º heat 9</td>
                                                                                                                                                    <td class=xl70 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl105 style='border-top:none;border-left:none'>1º heat 18</td>
                                                                                                                                                    <td class=xl100 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl73>03. Guedera</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl72>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl94>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl72>&nbsp;</td>
                                                                                                                                                    <td class=xl104>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl72>&nbsp;</td>
                                                                                                                                                    <td class=xl104>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl68>&nbsp;</td>
                                                                                                                                                    <td class=xl82>&nbsp;</td>
                                                                                                                                                    <td class=xl82>&nbsp;</td>
                                                                                                                                                    <td class=xl74>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>04. Burns</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>4</td>
                                                                                                                                                    <td class=xl113 style='border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                            $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=7";
                                                                                                                                                            $result = mysqli_query($db, $sql);
                                                                                                                                                            while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                            echo $row['nome'];
                                                                                                                                                            }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>12</td>
                                                                                                                                                    <td class=xl103 style='border-left:none'>2º heat 7</td>
                                                                                                                                                    <td class=xl70 style='border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>16</td>
                                                                                                                                                    <td class=xl103 style='border-left:none'>1º heat 4</td>
                                                                                                                                                    <td class=xl70 style='border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>05. Milho</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl113 style='border-top:none;border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                            $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=8";
                                                                                                                                                            $result = mysqli_query($db, $sql);
                                                                                                                                                            while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                            echo $row['nome'];
                                                                                                                                                            }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl103 style='border-top:none;border-left:none'>2º heat 8</td>
                                                                                                                                                    <td class=xl70 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl103 style='border-top:none;border-left:none'>1º heat 10</td>
                                                                                                                                                    <td class=xl70 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                    <td colspan=2 class=xl109 style='mso-ignore:colspan'>&nbsp;</td>
                                                                                                                                                    <td colspan=3 class=xl79 style='mso-ignore:colspan'>&nbsp;</td>
                                                                                                                                                    <td colspan=2 class=xl109 style='mso-ignore:colspan'>&nbsp;</td>
                                                                                                                                                    <td colspan=2 class=xl79 style='mso-ignore:colspan'>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>06. Nariga</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl72>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl94>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl72>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl72>&nbsp;</td>
                                                                                                                                                    <td class=xl104>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                    <td colspan=2 class=xl109 style='mso-ignore:colspan'>&nbsp;</td>
                                                                                                                                                    <td colspan=3 class=xl79 style='mso-ignore:colspan'>&nbsp;</td>
                                                                                                                                                    <td colspan=2 class=xl109 style='mso-ignore:colspan'>&nbsp;</td>
                                                                                                                                                    <td colspan=2 class=xl79 style='mso-ignore:colspan'>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65 colspan=2 style='mso-ignore:colspan'>07. Vaqueiro</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>5</td>
                                                                                                                                                    <td class=xl113 style='border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                            $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=9";
                                                                                                                                                            $result = mysqli_query($db, $sql);
                                                                                                                                                            while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                            echo $row['nome'];
                                                                                                                                                            }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl85>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>17</td>
                                                                                                                                                    <td class=xl103 style='border-left:none'>1º heat 5</td>
                                                                                                                                                    <td class=xl70 style='border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                    <td colspan=2 class=xl109 style='mso-ignore:colspan'>&nbsp;</td>
                                                                                                                                                    <td colspan=3 class=xl79 style='mso-ignore:colspan'>&nbsp;</td>
                                                                                                                                                    <td class=xl109>&nbsp;</td>
                                                                                                                                                    <td class=xl112>&nbsp;</td>
                                                                                                                                                    <td class=xl111>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>08. Kombi</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl113 style='border-top:none;border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                            $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=10";
                                                                                                                                                            $result = mysqli_query($db, $sql);
                                                                                                                                                            while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                            echo $row['nome'];
                                                                                                                                                            }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl103 style='border-top:none;border-left:none'>1º heat 11</td>
                                                                                                                                                    <td class=xl70 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td colspan=4 rowspan=2 class=xl114 style='border-right:.5pt solid black;
                                                                                                                                                        border-bottom:.5pt solid black'>The Champ:</td>
                                                                                                                                                    <td colspan=5 rowspan=2 class=xl120 style='border-right:.5pt solid black;
                                                                                                                                                        border-bottom:.5pt solid black'>-</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>09. Maca</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl72>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl94>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl75>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl72>&nbsp;</td>
                                                                                                                                                    <td class=xl104>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>10. Davala</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>6</td>
                                                                                                                                                    <td class=xl113 style='border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                            $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=11";
                                                                                                                                                            $result = mysqli_query($db, $sql);
                                                                                                                                                            while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                            echo $row['nome'];
                                                                                                                                                            }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl85>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>18</td>
                                                                                                                                                    <td class=xl103 style='border-left:none'>1º heat 6</td>
                                                                                                                                                    <td class=xl70 style='border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                    <td colspan=2 class=xl109 style='mso-ignore:colspan'>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                    <td class=xl109>&nbsp;</td>
                                                                                                                                                    <td class=xl124>&nbsp;</td>
                                                                                                                                                    <td class=xl124>&nbsp;</td>
                                                                                                                                                    <td class=xl124>&nbsp;</td>
                                                                                                                                                    <td class=xl110>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                                                                                                                                                    <td height=20 class=xl65 style='height:15.0pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>11. Chineis</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl113 style='border-top:none;border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                            $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=12";
                                                                                                                                                            $result = mysqli_query($db, $sql);
                                                                                                                                                            while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                            echo $row['nome'];
                                                                                                                                                            }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl103 style='border-top:none;border-left:none'>1º heat 12</td>
                                                                                                                                                    <td class=xl70 style='border-top:none;border-left:none'>-</td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td colspan=4 rowspan=2 class=xl114 style='border-right:.5pt solid black;
                                                                                                                                                        border-bottom:.5pt solid black'>2º Lugar:</td>
                                                                                                                                                    <td colspan=5 rowspan=2 class=xl125 style='border-right:.5pt solid black;
                                                                                                                                                        border-bottom:.5pt solid black'>-</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=21 style='mso-height-source:userset;height:15.75pt'>
                                                                                                                                                    <td height=21 class=xl65 style='height:15.75pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>12. Guto</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl66>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl94>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl81>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl66>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=21 style='mso-height-source:userset;height:15.75pt'>
                                                                                                                                                    <td height=21 class=xl65 style='height:15.75pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>13. Gigante</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>7</td>
                                                                                                                                                    <td class=xl113 style='border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                            $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=13";
                                                                                                                                                            $result = mysqli_query($db, $sql);
                                                                                                                                                            while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                            echo $row['nome'];
                                                                                                                                                            }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl85>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl90>&nbsp;</td>
                                                                                                                                                    <td class=xl82>&nbsp;</td>
                                                                                                                                                    <td class=xl82>&nbsp;</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=21 style='mso-height-source:userset;height:15.75pt'>
                                                                                                                                                    <td height=21 class=xl65 style='height:15.75pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>14. Marcio</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl113 style='border-top:none;border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                            $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=14";
                                                                                                                                                            $result = mysqli_query($db, $sql);
                                                                                                                                                            while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                            echo $row['nome'];
                                                                                                                                                            }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl82>&nbsp;</td>
                                                                                                                                                    <td class=xl82>&nbsp;</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td colspan=4 rowspan=2 class=xl114 style='border-right:.5pt solid black;
                                                                                                                                                        border-bottom:.5pt solid black'>3º Lugar:</td>
                                                                                                                                                    <td colspan=5 rowspan=2 class=xl125 style='border-right:.5pt solid black;
                                                                                                                                                        border-bottom:.5pt solid black'>-</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=21 style='mso-height-source:userset;height:15.75pt'>
                                                                                                                                                    <td height=21 class=xl65 style='height:15.75pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>15. Lingue</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td colspan=2 class=xl79 style='mso-ignore:colspan'>&nbsp;</td>
                                                                                                                                                    <td class=xl96>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl83>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl83>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=21 style='mso-height-source:userset;height:15.75pt'>
                                                                                                                                                    <td height=21 class=xl65 style='height:15.75pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>16. Drup</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl86 style='border-bottom:.5pt solid black'>8</td>
                                                                                                                                                    <td class=xl113 style='border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                            $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=15";
                                                                                                                                                            $result = mysqli_query($db, $sql);
                                                                                                                                                            while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                            echo $row['nome'];
                                                                                                                                                            }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl85>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td rowspan=2 class=xl90>&nbsp;</td>
                                                                                                                                                    <td class=xl82>&nbsp;</td>
                                                                                                                                                    <td class=xl82>&nbsp;</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl78>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=21 style='mso-height-source:userset;height:15.75pt'>
                                                                                                                                                    <td height=21 class=xl65 style='height:15.75pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl113 style='border-top:none;border-left:none'>
                                                                                                                                                        <?php
                                                                                                                                                            $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                                                                                                                                            mysqli_select_db($db, DB_DATABASE);
                                                                                                                                                            $sql = "SELECT t2.nome FROM (atletas as t2, sorteio_round1 as t1) WHERE t2.id_atletas=t1.atleta AND t1.resultado=16";
                                                                                                                                                            $result = mysqli_query($db, $sql);
                                                                                                                                                            while ($row = mysqli_fetch_array($result)) {           
                                                                                                                                                            echo $row['nome'];
                                                                                                                                                            }
                                                                                                                                                        ?>
                                                                                                                                                    </td>
                                                                                                                                                    <td class=xl95 style='border-top:none;border-left:none'>0,00</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl80>&nbsp;</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl82>&nbsp;</td>
                                                                                                                                                    <td class=xl82>&nbsp;</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl76>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr height=21 style='mso-height-source:userset;height:15.75pt'>
                                                                                                                                                    <td height=21 class=xl65 style='height:15.75pt'>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td colspan=2 class=xl79 style='mso-ignore:colspan'>&nbsp;</td>
                                                                                                                                                    <td class=xl96>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl74>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl67>&nbsp;</td>
                                                                                                                                                    <td class=xl65>&nbsp;</td>
                                                                                                                                                    <td class=xl79>&nbsp;</td>
                                                                                                                                                </tr>
                                                                                                                                                <![if supportMisalignedColumns]>
                                                                                                                                                <tr height=0 style='display:none'>
                                                                                                                                                    <td width=52 style='width:39pt'></td>
                                                                                                                                                    <td width=79 style='width:59pt'></td>
                                                                                                                                                    <td width=64 style='width:48pt'></td>
                                                                                                                                                    <td width=22 style='width:17pt'></td>
                                                                                                                                                    <td width=81 style='width:61pt'></td>
                                                                                                                                                    <td width=39 style='width:29pt'></td>
                                                                                                                                                    <td width=63 style='width:47pt'></td>
                                                                                                                                                    <td width=25 style='width:19pt'></td>
                                                                                                                                                    <td width=71 style='width:53pt'></td>
                                                                                                                                                    <td width=81 style='width:61pt'></td>
                                                                                                                                                    <td width=39 style='width:29pt'></td>
                                                                                                                                                    <td width=64 style='width:48pt'></td>
                                                                                                                                                    <td width=22 style='width:17pt'></td>
                                                                                                                                                    <td width=71 style='width:53pt'></td>
                                                                                                                                                    <td width=81 style='width:61pt'></td>
                                                                                                                                                    <td width=39 style='width:29pt'></td>
                                                                                                                                                    <td width=63 style='width:47pt'></td>
                                                                                                                                                    <td width=24 style='width:18pt'></td>
                                                                                                                                                    <td width=71 style='width:53pt'></td>
                                                                                                                                                    <td width=81 style='width:61pt'></td>
                                                                                                                                                    <td width=39 style='width:29pt'></td>
                                                                                                                                                    <td width=64 style='width:48pt'></td>
                                                                                                                                                    <td width=25 style='width:19pt'></td>
                                                                                                                                                    <td width=71 style='width:53pt'></td>
                                                                                                                                                    <td width=81 style='width:61pt'></td>
                                                                                                                                                    <td width=39 style='width:29pt'></td>
                                                                                                                                                    <td width=37 style='width:28pt'></td>
                                                                                                                                                </tr>
                                                                                                                                                <![endif]>
                                                                                                                                                </table>
                                                                                                                                                <h1><a href = "../welcome.php"><font size="3" face="bold">Voltar</font></a></h1>
                                                                                                                                                </body>

                                                                                                                                                </html>