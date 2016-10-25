<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bo Gjerlow | About Me</title>
		<meta name="description" content="The portfolio of Bo Gjerløw, a UI/UX designer & front-end developer based in Denmark">
  		<meta name="keywords" content="UI designer,UI design,user interface designer,user interface design, UX designer, UX design, user experience designer, user experience design,front-end developer,front-end development,design,development">
		
		<?php include 'inc/header.php';?>

			<main id="aboutContent" class="animated zoomIn">
				<h2 class="aboutHeader">Hello there. I'm Bo Gjerl&oslash;w</h2>
				<h2 class="aboutHeader" id="aboutDynamicText">a UI/UX designer</h2>
				<h2 class="aboutHeader">from Denmark</h2>
				
				<p id="aboutHeaderMobile">Hello there. I'm Bo Gjerl&oslash;w, a UI/UX designer &amp; front-end developer from Denmark</p>

				<script>
					if($(window).width() >= 768) {
						$(function () {
  							count = 0;
  							wordsArray = ["a UI/UX designer","a front-end developer","a car enthusiast","an aspiring entrepreneur"];
					
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
								
				<p class="aboutText">I specialise in UI/UX design and front-end development, but I also know a bit of back-end development and a thing or two about branding. I have an eye for detail, and I always aim to create products with a strong connection to the target audience and a high level of usability.</p>
				
				<p class="aboutText">Outside of design and web development, my main interests are cars, motorsport, computers, and startups.</p>
				
				<p class="aboutText">If you would like to get in touch, you can send me an email from the 'Contact' page. I look forward to hearing from you!</p>

			</main>

			<?php include 'inc/footer.php';?>