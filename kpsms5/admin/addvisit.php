<?php
include ('header.php');
include ('navbar.php');
include("../kpsms/inc/adminfetch.php");
if(empty($_SESSION['admin-username']))
    {
      header("Location: adminlogin.php");
    }


// if(isset( $_POST["btncreate"]))
// {

//     $username = $_POST['txtusername'];
//     $name = $_POST['txtfullname'];
//     $password = $_POST['txtpassword'];
//     $phone = $_POST['txtphone'];
    
//     $file_type = $_FILES['avatar']['type']; //returns the mimetype
//     $allowed = array("image/jpg", "image/gif","image/jpeg", "image/webp","image/png");
//     if(!in_array($file_type, $allowed)) {
//     $_SESSION['error'] ='Only jpg,jpeg,Webp, gif, and png files are allowed. ';
    
//     // exit();
    
//     }else{
//     $image= addslashes(file_get_contents($_FILES['avatar']['tmp_name']));
//     $image_name= addslashes($_FILES['avatar']['name']);
//     $image_size= getimagesize($_FILES['avatar']['tmp_name']);
//     move_uploaded_file($_FILES["avatar"]["tmp_name"],"../uploadImage/Profile/" . $_FILES["avatar"]["name"]);
//     $location="uploadImage/Profile/" . $_FILES["avatar"]["name"];
    
//     ///check if username already exist
//     $stmt = $dbh->prepare("SELECT * FROM tbl_warden WHERE txtusername=?");
//     $stmt->execute([$username]);
//     $user = $stmt->fetch();
    
//     if ($user) {
//     $_SESSION['error'] ='Username Already Exist in our Database ';
    
//     } else {
//      //Add User details
//     $sql = 'INSERT INTO tbl_warden (txtusername,txtpassword,txtphone,txtfullname,avatar) VALUES(:txtusername,:txtpassword,:txtphone,:txtfullname,:avatar)';
//     $statement = $dbh->prepare($sql);
//     $statement->execute([
//         ':txtusername' => $username,
//         ':txtpassword' => $password,
//       ':txtphone' => $phone,
//         ':txtfullname' => $name,
//         ':avatar' => $location
    
//     ]);
//     if ($statement){
//         $_SESSION['success'] ='User Added Successfully';
//     }else{
//       $_SESSION['error'] ='Problem Adding User';
//     }
//     }
//     }
//     }
// ?>



	<!-- CONTENT -->
    <section id="content">

<main>

    <div class="top">
        <div class="left">
            <h1 class="title">Add visistors</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Add visitors</a>
                </li>
                <li class="arrow-icon"><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a href="view_visitors.php" class="active">BACK</a>
                </li>
            </ul>
         </div>
    </div>

  <div class="top">
	<div class="left">
              <!-- form start -->
        <div class="form">
        <h4 class="form-title">Visitors Details</h4>
        <div class="form-body">
          <form action="" method="post" enctype="multipart/form-data">
				   <div class="form-group">
                    `<label for="name">Visitors Fullname </label>
                    <input type="text" class="form-control" name="txtfullname" id="name" size="77" value="<?php if (isset($_POST['txtfullname']))?><?php echo $_POST['txtfullname']; ?>" placeholder="Enter Fullname">
                  </div>
                  <div class="form-group">
                    <label for="relatio">Relationship </label>
                    <input type="relation" class="form-control" name="relation" id="relation" size="77" value="<?php if (isset($_POST['relation']))?><?php echo $_POST['relation']; ?>" placeholder="Enter Relation">
                  </div>

                </div>
           <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="tel" class="form-control" name="phone" id="phone" size="77" value="<?php if (isset($_POST['phone']))?><?php echo $_POST['phone']; ?>" placeholder="Enter Phone">
                  </div>


                <div class="form-footer">
                  <button type="submit" name="btncreate" class="btn btn-primary">Create User</button>
                </div>
              </div>
              
              </form>
            

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col --><!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)--><!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
	</section>
	<!-- CONTENT -->


	<script src="script.js"></script>
