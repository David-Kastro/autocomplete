<!DOCTYPE html>
<html>
<head>
	<title>Autocomplete</title>
	<style type="text/css">
		#autocomplete{
			position: absolute;
			border: solid 1px grey;
		}
		ul{
			list-style: none;
			padding: 0;
			margin: 0;
		}
		ul li{
			padding: 5px;
			cursor: pointer;
			transition: background-color 0.3s, color 0.3s;
		}
		ul li:hover{
			background-color: #268aed;
			color: white;
		}
	</style>
</head>
<body>
	<input type="text" name="busca" id="busca">
	<div id="autocomplete">
		
	</div>

	<script type="text/javascript" src="./jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="./script.js"></script>
</body>
</html>