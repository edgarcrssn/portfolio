<?php
require_once('PDO.php');

$request = $db->query('SELECT COUNT(*) FROM portfolio');
$numberOfProjects = $request->fetch();
$numberOfProjects = strval($numberOfProjects[0]);

if(!empty($_GET['id']))
{
    $id = stripslashes(htmlentities($_GET['id']));

    if(intval($id) >= 1 && intval($id) <= intval($numberOfProjects))
    { 
        $project = $db->prepare('SELECT *, DATE_FORMAT(releaseDate, "%d/%m/%Y") AS releaseDateFr FROM portfolio WHERE id = ?');
        $project->execute(array($id));
        $projectData = $project->fetch();

        $project->closeCursor();


        $nextId = strval(intval($id) + 1);
        $prevId = strval(intval($id) - 1);

        $nextProject = $db->prepare('SELECT title FROM portfolio WHERE id = ?');
        $nextProject->execute(array($nextId));
        $nextProjectData = $nextProject->fetch();

        $nextProject->closeCursor();


        $previousProject = $db->prepare('SELECT title FROM portfolio WHERE id = ?');
        $previousProject->execute(array($prevId));
        $previousProjectData = $previousProject->fetch();

        $previousProject->closeCursor();

        if(intval($id) == 1)
        {
            $isFirstProject = true;
            $isLastProject = false;
        }
        elseif(intval($id) == intval($numberOfProjects))
        {
            $isFirstProject = false;
            $isLastProject = true;
        }
        else{
            $isFirstProject = false;
            $isLastProject = false;
        }
    }
    else
    { 
        header("Location: projet.php?id=$numberOfProjects");
    }
}
else
{ 
    header("Location: projet.php?id=$numberOfProjects");
}