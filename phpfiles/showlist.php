<?php include('server.php') ?>
<?php $user_name= $_SESSION['username']; ?>

<!DOCTYPE html>

<html>

<head>
   <title>SELECTED ITEMS</title>
   <link href="showlists.css" rel="stylesheet" >
</head>
<body>
	<div class="wrapper">
	<nav>
	<ul>
	  
	  <li><a href="http://localhost/test/home.php"> HOME </a></li>
	  <li class="dropdown"> <a href="#" class="dropdown-btn"> CATAGEORY</a>
			<div class="dropdown-menu">
			  <a href="http://localhost/test/showlist.php"> BOOKS </a>
			  <a href="http://localhost/test/movielist.php"> MOVIES </a>
			</div>
	   </li>
	  <li><a href="http://localhost/test/index.php"> ABOUT </a></li>
	  <li><a href="http://localhost/test/n.php"> CONTACT</a></li>
	</ul>
	<nav>
<div class="table">
<table>
	<h2>List of Books</h2>
	<?php 
	$sql = "SELECT * FROM book_info";
	$db = mysqli_connect('localhost', 'root', '1234', 'test');
	$student_query_result = mysqli_query($db,$sql) or die(mysql_error());
	if(mysqli_num_rows($student_query_result) > 0){
		while ($row = mysqli_fetch_array($student_query_result)){
		$book_id=$row['book_id']?>
	<tr>
		
		<td> <a href="http://localhost/test/newpage.php?id=<?php echo strval($row["book_id"]);?>">
		<img src="<?php echo $row["book_image"];?>" width="176px" height="287px"/>
		</a></td>
		
		<td>Book Name:&nbsp&nbsp&nbsp&nbsp<?php echo $row['book_name'];?><br>
		Author Name:&nbsp&nbsp<?php echo $row['author_name']; ?>
		<br>
	<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'test');
	$res=mysqli_query($db,"select * from genre_info WHERE book_id=$book_id");
	while($row=mysqli_fetch_array($res))
	{
?>	
		<?php echo $row['genre_type']; ?>&nbsp&nbsp
<?php
	}	
?>
		</td>
		<br>
		</tr>
	<?php }
		}
	?>
</table>
</div>
</div>
</body>

</html>