
<?php
	
	if (isset($_GET['id'])) {
	$movie_id= $_GET['id']; 
	$id= intval($movie_id);
	$user_name= $_SESSION['username'];
	
	$db = mysqli_connect('localhost', 'root', '1234', 'test');	
	
	// receive all input values from the form
	$cm_name = $user_name;
	$cm_contents = mysqli_real_escape_string($db, $_GET['commentcontents']);
	//$book_name =  $book_name;

	// form validation: ensure that the form is correctly filled
	if (empty($cm_contents)) { array_push($errors, "Username is required"); }


	// register user if there are no errors in the form
	if (count($errors) == 0) {
		
		$query = "INSERT INTO movie_comments (cm_name, cm_contents, movie_id) 
				  VALUES('$cm_name', '$cm_contents','$id')";
		mysqli_query($db, $query);
		$_SESSION['id'] = $id;
		//$_SESSION['success'] = "You are now logged in";
		//header('location: n.php');
		
	}

}
?>