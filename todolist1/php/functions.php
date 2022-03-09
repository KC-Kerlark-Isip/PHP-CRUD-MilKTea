<?php
	function insertT(){
		 if(!empty($_GET['items'])){
      $insert = new insert($_GET['items'], $_GET['username']);
      if($insert->insertTask()){
        echo "<div class='col-md-9 alert alert-info alert-dismissible fade show' role='alert'>
          <strong>Congrats!</strong> Your comment will be in approval.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
      }else{
        echo "<div class='col-md-9 alert alert-danger alert-dismissible fade show' role='alert'>
          <strong>Oops!</strong> There is something wrong. Your comment will not be publish. Please try again.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
      }
    } 
  }
	function deleteT(){
		 if(!empty($_GET['delete'])){
      $delete = new delete($_GET['delete']);
      if($delete->deleteTask()){
        echo "<div class='col-md-9 alert alert-warning alert-dismissible fade show' role='alert'>
          <strong>Nice!</strong> Your comment has been deleted successfully.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
      }
      else{
        echo "<div class='col-md-9 alert alert-danger alert-dismissible fade show' role='alert'>
          <strong>Oops!</strong> Your comment will not be deleted for now. Try again later.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
      }
    }
  }
       function editT(){
    if(!empty($_GET['edit'])){
         $edit = new edit($_GET['edit']);
         if($edit->editTask()){
           echo "<div class='col-md-9 alert alert-info alert-dismissible fade show' role='alert'>
          <strong>Congrats!</strong> Your comment has been approved!
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
        }
        else{
          echo "<div class='col-md-9 alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Oops!</strong> That comment will not be approved.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        }
      }
  	}

	function viewTable(){
		$view = new view();
    $view->viewData();
	}
  function viewappTable(){
    $view = new view();
    $view->viewApprovedData();
  }

	function crudfunction(){
    insertT();
    deleteT();
    editT();
	}

?>