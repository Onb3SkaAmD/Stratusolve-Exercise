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
        $txtFile = file_get_contents("Task_Data.txt");
        $JSONdata = json_decode($txtFile, true);

        //Getting the last ID number in updateTaskList
        $last_item = end($JSONdata);
        $last_item_id = $last_item['TaskId'];

        $JSONdata[] = array('TaskId' => ++$last_item_id);

        return TaskId;

        //return -1; // Placeholder return for now
    }

    protected function LoadFromId($Id = null)
    {
        if ($Id)
        {
            // Assignment: Code to load details here...

        }
        else
        {
          return null;
        }
    }

    public function Save()
    {
        //Assignment: Code to save task here
        $file = 'Task_Data.txt';

        if(isset($_POST['#saveTask']))
        {
          $fh = fopen($file, "a+");
          $string =  $_POST['#InputTaskName'] . '+' . $_POST['#InputTaskDescription'];
          fwrite($fh, $string); //Write html input into Task_Data.txt
          fclose($fh); // Close Task_Data.txt
        }
    }

    public function Delete()
    {
        //Assignment: Code to delete task here
        
    }
}
?>
