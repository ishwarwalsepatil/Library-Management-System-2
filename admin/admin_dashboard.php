<?php
	require('functions.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Skroll : Books Hub by MIT WPU</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="admin_dashboard.php" class="nav-link">Dashboard</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
				<div class="dropdown-menu">
					<a href="add_book.php" class="dropdown-item">Add New Book</a>
					<a href="manage_book.php" class="dropdown-item">Manage Books</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
				<div class="dropdown-menu">
					<a href="add_cat.php" class="dropdown-item">Add New Category</a>
					<a href="manage_cat.php" class="dropdown-item">Manage Category</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
				<div class="dropdown-menu">
					<a href="add_author.php" class="dropdown-item">Add New Author</a>
					<a href="manage_author.php" class="dropdown-item">Manage Authors</a>
				</div>
			</li>
			<li class="nav-item">
				<a href="issue_book.php" class="nav-link">Issue Book</a>
			</li>
		</ul>
	</div>
</nav>

	<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">

	<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="2j.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="3j.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

        <div class="card my-5 mx-4" >
  <img src="https://www.shutterstock.com/image-vector/vector-social-network-button-users-260nw-253724863.jpg" class="card-img-top" alt="..."width="40" 
     height="180">

         <div class="card-body">
    <h5 class="card-title">View Registered Users:</h5>
    <p class="card-text">No. of total users: <?php echo get_user_count();?></p>
					<a href="regusers.php" class="btn btn-danger" target="_blank">View Registered Users</a>
				</div>
</div>

		
<div class="card my-5 " >
  <img src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=590&h=800&D80F3D79-4382-49FA-BE4B4D0C62A5C3ED" class="card-img-top" alt="..."width="40" 
     height="180">

         <div class="card-body">
    <h5 class="card-title">View Registered Books:</h5>
    <p class="card-text">No. of availbale books: <?php echo get_book_count();?></p>
					<a href="regbooks.php" class="btn btn-primary" target="_blank">View Registered Books</a>
				</div>
</div>

<div class="card my-5 mx-4" >
  <img src="https://static.thenounproject.com/png/2793744-200.png" class="card-img-top" alt="..."width="40" 
     height="180">

         <div class="card-body">
    <h5 class="card-title">View Categories:</h5>
    <p class="card-text">No. of book's category: <?php echo get_category_count();?></p>
					<a href="regcat.php" class="btn btn-info" target="_blank">View Categories</a>
				</div>
</div>

<div class="card my-5 " >
  <img src="data:image/png;base64,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" class="card-img-top" alt="..."width="40" 
     height="180">

         <div class="card-body">
    <h5 class="card-title">View Authors:</h5>
    <p class="card-text">No. of availbale authors: <?php echo get_author_count();?></p>
					<a href="regauth.php" class="btn btn-primary" target="_blank">View Authors</a>
				</div>
</div>
<div class="card my-5 mx-4" >
  <img src="https://www.clipartmax.com/png/middle/231-2319880_book-free-icon-issue-book-icon-png.png" class="card-img-top" alt="..."width="40" 
     height="180">

         <div class="card-body">
    <h5 class="card-title">Issued Books:</h5>
    <p class="card-text">No. Issued Books: <?php echo get_issued_book_count();?></p>
	<a href="view_issued_book.php" class="btn btn-success" target="_blank">View Issued books</a>
  </div>
</div>




   </div>












		
	</div>
</body>
</html>