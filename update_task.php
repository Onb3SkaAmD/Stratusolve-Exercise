<?php
/**
 * This script is to be used to receive a POST with the object information and then either updates, creates or deletes the task object
 */
require('Task.class.php');
// Assignment: Implement this script
$task = new Task();
$task->$TaskId = getUniqueId();
$task->$TaskName = $_POST['InputTaskName'];
$task->$TaskDescription = $_POST['InputTaskDescription'];

if ($('#saveTask').click(function())
{
  $task->Save();
}
if($('#deleteTask').click(function())
{
  $task->Delete();
}
?>
