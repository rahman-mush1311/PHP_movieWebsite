<?php include('server.php') ?>

<!DOCTYPE html>

<html>

<head>
  <link href="pivot.css" rel="stylesheet" > 
</head>
<body>
<div>


<?php
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
      <a href="http://localhost/test/newpage.php?id=<?php echo strval($row["book_id"]);?>" style="text-decoration: none;">Series</a>
    </div>
  </li>
   <li><a href="http://localhost/test/index.php">About</a></li>
  <li><a href="http://localhost/test/n.php">Contact Us</a></li>
  
  <li> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Welcome <strong></li>
<li> <a href="http://localhost/test/login.php" style="color:white" style="float:right">login</a> </li>

</ul>
</div>
<?php
	}	
?>	

<div class="sidebar">

<h3> Upcoming Relasese:Books </h3>

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