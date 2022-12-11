<?php 
    require_once("../../models/projectinfomodel.php");
    $project['manager'] = $_REQUEST['manager'];
    $project['projectname'] = $_REQUEST['project'];
    $stat = assignmanager($project);

    if($stat != null){
        echo "Successfully updated";
    }else{
        echo "Null value...";
    }

?>