<?php
	class insert extends config{
		public $task;
		public $name;

		public function __construct($task, $name){
			$this->task = $task;
			$this->name = $name;
		}

		public function insertTask(){
			$con = $this->con();
			$sql = "INSERT INTO `tbl_midterm`(`comment`, `username`) VALUES ('$this->task', '$this->name')";
			$data = $con->prepare($sql);
			if($data->execute()){
				return true;
			}
			else{
				return false;
			}
		}
	}

?>