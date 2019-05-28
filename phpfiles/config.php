
<?php if (isset($_GET['id'])) {
	$book_id= $_GET['id']; 
	$id= intval($book_id);
	$user_name= $_SESSION['username'];
	
	$db = mysqli_connect('localhost', 'root', '', 'testdb');
	$res=mysqli_query($db,"select * from book_info WHERE book_id=$id");
	while($row=mysqli_fetch_array($res))
	{ 
		$book_name=$row['book_name'];
		$book_id=$row['book_id'];
	}
	
	// receive all input values from the form
	$c_name = $user_name;
	$c_contents = mysqli_real_escape_string($db, $_GET['commentcontent']);
	//$book_name =  $book_name;

	// form validation: ensure that the form is correctly filled
	if (empty($c_contents)) { array_push($errors, "Username is required"); }


	// register user if there are no errors in the form
	if (count($errors) == 0) {
		
		$query = "INSERT INTO comments (c_name, c_contents, book_name, book_id) 
				  VALUES('$c_name', '$c_contents', '$book_name', '$id')";
		mysqli_query($db, $query);

	}	

} ?>