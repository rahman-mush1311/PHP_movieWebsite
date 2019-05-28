<?php include('server.php') ?>
<?php $user_name= $_SESSION['username']?>
<!DOCTYPE html>

<html>

<head>
  <link href="pivot.css" rel="stylesheet" > 
</head>
<body>
<div id="header">

<ul>
<li><img src="img/logotst.jpg" height="35px" width="167px"></li>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<li><input type="text" name="searchbox" class="search" style="background:#900C3F "></li> 

<li>Welcome <strong><?php echo $_SESSION['username']; ?></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<li> <a href="http://localhost/test/login.php" style="color:white" style="float:right">logout</a> </li>
			
</ul>
<?php
	/*$db = mysqli_connect('localhost', 'root', '', 'testdb');*/
	$db = mysqli_connect('localhost', 'root', '1234', 'test');
	$res=mysqli_query($db,"select * from book_info ORDER BY book_rating DESC LIMIT 1");
	while($row=mysqli_fetch_array($res))
	{
?>
</div>
<div id="navbar">
<ul>
  <li><a href="#">Home</a></li>
  <li class="dropdown"><a href="#" class="dropdown-btn">Catageory</a>
    <div class="dropdown-menu">
      <a href="#">Books</a>
      <a href="#">Movies</a>
    </div>
  </li>
   <li><a href="#">About</a></li>
  <li><a href="#">Contact Us</a></li>
</ul>
</div>
<?php
	}	
?>	

<div class="sidebar">

<h3> Search Here </h3>
<form action="searchres.php" method="get">
<input type="varchar" name="keyword" placeholder="search here">
<input type="submit" value="search">
</form>
</div>

<div class="sidebar">

<h3>Upcoming Releases: </h3>

</div>
<div class="main">

<h2> Top Releases: Movies </h2>
<p>
<figure>
<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'test');
	$res=mysqli_query($db,"select * from movie_info ORDER BY movie_rating DESC LIMIT 4");
	while($row=mysqli_fetch_array($res))
	{
?>
	
	<img src="<?php echo $row["movie_image"];?>" width="182px" height="276px">
<?php
	}	
?>	
			
</figure>
</p>

</div>

<div class="main2">

<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'test');
	$res=mysqli_query($db,"select * from movie_info ORDER BY movie_rating DESC LIMIT 4");
	while($row=mysqli_fetch_array($res))
	{
?>

	<a href="http://localhost/test/selecteditems.php?id=<?php echo strval($row["movie_id"]);?>" style="text-decoration: none;"><?php echo $row["movie_name"];?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
		
<?php
	}	
?>

</div>

<div class="main">

<h2> Editor's Choice: Books </h2>
<p>
<figure>
<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'test');
	$res=mysqli_query($db,"select * from book_info ORDER BY book_rating DESC LIMIT 4");
	while($row=mysqli_fetch_array($res))
	{
?>
	
	<img src="<?php echo $row["book_image"];?>" width="182px" height="276px">
<?php
	}	
?>	
			
</figure>
</p>

</div>

<div class="main2">

<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'test');
	$res=mysqli_query($db,"select * from book_info ORDER BY book_rating DESC LIMIT 4");
	while($row=mysqli_fetch_array($res))
	{
?>

	<a href="http://localhost/test/selecteditems.php?id=<?php echo strval($row["book_id"]);?>" style="text-decoration: none;"><?php echo $row["book_name"];?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
		
<?php
	}	
?>

</div>



</body>

</html>
