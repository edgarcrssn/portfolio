<?php
require_once('PDO.php');

$result = $db->query('SELECT *, DATE_FORMAT(releaseDate, "%d/%m/%Y") AS releaseDateFr FROM portfolio ORDER BY releaseDate DESC');

if(isset($_POST['apply']))
{
    if($_POST['select'] == "default" OR $_POST['select'] == "recents")
    {
        if(isset($_POST['maquettage']) && isset($_POST['developpement']))
        {
            $result = $db->query('SELECT *, DATE_FORMAT(releaseDate, "%d/%m/%Y") AS releaseDateFr FROM portfolio WHERE maquettage="1" AND developpement="1" ORDER BY releaseDate DESC');
        }
        elseif(isset($_POST['maquettage']))
        {
            $result = $db->query('SELECT *, DATE_FORMAT(releaseDate, "%d/%m/%Y") AS releaseDateFr FROM portfolio WHERE maquettage="1" ORDER BY releaseDate DESC');
        }
        elseif(isset($_POST['developpement']))
        {
            $result = $db->query('SELECT *, DATE_FORMAT(releaseDate, "%d/%m/%Y") AS releaseDateFr FROM portfolio WHERE developpement="1" ORDER BY releaseDate DESC');
        }
    }
    elseif($_POST['select'] == "anciens")
    {
        $result = $db->query('SELECT *, DATE_FORMAT(releaseDate, "%d/%m/%Y") AS releaseDateFr FROM portfolio ORDER BY releaseDate');

        if(isset($_POST['maquettage']) && isset($_POST['developpement']))
        {
            $result = $db->query('SELECT *, DATE_FORMAT(releaseDate, "%d/%m/%Y") AS releaseDateFr FROM portfolio WHERE maquettage="1" AND developpement="1" ORDER BY releaseDate');
        }
        elseif(isset($_POST['maquettage']))
        {
            $result = $db->query('SELECT *, DATE_FORMAT(releaseDate, "%d/%m/%Y") AS releaseDateFr FROM portfolio WHERE maquettage="1" ORDER BY releaseDate');
        }
        elseif(isset($_POST['developpement']))
        {
            $result = $db->query('SELECT *, DATE_FORMAT(releaseDate, "%d/%m/%Y") AS releaseDateFr FROM portfolio WHERE developpement="1" ORDER BY releaseDate');
        }
    }
}