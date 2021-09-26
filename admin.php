<?php

$tajneHeslo = 'nebelvir';

// Do proměnné nastavíme, zda je uživatel přihlášený (má správnou cookie) - bude tam buď `true` a nebo `false`
$prihlaseny = isset($_COOKIE['login']) && $_COOKIE['login'] === '1';

// Koukneme, zda uživatel neposlal heslo
if (isset($_POST['heslo']) && $_POST['heslo'] === $tajneHeslo) {
    // Uživatel zná heslo – přihlásíme ho
    setcookie('login', '1', time() + 3600);

    // A rovnou nastavíme uživatele jako přihlášeného, aby se mu zbytek stránky vykreslil
    $prihlaseny = true;
}

// Koukneme, zda se uživatel nechce odhlásit
if (isset($_GET['odhlasit']) && $_GET['odhlasit'] === '1') {
    // Uživatel se chce odhlásit - nastavíme cookie na nic a ještě expiraci v minulosti (před hodinou) aby se smazala
    setcookie('login', '', time() - 3600);

    // A rovnou nastavíme uživatele jako odhlášeného, aby se mu vykreslil přihlašovací form
    $prihlaseny = false;
}
?>
<html>
<head>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="http://phoenix.web-hoster.cz/projekt_honza/styly.css">
    <title>Tajná stránka</title>
</head>
<body>
<form method="post" class="cr">
    <h1>Tajná stránka</h1>
    <?php
    if($prihlaseny) {
        ?>
        <p>Toto je tajná stránka, kterou nesmí nikdo vidět</p>

        <p><b><a href="?odhlasit=1">Odhlásit</a></b></p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus finibus, felis quis varius fermentum, neque eros scelerisque eros, sed pharetra arcu sapien id velit. Proin eget urna quis urna ornare porta ac sed mi. Etiam luctus massa sed ligula elementum, eget semper lectus porta. Fusce vel cursus lorem. Duis vulputate odio et nunc posuere, ac auctor magna tincidunt. Donec dignissim elit tortor, nec ultrices magna commodo vitae. Phasellus bibendum, lacus eget iaculis mattis, nibh massa venenatis felis, tincidunt fringilla nisi turpis nec neque.</p>
        <p>Sed augue metus, tristique at nisi ac, tempus molestie neque. Ut interdum in lacus ut suscipit. Vivamus turpis diam, ultrices a faucibus et, condimentum id est. Cras id diam vestibulum, porttitor arcu id, bibendum purus. Aliquam convallis, est vitae vehicula hendrerit, sapien erat iaculis quam, eu sollicitudin augue metus vel orci. Nulla sapien leo, bibendum at accumsan sed, hendrerit in nibh. Suspendisse eu ullamcorper purus. Aliquam nec nunc rhoncus, feugiat orci a, iaculis sem. Donec elementum pharetra eros, id dapibus sapien. Sed efficitur nisi in nisl elementum iaculis. Sed tellus velit, condimentum ut quam nec, maximus tincidunt dolor. Etiam vitae turpis nec ex cursus dictum sit amet eget libero. Proin mattis velit vel lobortis vehicula. Nunc vestibulum, libero et semper mattis, nisl sem varius urna, id posuere nisl risus nec ante. Etiam eget leo lobortis, pulvinar orci eget, consectetur tellus. Aenean a lacus aliquet, vehicula mi a, tincidunt eros.</p>
        <p>Nullam nec gravida erat, et faucibus est. Morbi nec malesuada sapien, in lacinia mi. Aliquam aliquet mi in congue tincidunt. Nullam euismod orci sit amet tristique rutrum. Sed consequat elementum tortor sit amet pulvinar. Cras placerat leo aliquam euismod tincidunt. Nullam cursus, diam sed auctor dapibus, velit justo efficitur lorem, quis facilisis mauris mi at nibh. Donec cursus neque orci, et semper arcu rhoncus eu. Phasellus accumsan sem vestibulum, mollis odio tristique, rhoncus sapien. Nam elementum nisl a lacus bibendum, nec elementum lorem volutpat. Curabitur ullamcorper ultrices cursus. Nunc laoreet, leo eu posuere cursus, ligula orci bibendum odio, a eleifend ligula lorem at sem. Nulla facilisi. Pellentesque pretium leo vitae augue venenatis, sed tristique elit eleifend. Aliquam dictum, nulla nec facilisis sollicitudin, purus augue finibus orci, ut posuere lorem diam eget sem. Aenean interdum, lorem eget egestas sodales, metus ante blandit dui, quis ultrices lectus magna nec ante.</p>
        <p>Morbi facilisis ipsum elit, sed bibendum nisi maximus eu. Integer ut nisi mauris. Donec diam lacus, molestie vitae arcu a, faucibus sollicitudin odio. Nullam dictum, nibh ac maximus placerat, ligula ipsum efficitur ipsum, vel ullamcorper massa elit ac erat. Pellentesque arcu tellus, varius eget nisi a, iaculis accumsan nisi. Vivamus in justo ut felis imperdiet iaculis non quis massa. Curabitur posuere placerat euismod. Nulla efficitur eros in malesuada suscipit. In hac habitasse platea dictumst. Vestibulum mi metus, aliquam in metus vitae, consequat semper ipsum. Vivamus malesuada laoreet tristique. Pellentesque mattis placerat orci sit amet ullamcorper. Maecenas vitae turpis interdum nibh mattis consequat ac in dui.</p>
        <p>Nam at scelerisque urna. Morbi et tempus justo, et rutrum nulla. Suspendisse purus lorem, vehicula eget suscipit non, vehicula a ex. Duis pretium, quam non luctus condimentum, risus neque accumsan sapien, ut laoreet enim nulla sodales justo. Aenean finibus tempus felis non congue. Cras suscipit nunc vitae nisl vestibulum, sit amet sagittis tellus mollis. Quisque blandit enim eget turpis imperdiet, eget tempor dui elementum. Donec vehicula commodo erat in rhoncus. Etiam mattis lectus tristique, efficitur diam at, suscipit sapien.</p>
        <?php
    } else {
        // A kód pro něpřihlášeného
        ?>
        <h2>Nejdřív se musíš přihlásit</h2>
        <form>
            <input type="password" name="heslo" placeholder="heslo">
            <input type="submit" value="Přihlásit">
        </form>
        <?php
    }
    ?>
    <br>
    <p><a id="c" href="http://phoenix.web-hoster.cz/">PhoenixKlan ©.</a></p>
</form>
</body>
</html>
