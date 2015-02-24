Page générée en : ?.????s (PHP: ??% - SQL: ??%) - Requêtes SQL : ?
<?php
echo '(debug mode : ';
switch (Configure::read('debug')) {
    case 0:
        echo 'none';
        break;
    case 1:
        echo 'active';
        break;
    case 2:
        echo 'advanced';
        break;

    default:
        echo 'unknow';
        break;
}
echo ')';
?>