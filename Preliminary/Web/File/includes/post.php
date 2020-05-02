<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Portal | Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">

  </head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../index.php"><img src="../images/logo.png" height="50"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../about-us.php">About</a>
            </li>
                 <li class="nav-item">
              <a class="nav-link" href="../index.php">News</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="../contact-us.php">Contact us</a>
            </li>
  
  
          </ul>
        </div>
      </div>
    </nav>


<div class="container" >


     
      <div class="row" style="margin-top: 4%">

        <!-- Search Column -->
        <div class="col-md-8">

          <!-- Search Result -->

<div class="card mb-4">
 
            

<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "newsportal";

	// Create connection
	$conn = mysqli_connect($servername,$username,$password,$db);

	// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	} 
	//echo "Connected successfully";
	
	if(isset($_POST["submit"])){
		$searchtitle = $_POST["searchtitle"];
		$sql = "SELECT PostDetails FROM tblposts WHERE PostTitle='$searchtitle'";//String
		$result = mysqli_query($conn,$sql);
		
		if (mysqli_num_rows($result) > 0) {
        // output data of each row
    		while($row = mysqli_fetch_assoc($result)) {
       			echo $row["PostDetails"];
       			echo "<br>";
    		}
		} else {
    		echo "0 results";
		}
	}
	
 ?></div>

</div>
<!-- Sidebar Widgets Column -->
<div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                   <form action="post.php" method="post">

<div class="input-group">
		
		<input type="text" name="searchtitle" class="form-control" placeholder="Search for...">
	<span class="input-group-btn">
	
<input type="submit" name="submit" class="btn btn-secondary" value="Submit">
</span>
	
              </div></form>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">

                    <li>
                      <a href="category.php?catid=2">Bollywood</a>
                    </li>

                    <li>
                      <a href="category.php?catid=3">Sports</a>
                    </li>

                    <li>
                      <a href="category.php?catid=5">Entertainment</a>
                    </li>

                    <li>
                      <a href="category.php?catid=6">Politics</a>
                    </li>

                    <li>
                      <a href="category.php?catid=7">Business</a>
                    </li>
                  </ul>
                </div>
       
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Recent News</h5>
            <div class="card-body">
                      <ul class="mb-0">

  <li>
                      <a href="news-details.php?nid=7">Jasprit Bumrah ruled out of England T20I series due to injury</a>
                    </li>
            
  <li>
                      <a href="news-details.php?nid=10">Tata Steel, Thyssenkrupp Finalise Landmark Steel Deal</a>
                    </li>
            
  <li>
                      <a href="news-details.php?nid=11">UNs Jean Pierre Lacroix thanks India for contribution to peacekeeping</a>
                    </li>
            
  <li>
                      <a href="news-details.php?nid=12">Shah holds meeting with NE states leaders in Manipur</a>
                    </li>
                      </ul>
            </div>
          </div>

        </div>
</div>
<!-- /.row -->

    </div>
    <!-- /.container -->

<!-- Footer -->
      <?php include('footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>

