<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Top 5 Veículos populares</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index_exe.html"><img src="img/logobranca.png"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="_index.html">Início <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faleconosco.html">Fale Conosco</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
    </nav>
</header>
<div>
	<h1>Top 5 carros populares</h1>
	<p><?php echo "Olá mundo"; ?></p>
	<p><?="Olá mundo!";?></p>
	<?php echo 2+3; ?>
	
	<?php
	
		$num1 = $_GET["numero1"];
		$num2 = $_GET["numero2"];
		
		$res = $num1 + $num2;
		
		if(isset($_GET["btnCalcular"])){
			$nota1 = $_GET["nota1"];
			$nota2 = $_GET["nota2"];
			$nota3 = $_GET["nota3"];
			$nota4 = $_GET["nota4"];
			
			$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
		}
		else{
			$media = 0;
		}
		define("TITULO", "Meu site!!!");
		
	
		$valor = "<b>Hello buddy!</b>";
		$resultado = 5 + 5;
		
		$script = "<script>alert('Olá');</script>";
		
	?>
	<p><?= $valor ?></p>
	<p><?= $resultado ?></p>
	<p><h1><?php echo TITULO; ?></h1></p>
	<p><a href="formulario.php">Formulário</a></p>
	<p><a href="formulario2.php">Formulário média</a></p>
	<p><h1><?php echo $res; ?></h1></p>
	<p><h1><?php echo $media; ?></h1></p>
	
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
<?php echo $script; ?>