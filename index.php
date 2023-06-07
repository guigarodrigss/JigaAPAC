<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="grafico.js"></script>
    <link rel="stylesheet" href="assets/style.css">
    <title>Dashboard</title>
</head>
<body>
<nav class="navbar bg-dark" data-bs-theme="dark">
      
        <img src="assets/img/Marca_Apac_2020_hor_positiva.png" alt="Logo" class="logo">
        <h1 class="title">Chuva na região metropolitana</h1>
        <div class ="buttons-container">
            <h3 class="subtitle">Selecione o período:</h3>
            <a href="#" class="button">Manhã</a>
            <a href="#" class="button">Tarde</a>
            <a href="#" class="button">Noite</a>
            <a href="#" class="button">Madrugada</a>
        </div>
    </nav>

	<canvas id="meuGrafico"></canvas>

    
</body>
</html>


