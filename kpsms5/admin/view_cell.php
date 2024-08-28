<?php
include ('../admin/header.php');
include ('../admin/navbar.php');
include("../admin/inc/adminfetch.php");
if(empty($_SESSION['admin-username']))
    {
      header("Location: adminlogin.php");
    }

?>

	<!-- CONTENT -->
	<section id="content">

		<main>
			
			<div class="table-data">
				<div class="order">
                <div class="head">
						<h3>List of Cells</h3>
						<span><i class='bx bx-search' ></i></span>
						<span><i class='bx bx-filter' ></i></span>
                <a href="addcell.php" class="btn-download">
					<span class="icon"><i class='bx bxs-cloud-download' ></i></span>
					<span class="text">+ Add cell</span>
				</a>
					</div>
					<table>
						<thead>
							<tr>
								<th>#</th>
								<th>Date Created</th>
								<th>Prison</th>
                                <th>Name</th>
                                <th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<!-- <tr>
								<td>
									<img src="img/people.png" alt="Image">
									<span class="name">John Doe</span>
								</td>
								<td>29-10-2021</td>
								<td><span class="badge completed">Completed</span></td>
							</tr> -->
            <!-- Inmate records will be dynamically added here -->
            <?php
            //linking with the db
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "PMS_db";

            //create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            //check connection
            if ($conn->connect_error) {
                die("Connection failed". $conn->connect_error);
            }

            //reads all rows drom db
            $sql = "SELECT * FROM cell_list";
            $result = $conn->query($sql);

            //check if the above is correctly executed
            if( !$result) {
                die("Invalid querry". $conn->error);
             }


             //read data from each row
              while($row = $result->fetch_assoc()) {
                echo"
                <tr>
                <td>$row[id]</td>
                <td>$row[date_created]</td>
                <td>$row[prison_id]</td>
                <td>$row[name]</td>
                <td>$row[status]</td>
                <td>$row[delete_flag]</td>               
                </tr>";
                 }
                 ?>
                 </tbody>
					</table>
				</div>
			</div>
		</main>
	</section>
	<!-- CONTENT -->


	<script src="script.js"></script>