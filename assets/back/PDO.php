<?php
try
{
    $db = new PDO('mysql:host=localhost;dbname=edgarcresson.fr;charset=utf8', 'root', 'root');
    //$db = new PDO('mysql:host=localhost;dbname=u329875435_dbedgarcresson;charset=utf8', 'u329875435_edgarcrssn', 'w:Z2h!6Kv');

}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}