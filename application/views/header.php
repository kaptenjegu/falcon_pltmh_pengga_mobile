<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<meta name="robots" content="noindex">
	<title>PLTMH Pengga</title>
	<link rel="icon" type="image/png" href="" />
	<meta name="description" content="overview &amp; stats" />
	<style>
	body {
		height: auto;
		margin: 0;
		background-image:linear-gradient(#1b5169, #0892ae,#1b5169);
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
	.blink {
		animation: blinker 0.6s linear infinite;
		color: #1c87c9;
		font-size: 30px;
		font-weight: bold;
		font-family: sans-serif;
	}
	th{
		background-color: #304b75;
		border: 1px solid white;
		color: white;
	}
	tbody{
		background-color: #dde0dd;
		color: black;
		border: 1px solid white;
	}
	@keyframes blinker {
		50% {
		opacity: 0;
		}
	}
	</style>
</head>

<body>
	