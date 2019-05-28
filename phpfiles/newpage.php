<?php include('server.php') ?>
<?php include('errors.php') ?>
<?php include('config.php') ?>
<?php $book_id= $_GET['id']; ?>
<?php $id= intval($book_id)?>
<?php $user_name= $_SESSION['username']; ?>

<!DOCTYPE html>
<html>

<head>
  <link href="selecteditem.css" rel="stylesheet" > 
   <title>BOOK DESCRIPTION</title>
</head>

<body>
<div id="navbar">
<ul>
  <li><a href="http://localhost/test/home.php">Home</a></li>
  <li class="dropdown"><a href="#" class="dropdown-btn">Catageory</a>
    <div class="dropdown-menu">
      <a href="http://localhost/test/showlist.php">Books</a>
      <a href="http://localhost/test/movielist.php">Movies</a>
    </div>
  </li>
   <li><a href="http://localhost/test/index.php">About</a></li>
  <li><a href="http://localhost/test/n.php">Contact Us</a></li>
</ul>
</div>
</body>
<div id="wrapper">
	<div class="content" id="first"> 
	<figure>
<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'test');
	$res=mysqli_query($db,"select * from book_info WHERE book_id=$id");
	while($row=mysqli_fetch_array($res))
	{ 
		$book_name=$row['book_name'];
		$book_id=$row['book_id'];
?>
		<img src="<?php echo $row["book_image"];?>" width="250px" height="300px"/>
	</figure>
	</div>
		
	<div class="content" id="second"> 
		  
		  <p style="color:red;font-size:20px"> Author:<a style="color:white"><?php echo $row["author_name"]; ?></a>  </p>
		  <br>
		  <p style="color:white">
		  <?php echo $row["book_des"];?>
          </p>
		  <br>
		  <p style="color:white">
          </p>
		  <br>
		  <a href="<?php echo $row["book_url"];?>">
		  <button class="button">Buy At Rokomari</button>
		  </a>
<?php
	}	
?>
	</div>	
	
	</div>
		  
	<div class="content" id="another">
		<h2 style="color:white"> Comments<h2> 
		  <form action = "newpage.php" method= "GET">
			<textarea rows ="10" cols= "100" name="commentcontent"placeholder="Review this content" ></textarea><br>
			<!--<a href="http://localhost/test/n.php?id=">-->
			<button class="button" value="<?php echo $book_id?>" name='id'>POST</button>
			<a href="http://localhost/test/newpage.php?id=<?php echo $book_id ?>">
			</a>
		  </form>
		  <h2>Users Posted:</h2>
	<textarea id="show" style="display:none;">
	<?php 
	$sql = "SELECT * FROM comments where book_id=$id";
	$db = mysqli_connect('localhost', 'root', '1234', 'test');
	$student_query_result = mysqli_query($db,$sql) or die(mysql_error());
	if(mysqli_num_rows($student_query_result) > 0){
		while ($row = mysqli_fetch_array($student_query_result)){
	?>
	
	<?php echo $row['c_name']; ?>: 
	<?php echo $row['c_contents']; ?>
	<br>
	</textarea>
	<?php }
		}
	?>
	</table>
	</div>
</div>

<div id="wrapper">
		   <div class="content" id="first"> 
			<figure>
	<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'test');
	$res=mysqli_query($db,"select * from movie_info WHERE movie_id=$id");
	while($row=mysqli_fetch_array($res))
	{
		$movieid=$row['movie_id'];
?>
				<img src="<?php echo $row["movie_image"];?>" width="250px" height="300px"/>
			</figure>
		   </div>
		
		  <div class="content" id="second"> 
		  
		  <p style="color:red;font-size:20px"> Director:<a style="color:white"><?php echo $row["movie_director"]; ?></a>  </p>
		  <br>
		  <p style="color:white">
		  <?php echo $row["movie_des"];?>
          </p>
		  <br>
		  <p style="color:white">
		  <?php echo $movieid ;?>
          </p>
		  <br>
		  <a href="<?php echo $row["movie_url"];?>">
		  <button class="button">Watch Youtube Trailer</button>
		  </a>
<?php
	}	
?>
		  </div>
		  
	<div class="content" id="another">
	<h2 style="color:white"> Comments<h2> 
	   <form action = "selecteditems.php" method= "
	   GET">
	    <textarea rows ="10" cols= "100" name="commentcontents"placeholder="Review this content" ></textarea><br>
		<button class="button" value="<?php echo $movieid?>" name='id'>POST</button>
		<a href="http://localhost/test/selecteditems.php?id=<?php echo $movieid ?>">
			</a>
		  </form>
		  <h2>Users Posted:</h2>
	<textarea id="show" style="display:none;">
	<?php 
	$sql = "SELECT * FROM movie_comments where movie_id=$id";
	$db = mysqli_connect('localhost', 'root', '1234', 'test');
	$student_query_result = mysqli_query($db,$sql) or die(mysql_error());
	if(mysqli_num_rows($student_query_result) > 0){
		while ($row = mysqli_fetch_array($student_query_result)){
	?>
	
	<?php echo $row['cm_name']; ?>: 
	<?php echo $row['cm_contents']; ?>
	<br>
	</textarea>
	<?php }
		}
	?>
	</table>
	</div>
	    </div>
	<!--<div>
	<table>
	<?php 
	//$sql = "SELECT * FROM comments where book_id=$id";
	//$db = mysqli_connect('localhost', 'root', '', 'testdb');
	//$student_query_result = mysqli_query($db,$sql) or die(mysql_error());
	//if(mysqli_num_rows($student_query_result) > 0){
		//while ($row = mysqli_fetch_array($student_query_result)){
	?>
	<tr>
	
	<td><?php //echo $row['c_name']; ?>:</td> <br>
	<td><?php //echo $row['c_contents']; ?></td>
	</tr>
	<?php //}
		 //}
	?>
	<table>
	</div>-->
</html>