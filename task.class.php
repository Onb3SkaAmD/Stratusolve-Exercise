<?php
/**
 * This class handles the modification of a task object
 */
class Task
{
    public $TaskId;
    public $TaskName;
    public $TaskDescription;
    protected $TaskDataSource;

    public function __construct($Id = null)
    {
        $this->TaskDataSource = file_get_contents('Task_Data.txt');
        if (strlen($this->TaskDataSource) > 0)
            $this->TaskDataSource = json_decode($this->TaskDataSource); // Should decode to an array of Task objects
        else
            $this->TaskDataSource = array(); // If it does not, then the data source is assumed to be empty and we create an empty array

        if (!$this->TaskDataSource)
            $this->TaskDataSource = array(); // If it does not, then the data source is assumed to be empty and we create an empty array
        if (!$this->LoadFromId($Id))
            $this->Create();
    }
    protected function Create()
     {
        // This function needs to generate a new unique ID for the task
        // Assignment: Generate unique id for the new task
        $this->TaskId = $this->getUniqueId();
        $this->TaskName = 'New Task';
        $this->TaskDescription = 'New Description';
    }
    protected function getUniqueId()
    {
        // Assignment: Code to get new unique ID
        uniqid($TaskId, true);
        //return -1; // Placeholder return for now
    }
    protected function LoadFromId($Id = null)
    {
        if ($Id)
        {
            // Assignment: Code to load details here...
            $task = file_get_contents('Task_Data.txt');
            echo $task;
        }
        else
        {
          return null;
        }
    }

    public function Save()
    {
      $TaskId=$this->getUniqueId();
      $taskName=getElementById('InputTaskName');
      $taskDescription=getElementById('InputTaskDescription');
        //Assignment: Code to save task here
          $file=fopen("Task_Data.txt", "a") or exit("Unable to open file");  //Open text file var fp
          fwrite($file, "TaskId:", $TaskId, "TaskName:", $taskName, "TaskDescription:", $taskDescription ); //Write to text file with name and description
          fclose($file);
        }
    }
    public function Delete()
    {
        //Assignment: Code to delete task here
        $file = fopen("Task_Data.txt", "a") or exit("Unable to open file");
        $t="";

        while(!feof($file))
        {
          $k= fgets($file);
          if ( (preg_match($TaskId, $k)) || ($TaskName, $k)) || (preg_match($TaskDescription, $k)) )
          {

          }
          else
          {
            $t=$t.$k;
          }
          fclose($file);
          $file = fopen("Task_Data.txt", "a") or exit("Unable to open file!");
          fwrite($file,$t);
          fclose($file);
        }
  }
?>
