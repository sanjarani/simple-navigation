<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>main Page</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="makeCenter.js"></script>
<style type="text/css">
body {
	background:rgb(44, 71, 90); /*linear-gradient((rgb(29, 46, 60);*/
}
#wrapper {
	 width:242px;
	 height:284px;
	 background:rgb(29, 47, 61);
	 margin:auto;	
}
div#wrapper ul {
	padding:0;
	position:absolute;
	margin-left:21px;
	margin-top:18px;
	list-style:none;
	text-align:left;
	line-height:26px;
}
div#wrapper ul li {
	width:200px;
	height:42px;

	background: linear-gradient(rgb(66, 88, 102) 1px, rgb(45, 71, 88) 1px, rgb(36, 57, 74) 42px );
	-webkit-background: linear-gradient(rgb(66, 88, 102) 1px, rgb(45, 71, 88) 1px, rgb(36, 57, 74) 42px );
	-moz-background: linear-gradient(rgb(66, 88, 102) 1px, rgb(45, 71, 88) 1px, rgb(36, 57, 74) 42px );
	
	margin-top:7px;
	
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	
	cursor:pointer;
}
div#wrapper ul li a {
	text-decoration:none;
	color:#FFF;
	text-shadow:0 0 4px #000;
	font-family: Arial, sans-serif;
	font-size:12px;
	position:relative;
	top:8px;
	left:18px;
}
div#wrapper ul li a:hover {
	color:rgb(255,128,0);
}
div#wrapper ul li:hover {
	background: linear-gradient(rgb(63, 87, 105) , rgb(56, 75, 91) );
	-webkit-background: linear-gradient(rgb(63, 87, 105) , rgb(56, 75, 91) );
	-moz-background: linear-gradient(rgb(63, 87, 105) , rgb(56, 75, 91) );
}
</style>
</head>

<body>

<div id="wrapper">

	<ul>
		<li>
      	<a href="#">Homepage</a>
      </li>
		<li>
      	<a href="#">Our Portfolio</a>
      </li>
		<li>
      	<a href="#">Meet Our Team</a>
      </li>
		<li>
      	<a href="#">What We Do</a>
      </li>
		<li>
      	<a href="#">Get In Touch</a>
      </li>
   </ul>
</div>

</body>
</html>
