<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>e-Monitoring</title>
	<link rel="icon" type="image/png"
		href="" />
	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/font-awesome/4.5.0/css/font-awesome.min.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/fonts.googleapis.com.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/ace.min.css" class="ace-main-stylesheet"
		id="main-ace-style');?>" />

	<link rel="stylesheet" href="<?= base_url('assets/css/ace-skins.min.css');?>" />
	<link rel="stylesheet" href="<?= base_url('assets/css/ace-rtl.min.css');?>" />

	<link rel="stylesheet" href="<?= base_url();?>assets/css/jquery-ui.custom.min.css" />
	<link rel="stylesheet" href="<?= base_url();?>assets/css/chosen.min.css" />
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap-datepicker3.min.css" />
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap-timepicker.min.css" />
	<link rel="stylesheet" href="<?= base_url();?>assets/css/daterangepicker.min.css" />
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap-datetimepicker.min.css" />
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap-colorpicker.min.css" />


	<script src="<?= base_url('assets/js/ace-extra.min.js');?>"></script>
</head>
<style type="text/css">
	input[type="date"]: {
		width: 50%;

	}

	#tglm::-webkit-calendar-picker-indicator {
		background: transparent;
		color: transparent;
		cursor: pointer;
		height: 20px;
		left: 0;
		position: absolute;
		right: 0;
		width: auto;
	}

	
</style>

<body class="no-skin">
	<div id="navbar" class="navbar navbar-default ace-save-state">
		<div class="navbar-container ace-save-state" id="navbar-container">
			<div class="navbar-header pull-left">
				<a href="<?= base_url('home') ?>" class="navbar-brand" >
					<small>
						<i class="fa fa-bolt"></i>
						Monitoring PLTMH Pengga
					</small>
				</a>
			</div>

			
		</div><!-- /.navbar-container -->
	</div>

	<div class="main-container ace-save-state" id="main-container">


		<div class="main-content">
			<div class="main-content-inner">
				<?php if($page<>"home"){?>
				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="<?= base_url('home') ?>">Kembali ke menu</a>
						</li>
					</ul><!-- /.breadcrumb -->
				</div>
				<?php } ?>

				<div class="page-content">

					<div class="page-header">
						<h1>
							<?//= $breadcrumb; ?>
						</h1>
					</div><!-- /.page-header -->

					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
