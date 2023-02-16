<?php
function showInformation() {
    echo '<div id="container" style="height: 100vh">';
    echo '<h1>Information</h1>';
    echo '<ul>';
    echo '  <li style="font-size: 20px; font-weight: bold; "> Datum/klockslag: ' . '</li>' . '<p style="font-size: 15px;">' . date('Y-m-d H:i:s'). '</p>';
    echo (date('l') == 'Friday') ? '  - Äntligen fredag!' : '';
    echo '  <li style="font-size: 20px; font-weight: bold; ">Din IP-adress: ' .'</li>' . '<p style="font-size: 15px;">' . $_SERVER['REMOTE_ADDR'] . '</p>';
    echo '  <li style="font-size: 20px; font-weight: bold; ">Sökväg/filnamn: '. '</li>' . '<p style="font-size: 15px;">' .  $_SERVER['PHP_SELF'] . '</p>';
    echo '  <li style="font-size: 20px; font-weight: bold; ">';
    echo '    User agent-sträng: ' . '</li>' . '<p style="font-size: 15px;">' .  $_SERVER['HTTP_USER_AGENT'] . '</p>';
    echo '</ul>';
    echo '</div>';
}

showInformation();
?>
