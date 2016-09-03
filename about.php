<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bo Gjerlow | About Me</title>
		<meta name="description" content="The portfolio of Bo Gjerløw, a UI designer & front-end developer based in Denmark">
  		<meta name="keywords" content="UI designer,UI design,user interface designer,user interface design,front-end developer,front-end development,design,development">
		
		<?php include 'inc/header.php';?>

			<main id="aboutContent" class="animated zoomIn">
				<h2 class="aboutHeader">Hello there. I'm Bo Gjerl&oslash;w</h2>
				<h2 class="aboutHeader" id="aboutDynamicText">a UI designer</h2>
				<h2 class="aboutHeader">from Denmark</h2>
				
				<p id="aboutHeaderMobile">Hello there. I'm Bo Gjerl&oslash;w, a UI designer &amp; front-end developer from Denmark</p>

				<script>
					if($(window).width() >= 768){
						$(function () {
  							count = 0;
  							wordsArray = ["a UI designer","a front-end developer","a car enthusiast","an aspiring entrepreneur"];
					
  							setInterval(function () {
    							count++;
								$("#aboutDynamicText").fadeOut(400, function () {
      								$(this).text(wordsArray[count % wordsArray.length]).fadeIn(400);
    							});
  							}, 2000);
						});
					}
				</script>
				
				<p class="aboutText">I am currently studying Multimedia Design and Communication at Business Academy Aarhus.</p>
								
				<p class="aboutText">Along with user interface design and front-end development, I also possess skills within user experience design and general graphic design. I know a bit of back-end development as well. I always aim to create products with a strong connection to the target audience and with a high level of usability. </p>
				
				<p class="aboutText">Outside of design my main interests are cars, motorsport, football, video games, and technology.</p>
				
				<p class="aboutText">If you would like to get in touch, you can send me an email from the 'Contact' page. I look forward to hearing from you!</p>

			</main>

			<?php include 'inc/footer.php';?>