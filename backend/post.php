<?php

include('../database/dbcon.php');
$title=$_POST['title'];
$instruction=$_POST['instruction'];
$dueDate=$_POST['dueDate'];
$date=date("Y-m-d");

if(isset($_FILES['assignment'])){
    $assFile=$_FILES['assignment'];
    $reason="Assiggment is a word document";
    
    $targetFolder="../assigmentdocs/";
    $fileName=$_FILES['assignment']['name'];
    $uploadAss=$targetFolder.basename($_FILES['assignment']['name']);

    mysqli_query($con,"INSERT INTO `subject`(`subject_name`,`sub_assigned`,`ass_doc`,`ass_instruction`,`date_ass`,`date_due`) VALUES('$title','$reason','$fileName','$instruction','$date','$dueDate')");
    move_uploaded_file($_FILES['assignment']['tmp_name'],$uploadAss);

}elseif(isset($_POST['asstext'])){
    $asstext=$_POST['asstext'];
    $reas="assignment was typed";
    mysqli_query($con,"INSERT INTO `subject`(`subject_name`,`sub_assigned`,`ass_doc`,`ass_instruction`,`date_ass`,`date_due`) VALUES('$title','$asstext','$reas','$instruction','$date','$dueDate')");
}
else{
    echo "";
}

?>