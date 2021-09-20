<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<title>pokemon</title>
<link href="<?= base_url('assets/css/bootstrap.css')?>"  rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?= base_url('assets/css/style.css')?>"  rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gaming Creators Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='<?=base_url()?>//fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
<link href='<?=base_url()?>//fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="<?=base_url()?>assets/js/modernizr.custom.js"></script>
<link href="<?= base_url('assets/css/component.css')?>"  rel="stylesheet" type="text/css" />
</head>
<body> 
		<div class="header-top">
		<div class="container">
		<div class="head-top">
			<div class="logo">
				<h1><a href="<?=base_url()?>index.php/Home"><span>P</span>oke <span>M</span>on</a></h1>
			</div>
		<div class="top-nav">		
			  <span class="menu"><img src="<?=base_url()?>images/menu.png" alt=""> </span>
				
					<ul>
						<li ><a class="color1" href="<?=base_url()?>index.php/Home"  >Pokemon</a></li>
						<li><a class="color2" href="<?=base_url()?>index.php/Home/mylist" >MyList</a></li>
						<div class="clearfix"> </div>
					</ul>

					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>

				</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
</div>

<!--content-->
	<div class="container">
			<div class="games">
				<h3>Tangkap Pokemon</h3>
	<form action="create" method="POST">
		<table>
			<tr>
				<td>Pokemon	</td>
				<td> : </td>
				<td>
					<select name="nama">
					<option value="">Pilih Pokemon</option>
					<option value="charmander">charmander</option>
					<option value="ulat">ulat</option>
					<option value="pidgey">pidgey</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tipe	</td>
				<td> : </td>
				<td>
					<select name="tipe">
					<option value="">Pilih Tipe</option>
					<option value="Api">Api</option>
					<option value="Serangga">Serangga</option>
					<option value="Terbang">Terbang</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="right"></td>
				<td><input type="submit" name="simpan"></td>
			</tr>
		</table>
	</form>
		</div>
<script src="<?=base_url()?>assets/js/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>
	</div>
	<!---->
	
</body>
</html>