<html>
<head>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="styly.css">
    <title>Vyhledávač ČR</title>
</head>
<body>
<form method="post" class="cr">
    <h1>Vyhledávač ČR:</h1>
    <select name="server">
        <option value="3">server 3</option>
        <option value="4">server 4</option>
        <option value="5">server 5</option>
        <option value="6">server 6</option>
        <option value="7">server 7</option>
    </select>
    <input type="submit" value="Vyhledat">
    <br>
    <br>
    <?php

    if (isset($_POST["server"])) {
        $server = $_POST['server'];

        $three = file_get_contents('https://www.panhradu.cz/units_serialize.aspx?id_server=3');
        $four = file_get_contents('https://www.panhradu.cz/units_serialize.aspx?id_server=4');
        $five = file_get_contents('https://www.panhradu.cz/units_serialize.aspx?id_server=5');
        $six = file_get_contents('https://www.panhradu.cz/units_serialize.aspx?id_server=6');
        $seven = file_get_contents('https://www.panhradu.cz/units_serialize.aspx?id_server=7');

        $sthree = explode("\n", $three);
        $sfour = explode("\n", $four);
        $sfive = explode("\n", $five);
        $ssix = explode("\n", $six);
        $sseven = explode("\n", $seven);

        //$sfive = trim($data, "\n");

        $hthree = array_shift($sthree);
        $hfour = array_shift($sfour);
        $hfive = array_shift($sfive);
        $hsix = array_shift($ssix);
        $hseven = array_shift($sseven);


        $echo1 = "<table class='text'><tr><td>[";
        //echo $map[0][0];
        $echo2 = ",";
        //echo $map[0][1];
        $echo3 = "]</td><td>";
        //$echone5 = '<img src="https://www.panhradu.cz/i/ar/ne5.jpg">';
        $echo4 = "</td></tr></table><br>";


        $echone1 = '<img src="https://www.panhradu.cz/i/ar/ne1.jpg">'; //plášť
        $echone2 = '<img src="https://www.panhradu.cz/i/ar/ne2.jpg">'; //helma
        $echone3 = '<img src="https://www.panhradu.cz/i/ar/ne3.png">'; //meč
        $echone4 = '<img src="https://www.panhradu.cz/i/ar/ne4.jpg">'; //brnění
        $echone5 = '<img src="https://www.panhradu.cz/i/ar/ne5.jpg">'; //amulet
        $echone6 = '<img src="https://www.panhradu.cz/i/ar/ne6.jpg">'; //štít
        $echone7 = '<img src="https://www.panhradu.cz/i/ar/ne7.png">'; //kuše
        $echone8 = '<img src="https://www.panhradu.cz/i/ar/ne8.jpg">'; //holenice

        $cr = '<img src="https://www.panhradu.cz/i/u/bk_2_3.gif">'; //černý rytíř

        //49 = plášť
        //50 = hemla
        //51 = meč
        //52 = brnění
        //53 = amulet
        //54 = štít
        //55 = kuše
        //56 = holenice

        $map = [];
        $map4 = [];
        $map5 = [];
        $map6 = [];
        $map7 = [];

        foreach ($sthree as $row) {
            $row = trim($row, '>');
            $row = explode(">", $row);
            $map[] = $row;
        }
        switch ($server) {
            case '3':
                echo "Server3:";
                if ($map[0][3] == 49 || $map[0][3] == 50 || $map[0][3] == 51 || $map[0][3] == 52 || $map[0][3] == 53 || $map[0][3] == 54 || $map[0][3] == 55 || $map[0][3] == 56) {
                    if ($map[0][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[0][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[0][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[0][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[0][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[0][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[0][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[0][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[0][0];
                    echo "&y=";
                    echo $map[0][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[0][0];
                    echo "$echo2";
                    echo $map[0][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[1][3] == 49 || $map[1][3] == 50 || $map[1][3] == 51 || $map[1][3] == 52 || $map[1][3] == 53 || $map[1][3] == 54 || $map[1][3] == 55 || $map[1][3] == 56) {
                    if ($map[1][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[1][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[1][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[1][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[1][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[1][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[1][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[1][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[1][0];
                    echo "&y=";
                    echo $map[1][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[1][0];
                    echo "$echo2";
                    echo $map[1][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[2][3] == 49 || $map[2][3] == 50 || $map[2][3] == 51 || $map[2][3] == 52 || $map[2][3] == 53 || $map[2][3] == 54 || $map[2][3] == 55 || $map[2][3] == 56) {
                    if ($map[2][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[2][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[2][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[2][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[2][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[2][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[2][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[2][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[2][0];
                    echo "&y=";
                    echo $map[2][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[2][0];
                    echo "$echo2";
                    echo $map[2][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[3][3] == 49 || $map[3][3] == 50 || $map[3][3] == 51 || $map[3][3] == 52 || $map[3][3] == 53 || $map[3][3] == 54 || $map[3][3] == 55 || $map[3][3] == 56) {
                    if ($map[3][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[3][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[3][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[3][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[3][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[3][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[3][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[3][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[3][0];
                    echo "&y=";
                    echo $map[3][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[3][0];
                    echo "$echo2";
                    echo $map[3][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[4][3] == 49 || $map[4][3] == 50 || $map[4][3] == 51 || $map[4][3] == 52 || $map[4][3] == 53 || $map[4][3] == 54 || $map[4][3] == 55 || $map[4][3] == 56) {
                    if ($map[4][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[4][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[4][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[4][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[4][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[4][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[4][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[4][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[4][0];
                    echo "&y=";
                    echo $map[4][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[4][0];
                    echo "$echo2";
                    echo $map[4][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[5][3] == 49 || $map[5][3] == 50 || $map[5][3] == 51 || $map[5][3] == 52 || $map[5][3] == 53 || $map[5][3] == 54 || $map[5][3] == 55 || $map[5][3] == 56) {
                    if ($map[5][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[5][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[5][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[5][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[5][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[5][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[5][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[5][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[5][0];
                    echo "&y=";
                    echo $map[5][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[5][0];
                    echo "$echo2";
                    echo $map[5][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[6][3] == 49 || $map[6][3] == 50 || $map[6][3] == 51 || $map[6][3] == 52 || $map[6][3] == 53 || $map[6][3] == 54 || $map[6][3] == 55 || $map[6][3] == 56) {
                    if ($map[6][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[6][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[6][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[6][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[6][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[6][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[6][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[6][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[6][0];
                    echo "&y=";
                    echo $map[6][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[6][0];
                    echo "$echo2";
                    echo $map[6][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[7][3] == 49 || $map[7][3] == 50 || $map[7][3] == 51 || $map[7][3] == 52 || $map[7][3] == 53 || $map[7][3] == 54 || $map[7][3] == 55 || $map[7][3] == 56) {
                    if ($map[7][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[7][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[7][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[7][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[7][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[7][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[7][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[7][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[7][0];
                    echo "&y=";
                    echo $map[7][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[7][0];
                    echo "$echo2";
                    echo $map[7][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[8][3] == 49 || $map[8][3] == 50 || $map[8][3] == 51 || $map[8][3] == 52 || $map[8][3] == 53 || $map[8][3] == 54 || $map[8][3] == 55 || $map[8][3] == 56) {
                    if ($map[8][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[8][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[8][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[8][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[8][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[8][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[8][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[8][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[8][0];
                    echo "&y=";
                    echo $map[8][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[8][0];
                    echo "$echo2";
                    echo $map[8][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[9][3] == 49 || $map[9][3] == 50 || $map[9][3] == 51 || $map[9][3] == 52 || $map[9][3] == 53 || $map[9][3] == 54 || $map[9][3] == 55 || $map[9][3] == 56) {
                    if ($map[9][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[9][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[9][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[9][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[9][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[9][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[9][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[9][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[9][0];
                    echo "&y=";
                    echo $map[9][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[9][0];
                    echo "$echo2";
                    echo $map[9][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[10][3] == 49 || $map[10][3] == 50 || $map[10][3] == 51 || $map[10][3] == 52 || $map[10][3] == 53 || $map[10][3] == 54 || $map[10][3] == 55 || $map[10][3] == 56) {
                    if ($map[10][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[10][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[10][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[10][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[10][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[10][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[10][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[10][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[10][0];
                    echo "&y=";
                    echo $map[10][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[10][0];
                    echo "$echo2";
                    echo $map[10][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[11][3] == 49 || $map[11][3] == 50 || $map[11][3] == 51 || $map[11][3] == 52 || $map[11][3] == 53 || $map[11][3] == 54 || $map[11][3] == 55 || $map[11][3] == 56) {
                    if ($map[11][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[11][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[11][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[11][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[11][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[11][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[11][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[11][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[11][0];
                    echo "&y=";
                    echo $map[11][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[11][0];
                    echo "$echo2";
                    echo $map[11][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[12][3] == 49 || $map[12][3] == 50 || $map[12][3] == 51 || $map[12][3] == 52 || $map[12][3] == 53 || $map[12][3] == 54 || $map[12][3] == 55 || $map[12][3] == 56) {
                    if ($map[12][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[12][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[12][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[12][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[12][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[12][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[12][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[12][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[12][0];
                    echo "&y=";
                    echo $map[12][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[12][0];
                    echo "$echo2";
                    echo $map[12][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[13][3] == 49 || $map[13][3] == 50 || $map[13][3] == 51 || $map[13][3] == 52 || $map[13][3] == 53 || $map[13][3] == 54 || $map[13][3] == 55 || $map[13][3] == 56) {
                    if ($map[13][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[13][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[13][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[13][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[13][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[13][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[13][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[13][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[13][0];
                    echo "&y=";
                    echo $map[13][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[13][0];
                    echo "$echo2";
                    echo $map[13][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[14][3] == 49 || $map[14][3] == 50 || $map[14][3] == 51 || $map[14][3] == 52 || $map[14][3] == 53 || $map[14][3] == 54 || $map[14][3] == 55 || $map[14][3] == 56) {
                    if ($map[14][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[14][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[14][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[14][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[14][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[14][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[14][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[14][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[14][0];
                    echo "&y=";
                    echo $map[14][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[14][0];
                    echo "$echo2";
                    echo $map[14][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map[15][3] == 49 || $map[15][3] == 50 || $map[15][3] == 51 || $map[15][3] == 52 || $map[15][3] == 53 || $map[15][3] == 54 || $map[15][3] == 55 || $map[15][3] == 56) {
                    if ($map[15][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map[15][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map[15][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map[15][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map[15][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map[15][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map[15][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map[15][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map[15][0];
                    echo "&y=";
                    echo $map[15][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map[15][0];
                    echo "$echo2";
                    echo $map[15][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
        }


        foreach ($sfour as $row4) {
            $row4 = trim($row4, '>');
            $row4 = explode(">", $row4);
            $map4[] = $row4;
        }
        switch ($server) {
            case '4':
                echo "Server4:";
                if ($map4[0][3] == 49 || $map4[0][3] == 50 || $map4[0][3] == 51 || $map4[0][3] == 52 || $map4[0][3] == 53 || $map4[0][3] == 54 || $map4[0][3] == 55 || $map4[0][3] == 56) {
                    if ($map4[0][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[0][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[0][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[0][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[0][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[0][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[0][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[0][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[0][0];
                    echo "&y=";
                    echo $map4[0][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[0][0];
                    echo "$echo2";
                    echo $map4[0][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[1][3] == 49 || $map4[1][3] == 50 || $map4[1][3] == 51 || $map4[1][3] == 52 || $map4[1][3] == 53 || $map4[1][3] == 54 || $map4[1][3] == 55 || $map4[1][3] == 56) {
                    if ($map4[1][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[1][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[1][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[1][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[1][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[1][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[1][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[1][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[1][0];
                    echo "&y=";
                    echo $map4[1][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[1][0];
                    echo "$echo2";
                    echo $map4[1][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[2][3] == 49 || $map4[2][3] == 50 || $map4[2][3] == 51 || $map4[2][3] == 52 || $map4[2][3] == 53 || $map4[2][3] == 54 || $map4[2][3] == 55 || $map4[2][3] == 56) {
                    if ($map4[2][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[2][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[2][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[2][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[2][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[2][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[2][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[2][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[2][0];
                    echo "&y=";
                    echo $map4[2][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[2][0];
                    echo "$echo2";
                    echo $map4[2][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[3][3] == 49 || $map4[3][3] == 50 || $map4[3][3] == 51 || $map4[3][3] == 52 || $map4[3][3] == 53 || $map4[3][3] == 54 || $map4[3][3] == 55 || $map4[3][3] == 56) {
                    if ($map4[3][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[3][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[3][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[3][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[3][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[3][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[3][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[3][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[3][0];
                    echo "&y=";
                    echo $map4[3][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[3][0];
                    echo "$echo2";
                    echo $map4[3][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[4][3] == 49 || $map4[4][3] == 50 || $map4[4][3] == 51 || $map4[4][3] == 52 || $map4[4][3] == 53 || $map4[4][3] == 54 || $map4[4][3] == 55 || $map4[4][3] == 56) {
                    if ($map4[4][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[4][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[4][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[4][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[4][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[4][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[4][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[4][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[4][0];
                    echo "&y=";
                    echo $map4[4][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[4][0];
                    echo "$echo2";
                    echo $map4[4][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[5][3] == 49 || $map4[5][3] == 50 || $map4[5][3] == 51 || $map4[5][3] == 52 || $map4[5][3] == 53 || $map4[5][3] == 54 || $map4[5][3] == 55 || $map4[5][3] == 56) {
                    if ($map4[5][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[5][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[5][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[5][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[5][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[5][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[5][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[5][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[5][0];
                    echo "&y=";
                    echo $map4[5][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[5][0];
                    echo "$echo2";
                    echo $map4[5][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[6][3] == 49 || $map4[6][3] == 50 || $map4[6][3] == 51 || $map4[6][3] == 52 || $map4[6][3] == 53 || $map4[6][3] == 54 || $map4[6][3] == 55 || $map4[6][3] == 56) {
                    if ($map4[6][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[6][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[6][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[6][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[6][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[6][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[6][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[6][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[6][0];
                    echo "&y=";
                    echo $map4[6][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[6][0];
                    echo "$echo2";
                    echo $map4[6][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[7][3] == 49 || $map4[7][3] == 50 || $map4[7][3] == 51 || $map4[7][3] == 52 || $map4[7][3] == 53 || $map4[7][3] == 54 || $map4[7][3] == 55 || $map4[7][3] == 56) {
                    if ($map4[7][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[7][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[7][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[7][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[7][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[7][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[7][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[7][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[7][0];
                    echo "&y=";
                    echo $map4[7][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[7][0];
                    echo "$echo2";
                    echo $map4[7][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[8][3] == 49 || $map4[8][3] == 50 || $map4[8][3] == 51 || $map4[8][3] == 52 || $map4[8][3] == 53 || $map4[8][3] == 54 || $map4[8][3] == 55 || $map4[8][3] == 56) {
                    if ($map4[8][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[8][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[8][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[8][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[8][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[8][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[8][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[8][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[8][0];
                    echo "&y=";
                    echo $map4[8][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[8][0];
                    echo "$echo2";
                    echo $map4[8][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[9][3] == 49 || $map4[9][3] == 50 || $map4[9][3] == 51 || $map4[9][3] == 52 || $map4[9][3] == 53 || $map4[9][3] == 54 || $map4[9][3] == 55 || $map4[9][3] == 56) {
                    if ($map4[9][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[9][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[9][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[9][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[9][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[9][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[9][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[9][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[9][0];
                    echo "&y=";
                    echo $map4[9][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[9][0];
                    echo "$echo2";
                    echo $map4[9][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[10][3] == 49 || $map4[10][3] == 50 || $map4[10][3] == 51 || $map4[10][3] == 52 || $map4[10][3] == 53 || $map4[10][3] == 54 || $map4[10][3] == 55 || $map4[10][3] == 56) {
                    if ($map4[10][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[10][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[10][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[10][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[10][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[10][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[10][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[10][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[10][0];
                    echo "&y=";
                    echo $map4[10][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[10][0];
                    echo "$echo2";
                    echo $map4[10][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[11][3] == 49 || $map4[11][3] == 50 || $map4[11][3] == 51 || $map4[11][3] == 52 || $map4[11][3] == 53 || $map4[11][3] == 54 || $map4[11][3] == 55 || $map4[11][3] == 56) {
                    if ($map4[11][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[11][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[11][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[11][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[11][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[11][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[11][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[11][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[11][0];
                    echo "&y=";
                    echo $map4[11][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[11][0];
                    echo "$echo2";
                    echo $map4[11][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[12][3] == 49 || $map4[12][3] == 50 || $map4[12][3] == 51 || $map4[12][3] == 52 || $map4[12][3] == 53 || $map4[12][3] == 54 || $map4[12][3] == 55 || $map4[12][3] == 56) {
                    if ($map4[12][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[12][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[12][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[12][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[12][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[12][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[12][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[12][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[12][0];
                    echo "&y=";
                    echo $map4[12][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[12][0];
                    echo "$echo2";
                    echo $map4[12][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[13][3] == 49 || $map4[13][3] == 50 || $map4[13][3] == 51 || $map4[13][3] == 52 || $map4[13][3] == 53 || $map4[13][3] == 54 || $map4[13][3] == 55 || $map4[13][3] == 56) {
                    if ($map4[13][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[13][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[13][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[13][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[13][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[13][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[13][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[13][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[13][0];
                    echo "&y=";
                    echo $map4[13][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[13][0];
                    echo "$echo2";
                    echo $map4[13][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[14][3] == 49 || $map4[14][3] == 50 || $map4[14][3] == 51 || $map4[14][3] == 52 || $map4[14][3] == 53 || $map4[14][3] == 54 || $map4[14][3] == 55 || $map4[14][3] == 56) {
                    if ($map4[14][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[14][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[14][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[14][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[14][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[14][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[14][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[14][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[14][0];
                    echo "&y=";
                    echo $map4[14][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[14][0];
                    echo "$echo2";
                    echo $map4[14][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map4[15][3] == 49 || $map4[15][3] == 50 || $map4[15][3] == 51 || $map4[15][3] == 52 || $map4[15][3] == 53 || $map4[15][3] == 54 || $map4[15][3] == 55 || $map4[15][3] == 56) {
                    if ($map4[15][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map4[15][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map4[15][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map4[15][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map4[15][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map4[15][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map4[15][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map4[15][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map4[15][0];
                    echo "&y=";
                    echo $map4[15][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map4[15][0];
                    echo "$echo2";
                    echo $map4[15][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
        }


        foreach ($sfive as $row5) {
            $row5 = trim($row5, '>');
            $row5 = explode(">", $row5);
            $map5[] = $row5;
        }
        switch ($server) {
            case '5':
                echo "Server5:";

                if ($map5[0][3] == 0 || $map5[0][3] == 49 || $map5[0][3] == 50 || $map5[0][3] == 51 || $map5[0][3] == 52 || $map5[0][3] == 53 || $map5[0][3] == 54 || $map5[0][3] == 55 || $map5[0][3] == 56) {
                    if ($map5[0][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[0][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[0][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[0][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[0][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[0][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[0][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[0][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[0][0];
                    echo "&y=";
                    echo $map5[0][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[0][0];
                    echo "$echo2";
                    echo $map5[0][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[1][3] == 0 || $map5[1][3] == 49 || $map5[1][3] == 50 || $map5[1][3] == 51 || $map5[1][3] == 52 || $map5[1][3] == 53 || $map5[1][3] == 54 || $map5[1][3] == 55 || $map5[1][3] == 56) {
                    if ($map5[1][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[1][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[1][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[1][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[1][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[1][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[1][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[1][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[1][0];
                    echo "&y=";
                    echo $map5[1][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[1][0];
                    echo "$echo2";
                    echo $map5[1][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[2][3] == 0 || $map5[2][3] == 49 || $map5[2][3] == 50 || $map5[2][3] == 51 || $map5[2][3] == 52 || $map5[2][3] == 53 || $map5[2][3] == 54 || $map5[2][3] == 55 || $map5[2][3] == 56) {
                    if ($map5[2][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[2][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[2][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[2][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[2][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[2][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[2][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[2][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[2][0];
                    echo "&y=";
                    echo $map5[2][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[2][0];
                    echo "$echo2";
                    echo $map5[2][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[3][3] == 0 || $map5[3][3] == 49 || $map5[3][3] == 50 || $map5[3][3] == 51 || $map5[3][3] == 52 || $map5[3][3] == 53 || $map5[3][3] == 54 || $map5[3][3] == 55 || $map5[3][3] == 56) {
                    if ($map5[3][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[3][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[3][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[3][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[3][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[3][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[3][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[3][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[3][0];
                    echo "&y=";
                    echo $map5[3][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[3][0];
                    echo "$echo2";
                    echo $map5[3][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[4][3] == 0 || $map5[4][3] == 49 || $map5[4][3] == 50 || $map5[4][3] == 51 || $map5[4][3] == 52 || $map5[4][3] == 53 || $map5[4][3] == 54 || $map5[4][3] == 55 || $map5[4][3] == 56) {
                    if ($map5[4][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[4][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[4][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[4][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[4][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[4][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[4][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[4][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[4][0];
                    echo "&y=";
                    echo $map5[4][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[4][0];
                    echo "$echo2";
                    echo $map5[4][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[5][3] == 0 || $map5[5][3] == 49 || $map5[5][3] == 50 || $map5[5][3] == 51 || $map5[5][3] == 52 || $map5[5][3] == 53 || $map5[5][3] == 54 || $map5[5][3] == 55 || $map5[5][3] == 56) {
                    if ($map5[5][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[5][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[5][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[5][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[5][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[5][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[5][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[5][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[5][0];
                    echo "&y=";
                    echo $map5[5][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[5][0];
                    echo "$echo2";
                    echo $map5[5][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[6][3] == 0 || $map5[6][3] == 49 || $map5[6][3] == 50 || $map5[6][3] == 51 || $map5[6][3] == 52 || $map5[6][3] == 53 || $map5[6][3] == 54 || $map5[6][3] == 55 || $map5[6][3] == 56) {
                    if ($map5[6][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[6][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[6][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[6][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[6][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[6][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[6][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[6][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[6][0];
                    echo "&y=";
                    echo $map5[6][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[6][0];
                    echo "$echo2";
                    echo $map5[6][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[7][3] == 0 || $map5[7][3] == 49 || $map5[7][3] == 50 || $map5[7][3] == 51 || $map5[7][3] == 52 || $map5[7][3] == 53 || $map5[7][3] == 54 || $map5[7][3] == 55 || $map5[7][3] == 56) {
                    if ($map5[7][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[7][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[7][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[7][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[7][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[7][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[7][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[7][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[7][0];
                    echo "&y=";
                    echo $map5[7][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[7][0];
                    echo "$echo2";
                    echo $map5[7][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[8][3] == 0 || $map5[8][3] == 49 || $map5[8][3] == 50 || $map5[8][3] == 51 || $map5[8][3] == 52 || $map5[8][3] == 53 || $map5[8][3] == 54 || $map5[8][3] == 55 || $map5[8][3] == 56) {
                    if ($map5[8][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[8][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[8][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[8][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[8][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[8][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[8][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[8][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[8][0];
                    echo "&y=";
                    echo $map5[8][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[8][0];
                    echo "$echo2";
                    echo $map5[8][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[9][3] == 0 || $map5[9][3] == 49 || $map5[9][3] == 50 || $map5[9][3] == 51 || $map5[9][3] == 52 || $map5[9][3] == 53 || $map5[9][3] == 54 || $map5[9][3] == 55 || $map5[9][3] == 56) {
                    if ($map5[9][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[9][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[9][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[9][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[9][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[9][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[9][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[9][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[9][0];
                    echo "&y=";
                    echo $map5[9][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[9][0];
                    echo "$echo2";
                    echo $map5[9][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[10][3] == 0 || $map5[10][3] == 49 || $map5[10][3] == 50 || $map5[10][3] == 51 || $map5[10][3] == 52 || $map5[10][3] == 53 || $map5[10][3] == 54 || $map5[10][3] == 55 || $map5[10][3] == 56) {
                    if ($map5[10][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[10][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[10][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[10][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[10][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[10][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[10][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[10][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[10][0];
                    echo "&y=";
                    echo $map5[10][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[10][0];
                    echo "$echo2";
                    echo $map5[10][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[11][3] == 0 || $map5[11][3] == 49 || $map5[11][3] == 50 || $map5[11][3] == 51 || $map5[11][3] == 52 || $map5[11][3] == 53 || $map5[11][3] == 54 || $map5[11][3] == 55 || $map5[11][3] == 56) {
                    if ($map5[11][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[11][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[11][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[11][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[11][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[11][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[11][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[11][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[11][0];
                    echo "&y=";
                    echo $map5[11][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[11][0];
                    echo "$echo2";
                    echo $map5[11][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[12][3] == 0 || $map5[12][3] == 49 || $map5[12][3] == 50 || $map5[12][3] == 51 || $map5[12][3] == 52 || $map5[12][3] == 53 || $map5[12][3] == 54 || $map5[12][3] == 55 || $map5[12][3] == 56) {
                    if ($map5[12][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[12][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[12][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[12][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[12][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[12][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[12][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[12][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[12][0];
                    echo "&y=";
                    echo $map5[12][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[12][0];
                    echo "$echo2";
                    echo $map5[12][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[13][3] == 0 || $map5[13][3] == 49 || $map5[13][3] == 50 || $map5[13][3] == 51 || $map5[13][3] == 52 || $map5[13][3] == 53 || $map5[13][3] == 54 || $map5[13][3] == 55 || $map5[13][3] == 56) {
                    if ($map5[13][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[13][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[13][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[13][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[13][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[13][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[13][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[13][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[13][0];
                    echo "&y=";
                    echo $map5[13][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[13][0];
                    echo "$echo2";
                    echo $map5[13][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[14][3] == 0 || $map5[14][3] == 49 || $map5[14][3] == 50 || $map5[14][3] == 51 || $map5[14][3] == 52 || $map5[14][3] == 53 || $map5[14][3] == 54 || $map5[14][3] == 55 || $map5[14][3] == 56) {
                    if ($map5[14][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[14][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[14][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[14][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[14][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[14][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[14][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[14][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[14][0];
                    echo "&y=";
                    echo $map5[14][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[14][0];
                    echo "$echo2";
                    echo $map5[14][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
                if ($map5[15][3] == 00 || $map5[15][3] == 49 || $map5[15][3] == 50 || $map5[15][3] == 51 || $map5[15][3] == 52 || $map5[15][3] == 53 || $map5[15][3] == 54 || $map5[15][3] == 55 || $map5[15][3] == 56) {
                    if ($map5[15][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map5[15][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map5[15][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map5[15][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map5[15][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map5[15][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map5[15][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map5[15][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map5[15][0];
                    echo "&y=";
                    echo $map5[15][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map5[15][0];
                    echo "$echo2";
                    echo $map5[15][1];
                    echo "$echo3";
                    echo "$cr";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                    $art = $end;
                }
        }


        foreach ($ssix as $row6) {
            $row6 = trim($row6, '>');
            $row6 = explode(">", $row6);
            $map6[] = $row6;
        }
        switch ($server) {
            case '6':
                echo "Server6:";
                if ($map6[0][3] == 49 || $map6[0][3] == 50 || $map6[0][3] == 51 || $map6[0][3] == 52 || $map6[0][3] == 53 || $map6[0][3] == 54 || $map6[0][3] == 55 || $map6[0][3] == 56) {
                    if ($map6[0][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[0][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[0][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[0][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[0][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[0][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[0][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[0][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[0][0];
                    echo "&y=";
                    echo $map6[0][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[0][0];
                    echo "$echo2";
                    echo $map6[0][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[1][3] == 49 || $map6[1][3] == 50 || $map6[1][3] == 51 || $map6[1][3] == 52 || $map6[1][3] == 53 || $map6[1][3] == 54 || $map6[1][3] == 55 || $map6[1][3] == 56) {
                    if ($map6[1][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[1][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[1][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[1][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[1][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[1][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[1][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[1][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[1][0];
                    echo "&y=";
                    echo $map6[1][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[1][0];
                    echo "$echo2";
                    echo $map6[1][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[2][3] == 49 || $map6[2][3] == 50 || $map6[2][3] == 51 || $map6[2][3] == 52 || $map6[2][3] == 53 || $map6[2][3] == 54 || $map6[2][3] == 55 || $map6[2][3] == 56) {
                    if ($map6[2][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[2][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[2][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[2][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[2][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[2][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[2][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[2][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[2][0];
                    echo "&y=";
                    echo $map6[2][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[2][0];
                    echo "$echo2";
                    echo $map6[2][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[3][3] == 49 || $map6[3][3] == 50 || $map6[3][3] == 51 || $map6[3][3] == 52 || $map6[3][3] == 53 || $map6[3][3] == 54 || $map6[3][3] == 55 || $map6[3][3] == 56) {
                    if ($map6[3][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[3][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[3][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[3][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[3][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[3][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[3][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[3][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[3][0];
                    echo "&y=";
                    echo $map6[3][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[3][0];
                    echo "$echo2";
                    echo $map6[3][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[4][3] == 49 || $map6[4][3] == 50 || $map6[4][3] == 51 || $map6[4][3] == 52 || $map6[4][3] == 53 || $map6[4][3] == 54 || $map6[4][3] == 55 || $map6[4][3] == 56) {
                    if ($map6[4][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[4][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[4][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[4][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[4][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[4][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[4][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[4][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[4][0];
                    echo "&y=";
                    echo $map6[4][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[4][0];
                    echo "$echo2";
                    echo $map6[4][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[5][3] == 49 || $map6[5][3] == 50 || $map6[5][3] == 51 || $map6[5][3] == 52 || $map6[5][3] == 53 || $map6[5][3] == 54 || $map6[5][3] == 55 || $map6[5][3] == 56) {
                    if ($map6[5][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[5][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[5][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[5][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[5][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[5][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[5][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[5][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[5][0];
                    echo "&y=";
                    echo $map6[5][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[5][0];
                    echo "$echo2";
                    echo $map6[5][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[6][3] == 49 || $map6[6][3] == 50 || $map6[6][3] == 51 || $map6[6][3] == 52 || $map6[6][3] == 53 || $map6[6][3] == 54 || $map6[6][3] == 55 || $map6[6][3] == 56) {
                    if ($map6[6][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[6][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[6][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[6][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[6][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[6][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[6][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[6][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[6][0];
                    echo "&y=";
                    echo $map6[6][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[6][0];
                    echo "$echo2";
                    echo $map6[6][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[7][3] == 49 || $map6[7][3] == 50 || $map6[7][3] == 51 || $map6[7][3] == 52 || $map6[7][3] == 53 || $map6[7][3] == 54 || $map6[7][3] == 55 || $map6[7][3] == 56) {
                    if ($map6[7][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[7][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[7][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[7][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[7][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[7][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[7][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[7][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[7][0];
                    echo "&y=";
                    echo $map6[7][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[7][0];
                    echo "$echo2";
                    echo $map6[7][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[8][3] == 49 || $map6[8][3] == 50 || $map6[8][3] == 51 || $map6[8][3] == 52 || $map6[8][3] == 53 || $map6[8][3] == 54 || $map6[8][3] == 55 || $map6[8][3] == 56) {
                    if ($map6[8][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[8][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[8][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[8][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[8][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[8][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[8][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[8][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[8][0];
                    echo "&y=";
                    echo $map6[8][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[8][0];
                    echo "$echo2";
                    echo $map6[8][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[9][3] == 49 || $map6[9][3] == 50 || $map6[9][3] == 51 || $map6[9][3] == 52 || $map6[9][3] == 53 || $map6[9][3] == 54 || $map6[9][3] == 55 || $map6[9][3] == 56) {
                    if ($map6[9][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[9][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[9][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[9][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[9][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[9][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[9][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[9][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[9][0];
                    echo "&y=";
                    echo $map6[9][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[9][0];
                    echo "$echo2";
                    echo $map6[9][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[10][3] == 49 || $map6[10][3] == 50 || $map6[10][3] == 51 || $map6[10][3] == 52 || $map6[10][3] == 53 || $map6[10][3] == 54 || $map6[10][3] == 55 || $map6[10][3] == 56) {
                    if ($map6[10][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[10][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[10][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[10][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[10][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[10][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[10][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[10][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[10][0];
                    echo "&y=";
                    echo $map6[10][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[10][0];
                    echo "$echo2";
                    echo $map6[10][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[11][3] == 49 || $map6[11][3] == 50 || $map6[11][3] == 51 || $map6[11][3] == 52 || $map6[11][3] == 53 || $map6[11][3] == 54 || $map6[11][3] == 55 || $map6[11][3] == 56) {
                    if ($map6[11][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[11][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[11][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[11][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[11][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[11][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[11][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[11][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[11][0];
                    echo "&y=";
                    echo $map6[11][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[11][0];
                    echo "$echo2";
                    echo $map6[11][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[12][3] == 49 || $map6[12][3] == 50 || $map6[12][3] == 51 || $map6[12][3] == 52 || $map6[12][3] == 53 || $map6[12][3] == 54 || $map6[12][3] == 55 || $map6[12][3] == 56) {
                    if ($map6[12][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[12][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[12][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[12][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[12][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[12][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[12][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[12][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[12][0];
                    echo "&y=";
                    echo $map6[12][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[12][0];
                    echo "$echo2";
                    echo $map6[12][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[13][3] == 49 || $map6[13][3] == 50 || $map6[13][3] == 51 || $map6[13][3] == 52 || $map6[13][3] == 53 || $map6[13][3] == 54 || $map6[13][3] == 55 || $map6[13][3] == 56) {
                    if ($map6[13][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[13][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[13][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[13][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[13][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[13][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[13][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[13][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[13][0];
                    echo "&y=";
                    echo $map6[13][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[13][0];
                    echo "$echo2";
                    echo $map6[13][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[14][3] == 49 || $map6[14][3] == 50 || $map6[14][3] == 51 || $map6[14][3] == 52 || $map6[14][3] == 53 || $map6[14][3] == 54 || $map6[14][3] == 55 || $map6[14][3] == 56) {
                    if ($map6[14][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[14][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[14][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[14][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[14][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[14][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[14][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[14][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[14][0];
                    echo "&y=";
                    echo $map6[14][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[14][0];
                    echo "$echo2";
                    echo $map6[14][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map6[15][3] == 49 || $map6[15][3] == 50 || $map6[15][3] == 51 || $map6[15][3] == 52 || $map6[15][3] == 53 || $map6[15][3] == 54 || $map6[15][3] == 55 || $map6[15][3] == 56) {
                    if ($map6[15][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map6[15][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map6[15][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map6[15][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map6[15][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map6[15][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map6[15][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map6[15][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map6[15][0];
                    echo "&y=";
                    echo $map6[15][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map6[15][0];
                    echo "$echo2";
                    echo $map6[15][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
        }


        foreach ($sseven as $row7) {
            $row7 = trim($row7, '>');
            $row7 = explode(">", $row7);
            $map7[] = $row7;
        }
        switch ($server) {
            case '7':
                echo "Server7:";

                if ($map7[0][3] == 49 || $map7[0][3] == 50 || $map7[0][3] == 51 || $map7[0][3] == 52 || $map7[0][3] == 53 || $map7[0][3] == 54 || $map7[0][3] == 55 || $map7[0][3] == 56) {
                    if ($map7[0][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[0][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[0][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[0][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[0][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[0][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[0][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[0][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[0][0];
                    echo "&y=";
                    echo $map7[0][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[0][0];
                    echo "$echo2";
                    echo $map7[0][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[1][3] == 49 || $map7[1][3] == 50 || $map7[1][3] == 51 || $map7[1][3] == 52 || $map7[1][3] == 53 || $map7[1][3] == 54 || $map7[1][3] == 55 || $map7[1][3] == 56) {
                    if ($map7[1][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[1][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[1][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[1][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[1][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[1][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[1][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[1][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[1][0];
                    echo "&y=";
                    echo $map7[1][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[1][0];
                    echo "$echo2";
                    echo $map7[1][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[2][3] == 49 || $map7[2][3] == 50 || $map7[2][3] == 51 || $map7[2][3] == 52 || $map7[2][3] == 53 || $map7[2][3] == 54 || $map7[2][3] == 55 || $map7[2][3] == 56) {
                    if ($map7[2][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[2][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[2][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[2][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[2][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[2][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[2][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[2][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[2][0];
                    echo "&y=";
                    echo $map7[2][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[2][0];
                    echo "$echo2";
                    echo $map7[2][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[3][3] == 49 || $map7[3][3] == 50 || $map7[3][3] == 51 || $map7[3][3] == 52 || $map7[3][3] == 53 || $map7[3][3] == 54 || $map7[3][3] == 55 || $map7[3][3] == 56) {
                    if ($map7[3][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[3][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[3][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[3][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[3][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[3][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[3][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[3][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[3][0];
                    echo "&y=";
                    echo $map7[3][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[3][0];
                    echo "$echo2";
                    echo $map7[3][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[4][3] == 49 || $map7[4][3] == 50 || $map7[4][3] == 51 || $map7[4][3] == 52 || $map7[4][3] == 53 || $map7[4][3] == 54 || $map7[4][3] == 55 || $map7[4][3] == 56) {
                    if ($map7[4][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[4][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[4][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[4][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[4][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[4][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[4][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[4][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[4][0];
                    echo "&y=";
                    echo $map7[4][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[4][0];
                    echo "$echo2";
                    echo $map7[4][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[5][3] == 49 || $map7[5][3] == 50 || $map7[5][3] == 51 || $map7[5][3] == 52 || $map7[5][3] == 53 || $map7[5][3] == 54 || $map7[5][3] == 55 || $map7[5][3] == 56) {
                    if ($map7[5][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[5][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[5][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[5][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[5][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[5][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[5][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[5][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[5][0];
                    echo "&y=";
                    echo $map7[5][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[5][0];
                    echo "$echo2";
                    echo $map7[5][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[6][3] == 49 || $map7[6][3] == 50 || $map7[6][3] == 51 || $map7[6][3] == 52 || $map7[6][3] == 53 || $map7[6][3] == 54 || $map7[6][3] == 55 || $map7[6][3] == 56) {
                    if ($map7[6][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[6][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[6][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[6][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[6][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[6][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[6][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[6][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[6][0];
                    echo "&y=";
                    echo $map7[6][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[6][0];
                    echo "$echo2";
                    echo $map7[6][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[7][3] == 49 || $map7[7][3] == 50 || $map7[7][3] == 51 || $map7[7][3] == 52 || $map7[7][3] == 53 || $map7[7][3] == 54 || $map7[7][3] == 55 || $map7[7][3] == 56) {
                    if ($map7[7][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[7][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[7][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[7][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[7][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[7][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[7][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[7][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[7][0];
                    echo "&y=";
                    echo $map7[7][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[7][0];
                    echo "$echo2";
                    echo $map7[7][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[8][3] == 49 || $map7[8][3] == 50 || $map7[8][3] == 51 || $map7[8][3] == 52 || $map7[8][3] == 53 || $map7[8][3] == 54 || $map7[8][3] == 55 || $map7[8][3] == 56) {
                    if ($map7[8][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[8][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[8][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[8][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[8][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[8][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[8][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[8][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[8][0];
                    echo "&y=";
                    echo $map7[8][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[8][0];
                    echo "$echo2";
                    echo $map7[8][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[9][3] == 49 || $map7[9][3] == 50 || $map7[9][3] == 51 || $map7[9][3] == 52 || $map7[9][3] == 53 || $map7[9][3] == 54 || $map7[9][3] == 55 || $map7[9][3] == 56) {
                    if ($map7[9][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[9][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[9][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[9][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[9][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[9][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[9][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[9][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[9][0];
                    echo "&y=";
                    echo $map7[9][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[9][0];
                    echo "$echo2";
                    echo $map7[9][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[10][3] == 49 || $map7[10][3] == 50 || $map7[10][3] == 51 || $map7[10][3] == 52 || $map7[10][3] == 53 || $map7[10][3] == 54 || $map7[10][3] == 55 || $map7[10][3] == 56) {
                    if ($map7[10][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[10][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[10][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[10][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[10][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[10][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[10][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[10][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[10][0];
                    echo "&y=";
                    echo $map7[10][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[10][0];
                    echo "$echo2";
                    echo $map7[10][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[11][3] == 49 || $map7[11][3] == 50 || $map7[11][3] == 51 || $map7[11][3] == 52 || $map7[11][3] == 53 || $map7[11][3] == 54 || $map7[11][3] == 55 || $map7[11][3] == 56) {
                    if ($map7[11][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[11][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[11][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[11][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[11][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[11][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[11][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[11][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[11][0];
                    echo "&y=";
                    echo $map7[11][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[11][0];
                    echo "$echo2";
                    echo $map7[11][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[12][3] == 49 || $map7[12][3] == 50 || $map7[12][3] == 51 || $map7[12][3] == 52 || $map7[12][3] == 53 || $map7[12][3] == 54 || $map7[12][3] == 55 || $map7[12][3] == 56) {
                    if ($map7[12][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[12][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[12][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[12][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[12][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[12][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[12][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[12][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[12][0];
                    echo "&y=";
                    echo $map7[12][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[12][0];
                    echo "$echo2";
                    echo $map7[12][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[13][3] == 49 || $map7[13][3] == 50 || $map7[13][3] == 51 || $map7[13][3] == 52 || $map7[13][3] == 53 || $map7[13][3] == 54 || $map7[13][3] == 55 || $map7[13][3] == 56) {
                    if ($map7[13][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[13][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[13][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[13][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[13][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[13][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[13][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[13][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[13][0];
                    echo "&y=";
                    echo $map7[13][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[13][0];
                    echo "$echo2";
                    echo $map7[13][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[14][3] == 49 || $map7[14][3] == 50 || $map7[14][3] == 51 || $map7[14][3] == 52 || $map7[14][3] == 53 || $map7[14][3] == 54 || $map7[14][3] == 55 || $map7[14][3] == 56) {
                    if ($map7[14][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[14][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[14][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[14][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[14][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[14][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[14][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[14][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[14][0];
                    echo "&y=";
                    echo $map7[14][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[14][0];
                    echo "$echo2";
                    echo $map7[14][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
                if ($map7[15][3] == 49 || $map7[15][3] == 50 || $map7[15][3] == 51 || $map7[15][3] == 52 || $map7[15][3] == 53 || $map7[15][3] == 54 || $map7[15][3] == 55 || $map7[15][3] == 56) {
                    if ($map7[15][3] == 49) {
                        $art = $echone1;
                    }
                    if ($map7[15][3] == 50) {
                        $art = $echone2;
                    }
                    if ($map7[15][3] == 51) {
                        $art = $echone3;
                    }
                    if ($map7[15][3] == 52) {
                        $art = $echone4;
                    }
                    if ($map7[15][3] == 53) {
                        $art = $echone5;
                    }
                    if ($map7[15][3] == 54) {
                        $art = $echone6;
                    }
                    if ($map7[15][3] == 55) {
                        $art = $echone7;
                    }
                    if ($map7[15][3] == 56) {
                        $art = $echone8;
                    }
                    echo "<a href='https://www.panhradu.cz/main.aspx?x=";
                    echo $map7[15][0];
                    echo "&y=";
                    echo $map7[15][1];
                    echo "'>";
                    echo "$echo1";
                    echo $map7[15][0];
                    echo "$echo2";
                    echo $map7[15][1];
                    echo "$echo3";
                    echo "$art";
                    echo "$echo4";
                    echo "</a>";
                }
        }
    }
    ?>
    <br>
    <p><a id="c" href="http://phoenix.web-hoster.cz/">PhoenixKlan ©.</a></p>
</form>
</body>
</html>
