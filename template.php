<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Template</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<style>
		.header {
			background-color: #2DB753;
		}
		.footer {
			background-color: #36D683;
		}
		.navbar {
			background-color:#CBF9D0;
		}
		.content {
			background-color:#FFFFFF;
		}
	</style>
</head>
<body>
<?php
	session_start();
	if(!isset($_SESSION['login'])) {
		header("Location: login.php");
	}else{
		if($_SESSION['login'] == false){
			header("Location: login.php");
		}
	}
?>
	<!-- Awal Header -->
	<div class="header p-5 text-center" id="header" >
		<div class="fw-bold text-dark fs-1">HEADER</div>
	</div>
	<!-- Akhir Header -->
	<!-- Awal Menu -->
	<nav class="navbar navbar-expand-lg navbar-light fw-bold">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="template.php?content=home.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="template.php?content=datasiswa.php">Data Mahasiswa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="template.php?content=input.php">Input</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-danger" href="logout.php">Logout</a>
					</li>
				</ul>
				<form class="d-flex" action="template.php" method="get">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
					<button class="btn btn-secondary" type="submit" value="cari">Search</button>
				</form>
			</div>
		</div>
	</nav>
	<!-- Akhir Menu -->
	<!-- Awal Main -->
	<div class="content" id="content">
		<?php
			if(isset($_GET['content'])){
				$content = $_GET['content'];
			}else if(isset($_GET['cari'])){
				$content = 'pencarian.php';
			}else if(isset($_GET['nim'])){
				$content = 'detail.php';
			}else if(isset($_GET['update'])){
				$content = 'update.php';
			}else if(isset($_GET['foto'])){
				$content = 'gambar.php';
			}else if(isset($_GET['delete'])){
				$content = 'delete.php';
			}else{
				$content = 'home.php';	
			}
			include $content;
		?>
	</div>
	<!-- Akhir Main -->
	<!-- Awal Footer -->
	<div class="footer p-5 text-center" id="footer">
		<div class="fw-bold text-dark fs-1">FOOTER</div>
	</div>
	<!-- Akhir Footer -->
</body>
</html>


