<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tic Tac toe</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="turn-container">
	<h3>Turn For  <i class="fa-solid fa-gamepad"></i> </h3>
	<div class="turn-box align"> X </div>
	<div class="turn-box align"> O </div>
	<div class="bg"></div>
</div>

<div class="main-grid">
	<div class="box align">0</div>
	<div class="box align">1</div>
	<div class="box align">2</div>
	<div class="box align">3</div>
	<div class="box align">4</div>
	<div class="box align">5</div>
	<div class="box align">6</div>
	<div class="box align">7</div>
	<div class="box align">8</div>
</div>

<h2 id="results"></h2>
<button id="play-again"> Play Again</button>

<div class="logo"> <img src="img/logoweb.png"></div>
<!-- link  -->
<script type="text/javascript" src="script.js"></script>
</body>
</html>