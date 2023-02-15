<?php
function showInformation() {
    echo '<h1>Information</h1>';
    echo '<ul>';
    echo '  <li>Datum/klockslag: ' . date('Y-m-d H:i:s');
    echo (date('l') == 'Friday') ? '  - Äntligen fredag!' : '';
    echo '  </li>';
    echo '  <li>Din IP-adress: ' . $_SERVER['REMOTE_ADDR'] . '</li>';
    echo '  <li>Sökväg/filnamn: ' . $_SERVER['PHP_SELF'] . '</li>';
    echo '  <li>';
    echo '    User agent-sträng: ' . $_SERVER['HTTP_USER_AGENT'];
    echo '  </li>';
    echo '</ul>';
}

showInformation();
?>
