<html>

<head>

    <link href="/assets/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <script src="/assets/js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="/assets/js/utils.js" type="text/javascript"></script>
    <script src="/assets/js/bootstrap.js" type="text/javascript"></script>

<style>
	body {
		background-color:#dddddd;
		padding:20px;
	}
	.chip_box{
		width:50px;
		height:20px;
		border:1px solid #333333;
		display: inline-block;
		text-shadow: .5px .5px #cccccc;
		font-size:9px !important;
		padding:3px; /* alter */
	}
	.chip_box:hover{
		border-color:#ffffff;
	}

    </style>

	<script>


	</script>

</head>

<?php 
	// If there is not a base color to gradient out set one up  / otherwise permit one to be passed via get
	if(!isset($_GET['base_color'])) 	$base_color = "#ffffff";
	else 											$base_color = $_GET['base_color'];

	$max_chips = 1000;			// this will be the number of itterations in the color variation process
	$max_num  = 65535;	// This is FFFFFF pure white in HEX and RGB where RRGGBB are the placeholders respectivelt
	$multiplier = intval($max_num/$max_chips);
?>

<body>

	All colors (greens) evenly parsed out in (1000) equal segments 00ff00 fdffe8<br>
	
<div class="row">

<?php
	
	for ($i=1; $i <= $max_chips; $i++){
		
		$tColor = dechex( $i * $multiplier);
		$tColor = str_pad($tColor , 4, "0", STR_PAD_LEFT);
		$tColor1 = substr($tColor,0,2);
		$tColor2 = substr($tColor,2,2);
		echo "<div  class=\"chip_box\" style=\"background-color:".$tColor1."FF".$tColor2."\">".$tColor1."FF".$tColor2."</div>\n";
		
	}
?>

</div>
