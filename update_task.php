<?php
/**
 * This script is to be used to receive a POST with the object information and then either updates, creates or deletes the task object
 */
require('Task.class.php');
// Assignment: Implement this script
$fn = "Task_Data.txt";
$file = fopen($fn, "a+");
$TaskId = $_POST['TaskId'];
$taskName  = $_POST['TaskName'];
$taskDescription  = $_POST['TaskDescription'];

if($_POST['#saveTask']) fwrite($file, $_POST['#saveTask']);
fclose($file);
?>
