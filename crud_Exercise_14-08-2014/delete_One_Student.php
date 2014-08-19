<?php
$student_Id = $_GET["student_Id"];
mysql_connect('localhost','c9shahedruhi','tintin08');
mysql_select_db('c9shahedruhi1');

if(mysql_query("DELETE from students WHERE id=$student_Id"))
{
    if(mysql_query("DELETE from map_students_courses WHERE student_id=$student_Id"))
    {
        header('location: view_All_Students.php?msg=delete');
    }
}

?>
