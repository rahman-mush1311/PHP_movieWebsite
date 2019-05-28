<?php include('server.php') ?>
<?php $user_name= $_SESSION['username']; ?>

<!DOCTYPE html>

<html>

<head>
   <title>SELECTED MOVIES</title>
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
<?php
$db = mysqli_connect('localhost', 'root', '1234', 'test');

	?>
	
	<div class="result-count">
	<table>
	<h2>List of Movies</h2>
<?php 
	$query =("SELECT * FROM movie_info");
	$student_query_result = mysqli_query($db,$query) or die(mysql_error());
	if(mysqli_num_rows($student_query_result) > 0){
		while ($row = mysqli_fetch_array($student_query_result)){
		$movie_id=$row['movie_id']?>
	<tr>
		
		<td> <a href="http://localhost/test/selecteditems.php?id=<?php echo strval($row["movie_id"]);?>">
		<img src="<?php echo $row["movie_image"];?>" width="176px" height="287px"/>
		</a></td>
		
		<td>Movie Name:&nbsp&nbsp&nbsp&nbsp<?php echo $row['movie_name'];?><br>
		Director Name:&nbsp&nbsp<?php echo $row['movie_director']; ?><br>
		Movie Rating:&nbsp&nbsp<?php echo $row['movie_rating']; ?><br>
		
		
<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'test');
		$res=mysqli_query($db,"SELECT mgenre_type from movie_genre where mgenre_id IN(select mgenre_id from movie_genre_info where movie_id='$movie_id')");
	while($row=mysqli_fetch_array($res))
	{
?>	
<?php echo $row['mgenre_type']; ?>&nbsp&nbsp

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
	

</body>

</html>