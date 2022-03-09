<?php
	class view extends config{
		public function viewData(){
			$con =$this->con();
			$sql = "SELECT * FROM `tbl_midterm` WHERE `status` = 'PENDING'";
			$data = $con->prepare($sql);
			$data->execute();
			$result = $data->fetchAll(PDO::FETCH_ASSOC);
            echo "<h3 class = 'mb-3'> Pending for Approval</h3>";
            echo "<table class = 'table table-dark table-striped table-sm'>";
            echo "<thead>
            	<tr>
            		<th>Name</th>
	            	<th>Comment</th>
	            	<th>Action</th>
            	</tr>
	        		</thead></tbody>";
	        foreach ($result as $data) {
	        	echo "<tr>";
	        	echo "<td>$data[username]</td>";
	        	echo "<td>$data[comment]</td>";
	        	echo "<td>
	        			<a class = 'btn btn-info btn-sm' href = 'index.php?edit=$data[id]'>Approved Testimonies</a>
	        			<a class = 'btn btn-danger btn-sm' href = 'index.php?delete=$data[id]'>Delete Comments</a>
	        		</td>";
			   	echo "</tr>";
	        }
	        echo "</tbody></thead>";
	    }
	    public function viewApprovedData(){
			$con = $this->con();
			$sql = "SELECT * FROM `tbl_midterm` WHERE `status` = 'APPROVED'";
			$data = $con->prepare($sql);
			$data->execute();
			$result = $data->fetchAll(PDO::FETCH_ASSOC);
            echo "<h3 class = 'mb-3'> Approved Testimonies</h3>";
            echo "<table class = 'table table-dark table-striped table-sm'>";
            echo "<thead>
            	<tr>
            		<th>Name</th>
	            	<th>Comment</th>
	            	<th>Date Approved</th>
            	</tr>
	        		</thead></tbody>";
	        foreach ($result as $data){
	        	echo "<tr>"; 
	        	echo "<td>$data[username]</td>";
	        	echo "<td>$data[comment]</td>";
	        	echo "<td>$data[date_added]</td>";
			   	echo "</tr>";
	        }
	        echo "</tbody></thead>";
	    }
	 }
?>
         