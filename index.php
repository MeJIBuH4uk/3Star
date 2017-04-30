<!DOCTYPE html>
<html lang="ru">
<?php 
	$title = "Главная";
	require_once "blocks/head.php"; 
?>
<body>
	<?php require_once "blocks/header.php"; ?>

	<div class="content">
		
		<div class="slidershow-container">
			<div class="mySlides fade">
				<img src="img/nacladka.jpg" style="width:100%; height: 350px">
				<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas iusto aspernatur quo.</div>
			</div>
			<div id="second" class="mySlides fade">
				<img src="img/ball.jpg" style="width:100%; height: 350px">
				<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias temporibus nihil, quaerat!</div>
			</div>
			<div id="third" class="mySlides fade">
				<img src="img/raketka.jpg" style="width:100%; height: 350px">
				<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto eaque voluptatibus, doloribus!</div>
			</div>
			<a onclick="plusSlides(-1)" class="prev">&#10094</a>
			<a onclick="plusSlides(1)" class="next">&#10095</a>
		</div>

		<br>

		<div style="text-align:center;">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
		</div>

	</div>

	<?php require_once "blocks/footer.php"; ?>
</body>
</html>