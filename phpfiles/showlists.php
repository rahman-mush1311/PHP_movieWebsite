
body{
	
/*background: #0C0D0D;*/
margin: 0 auto;
font-family: helvatica;
padding: 20px;
}

ul{

list-style-type: none;
margin: 0 ;
padding: 0 ;
overflow: hidden;
background-color:#FF5733;

}

 li{
 float:left; 

}

 li a, .dropdown-btn{
	
	display: inline-block;
	color: #fff;
	text-align: center;
	padding: 18px 22px;
	text-decoration:  none;

}

li a:hover, .dropdown:hover .dropdown-btn {
	background-color: #f5f5f5;
	color: #FF5733;
}

li.dropdown{
	display:inline-block;
}

.dropdown-menu{
	display: none;
	position: absolute;
	background-color: #f5f5f5;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
}
.dropdown-menu a{
	color: grey;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
}
.dropdown-menu a:hover{
	background-color: #FF5733;
	color: #fff;
}

.dropdown:hover .dropdown-menu{
	display:block;
}
 h2{
color: #ce282e;
margin-left: 15px;
 }
table {
    width: 100%;
}

td {
    height: 50px;
	color: orange;
}