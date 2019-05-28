
<?php
$db = mysqli_connect('localhost', 'root', '', 'testdb');

if(isset($_GET['keyword'])) {
		
	$keywords = $_GET['keyword'];
	/*$query =("SELECT * FROM books WHERE author_name = 'dan brown'");*/
	
	?>
	
	<div class="result-count">
	<table>
	<h2>List of Movies</h2>
<?php 
	$query =("SELECT * FROM movie_info WHERE movie_name LIKE '%{$keywords}%' OR movie_director LIKE '%{$keywords}%'");
	$student_query_result = mysqli_query($db,$query) or die(mysql_error());
	if(mysqli_num_rows($student_query_result) > 0){
		while ($row = mysqli_fetch_array($student_query_result)){
		$movie_id=$row['movie_id']?>
	<tr>
		
		<td> <a href="http://localhost/test/newpage.php?id=<?php echo strval($row["movie_id"]);?>">
		<img src="<?php echo $row["movie_image"];?>" width="176px" height="287px"/>
		</a></td>
		
		<td>Movie Name:&nbsp&nbsp&nbsp&nbsp<?php echo $row['movie_name'];?><br>
		Director Name:&nbsp&nbsp<?php echo $row['movie_director']; ?><br>
		Movie Rating:&nbsp&nbsp<?php echo $row['movie_rating']; ?><br>
		
		
<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'test');
		$res=mysqli_query($db,"SELECT mgenre_type from movie_genre where mgenre_id IN(select mgenre_id from movie_genre_info where movie_id=1)");
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
	
	
	<div class="movie-count">
	<table>
	<h2>List of Books</h2>
<?php 
$query =("SELECT * FROM book_info WHERE book_name LIKE '%{$keywords}%' OR author_name LIKE '%{$keywords}%'");
$student_query_result = mysqli_query($db,$query) or die(mysql_error());
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
else {
?>
	<h3>sorry no result found<h3>
<?php }
?>
</table>
	</div>
	
<?php
}
?>