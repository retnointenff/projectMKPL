<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login - PT. PYXIS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Business Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
	</script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="<?php echo base_url(); ?>/asset/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?php echo base_url(); ?>/asset/css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body>
<div class="signupform">
	<div class="container">
		<div class="agile_info">
			<div class="w3l_form">
				<div class="left_grid_info">
					<h1>PT. PYXIS ULTIMATE SOLUTION</h1>
					<img src="<?php echo base_url(); ?>/asset/images/image.jpg" alt="" />
				</div>
			</div>
			<div class="w3_info">
				<h2>Login</h2>
				<?php if ($this->session->flashdata('message')): ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong><?= $this->session->flashdata('message')?></strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif;?>
				<?php if ($this->session->flashdata('error')): ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong><?=$this->session->flashdata('error')?></strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif;?>
				<form action="<?php echo base_url('index.php/auth/login');?>" method="post">
					<label>NIK</label>
					<div class="input-group">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" name="nik" placeholder="Enter NIK"> 
					</div>
					<label>Password</label>
					<div class="input-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<input type="Password" name="password" placeholder="Enter Password" required="">
					</div> 
						<button class="btn btn-danger btn-block" type="submit">Login</button >
				</form>
			</div>
		</div>
	</div>
</div>
	
</body>
</html>