<?php
include ('header.php');
include ('navbar.php');
include("../kpsms/inc/adminfetch.php");
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
						<h3>List of inmates</h3>
						<span><i class='bx bx-search' ></i></span>
						<span><i class='bx bx-filter' ></i></span>

                <a href="add_inmate.php" class="btn-download">
					<span class="icon"><i class='bx bxs-cloud-download' ></i></span>
					<span class="text">+ Add inmates</span>
				</a>

					</div>
					<table>
						<thead>
							<tr>
								<th>#</th>
								<th>Date Created</th>
								<th>Code</th>
                                <th>Name</th>
                                <!-- <th>Status</th> -->
								<th>Photo</th>
							</tr>
						</thead>
                        <tbody>
            <!-- Inmate records will be dynamically added here -->

            <tr>
                <td><?php echo $inmate_id; ?></td>
                <td><?php echo $date_created; ?></td>
                <td><?php echo $inmate_code; ?></td>
                <td><?php echo $inmate_name; ?></td>
                <td> <?php echo $inmate_photo; ?></td>
            </tr>
        </tbody>
					</table>
				</div>
			</div>
		</main>
	</section>
	<!-- CONTENT -->


	<script src="script.js"></script>