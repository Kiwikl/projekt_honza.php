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

    // Seznam serverů, na které se může uživatel zeptat
    $servers = [3, 4, 5, 6, 7];

    // Seznam zbraní, o které se zajímáme + převodní tabulka z jejich ID na URL obrázku
    $things = [
        49 => 'https://www.panhradu.cz/i/ar/ne1.jpg', //plášť
        50 => 'https://www.panhradu.cz/i/ar/ne2.jpg', //helma
        51 => 'https://www.panhradu.cz/i/ar/ne3.jpg', //meč
        52 => 'https://www.panhradu.cz/i/ar/ne4.jpg', //brnění
        53 => 'https://www.panhradu.cz/i/ar/ne5.jpg', //amulet
        54 => 'https://www.panhradu.cz/i/ar/ne6.jpg', //štít
        55 => 'https://www.panhradu.cz/i/ar/ne7.jpg', //kuše
        56 => 'https://www.panhradu.cz/i/ar/ne8.jpg', //holenice
    ];

    // Pokud si žiivatel vyžádal server a zároveň je server v poli $servers
    if (isset($_POST['server']) && in_array((int)$_POST['server'], $servers, true)) {

        // Uložíme si číslo serveru
        $server = $_POST['server'];

        // Vybereme si URL, kterou chceme načíst
        $url = 'https://www.panhradu.cz/units_serialize.aspx?id_server=' . urlencode($server);

        // Načteme data ze serveru a připravíme si je do pole
        $source = file_get_contents($url);
        $source = explode("\n", $source);
        array_shift($source);
        $map = [];
        foreach ($source as $row) {
            $row = trim($row, '>');
            $row = explode(">", $row);

            //Ochrana, aby se do mapy dostaly nějaké "zmršené položky", které mají méně jak 4 sloupce
            if(count($row) < 4) {
                // Takový řádek překočíme a neukládáme si ho do $map – mohl by totiž způsobit potíže
                continue;
            }

            $map[] = $row;
        }

        echo "Server " . htmlspecialchars($server) . ":";

        // Projdeme všechny řádky ze stažených dat
        // Do $row se nám ukládá to samé, co jsme předím měli v $map[0], takže pokud budeme chtít $map[0][3] zadáme $row[3]
        foreach ($map as $row) {

            // U aktuální položky si vytáhneme ID zbraně, které daný řádek má (a převedeme jej na integer, aby
            // porovnání bylo spolehlivé
            $unitType = (int)$row[3];

            // Tohle je velká finta – místo abysme tady měli slouhý if($map[0][3] == 49 || $map[0][3] == 50 || ... atd),
            // tak využijeme toho, že jsme si seznam sledovaných zbraní vytáhli do podle $things – takže můžeme jednoduše
            // pomocí isset() zjistit, zda na aktuálním řádku není zbraň toho typu, který nás zajímá
            if(isset($things[$unitType])) {

                // A rovnou využijeme toho, že pole `$things` obsahuje i URL orbázků, takže si jednoduše ID konkrétní
                // zbraně přeložíme na jeho obrázek bez námahy jedním příkazem:
                $thingUrl = $things[$unitType];

                // X a Y si připravímě do proměnných, aby následující kód byl více čitelný
                $x = $row[0];
                $y = $row[1];

                // Parametry do URL VŽDY skládáme pomocí funkce http_build_query() a to kvůli bezpečnosti!
                $url = 'https://www.panhradu.cz/main.aspx?' . http_build_query(['x'=>$x,'y'=>$y]);

                // Všechny data, co dáváme do HTML, ošetříme pomocí htmlspecialchars(), aby nám tudy nemohlo proklouznout
                // nějaký nebezpečný virus do stránky
                echo '<a href="' . htmlspecialchars($url) .  '">';
                echo '<table class="text"><tr><td>[' . htmlspecialchars("{$x},{$y}") . ']</td><td>';
                echo '<img src="' . htmlspecialchars($thingUrl) . '">';
                echo '</td></tr></table>';
                echo '</a><br>';
            }
        }
    }
    ?>
    <br>
    <p><a id="c" href="http://phoenix.web-hoster.cz/">PhoenixKlan ©.</a></p>
</form>
</body>
</html>
