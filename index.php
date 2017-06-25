<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bo Gjerlow | Work</title>
		<meta name="description" content="The portfolio of Bo Gjerløw, a UI designer & front-end developer based in Denmark">
  		<meta name="keywords" content="UI designer,UI design,user interface designer,user interface design,front-end developer,front-end development,design,development">
		
		<?php include 'inc/header.php';?>
		
			<script>
				$('#work').addClass('current');
			</script>

			<main id="homeContent" class="animated zoomIn">
                <div class="portfolioPreview">
					<a href="spot-festival.php" class="darken"><img src="img/portfolio/spot-festival/spot-festival-preview.jpg" class="previewImage" alt="SPOT Festival website"></a>
					<a href="spot-festival.php"><h2 class="previewText">SPOT Festival</h2></a>
					<h3 class="previewTags">UI design, UX design, Web development</h3>
				</div>
                
				<div class="portfolioPreview middleMargin">
					<a href="while-you-wait.php" class="darken"><img src="img/portfolio/while-you-wait/while-you-wait-preview.jpg" class="previewImage" alt="While You Wait logo"></a>
					<a href="while-you-wait.php"><h2 class="previewText">While You Wait</h2></a>
					<h3 class="previewTags">UI design, UX design, Web development, Branding</h3>
				</div>

				<div class="portfolioPreview">
					<a href="mconsult.php" class="darken"><img src="img/portfolio/mconsult/mconsult-preview.jpg" class="previewImage" alt="MConsult logo"></a>
					<a href="mconsult.php"><h2 class="previewText">MConsult</h2></a>
					<h3 class="previewTags">Branding</h3>
				</div>

				<div class="portfolioPreview">
					<a href="forza-hub-mobile.php" class="darken"><img src="img/portfolio/forza-hub-mobile/forza-hub-mobile-preview.jpg" class="previewImage" alt="Forza Hub Mobile app"></a>
					<a href="forza-hub-mobile.php"><h2 class="previewText">Forza Hub Mobile</h2></a>
					<h3 class="previewTags">UI design, UX design</h3>
				</div>

				<div class="portfolioPreview middleMargin">
					<a href="liga-bbva-redesign.php" class="darken"><img src="img/portfolio/liga-bbva-redesign/liga-bbva-redesign-preview.jpg" class="previewImage" alt="Liga BBVA redesign"></a>
					<a href="liga-bbva-redesign.php"><h2 class="previewText">Liga BBVA Redesign</h2></a>
					<h3 class="previewTags">UI design</h3>
				</div>

				<div class="portfolioPreview">
					<a href="cartabase.php" class="darken"><img src="img/portfolio/cartabase/cartabase-preview.jpg" class="previewImage" alt="Cartabase logo"></a>
					<a href="cartabase.php"><h2 class="previewText">Cartabase</h2></a>
					<h3 class="previewTags">Branding, UI design</h3>
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