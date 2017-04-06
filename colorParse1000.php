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
		width:60px;
		height:20px;
		border:1 solid #333333;
		display: inline-block;
	}
	.chip_box:hover{
		border-color:#ffffff;
	}

    </style>

</head>

<?php 
	// If there is not a base color to gradient out set one up  / otherwise permit one to be passed via get
	if(!isset($_GET['base_color'])) 	$base_color = "#ffffff";
	else 											$base_color = $_GET['base_color'];

	$max_chips = 1000;			// this will be the number of itterations in the color variation process
	$max_num  = 16777215;	// This is FFFFFF pure white in HEX and RGB where RRGGBB are the placeholders respectivelt
	$multiplier = intval($max_num/$max_chips);
?>

<body>

<div class="row">

<?php
	
	function zeropad($num, $lim){
   		return (strlen($num) >= $lim) ? $num : zeropad("0" . $num);
	}
	
	for ($i=1; $i <= $max_chips; $i++){
		
		$tColor = zeropad(dechex( $i * $multiplier),6);
		echo "<div  class=\"chip_box\" style=\"background-color:#$tColor\">$tColor</div>\n";
		
	}
?>

</div>
