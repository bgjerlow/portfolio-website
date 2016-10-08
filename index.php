<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bo Gjerlow | Work</title>
		<meta name="description" content="The portfolio of Bo Gjerløw, a UI/UX designer & front-end developer based in Denmark">
  		<meta name="keywords" content="UI designer,UI design,user interface designer,user interface design, UX designer, UX design, user experience designer, user experience design,front-end developer,front-end development,design,development">
		
		<?php include 'inc/header.php';?>
		
			<script>
				$('#work').addClass('current');
			</script>

			<main id="homeContent" class="animated zoomIn">
				<div class="portfolioPreview">
					<a href="while-you-wait.php" class="darken"><img src="img/portfolio/while-you-wait-preview.jpg" class="previewImage" alt="While You Wait logo"></a>
					<a href="while-you-wait.php"><h2 class="previewText">While You Wait</h2></a>
					<h3 class="previewTags">UI/UX design, branding, web development</h3>
				</div>

				<div class="portfolioPreview middleMargin">
					<a href="mconsult.php" class="darken"><img src="img/portfolio/mconsult-preview.jpg" class="previewImage" alt="MConsult logo"></a>
					<a href="mconsult.php"><h2 class="previewText">MConsult</h2></a>
					<h3 class="previewTags">branding</h3>
				</div>

				<div class="portfolioPreview">
					<a href="forza-hub-mobile.php" class="darken"><img src="img/portfolio/forza-hub-mobile-preview.jpg" class="previewImage" alt="Forza Hub Mobile app"></a>
					<a href="forza-hub-mobile.php"><h2 class="previewText">Forza Hub Mobile</h2></a>
					<h3 class="previewTags">UI/UX design</h3>
				</div>

				<div class="portfolioPreview">
					<a href="silo-coffee.php" class="darken"><img src="img/portfolio/silo-coffee-preview.jpg" class="previewImage" alt="Silo Coffee website"></a>
					<a href="silo-coffee.php"><h2 class="previewText">Silo Coffee</h2></a>
					<h3 class="previewTags">UI/UX design, web development</h3>
				</div>

				<div class="portfolioPreview middleMargin">
					<a href="liga-bbva-redesign.php" class="darken"><img src="img/portfolio/liga-bbva-redesign-preview.jpg" class="previewImage" alt="Liga BBVA redesign"></a>
					<a href="liga-bbva-redesign.php"><h2 class="previewText">Liga BBVA Redesign</h2></a>
					<h3 class="previewTags">UI/UX design</h3>
				</div>

				<div class="portfolioPreview">
					<a href="cartabase.php" class="darken"><img src="img/portfolio/cartabase-preview.jpg" class="previewImage" alt="Cartabase logo"></a>
					<a href="cartabase.php"><h2 class="previewText">Cartabase</h2></a>
					<h3 class="previewTags">branding</h3>
				</div>
			</main>

			<script type="application/javascript">
				$('.darken').hover(function() {
					$(this).find('img').fadeTo(500, 0.5);
				}, function() {
					$(this).find('img').fadeTo(500, 1);
				});
			</script>

			<?php include 'inc/footer.php';?>