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
					if($(window).width() >= 768) {
						$(function () {
  							count = 0;
  							wordsArray = ["a UI designer","a front-end developer","a car enthusiast", "a motorsport fan","an aspiring entrepreneur"];
					
  							setInterval(function () {
    							count++;
								$("#aboutDynamicText").fadeOut(400, function () {
      								$(this).text(wordsArray[count % wordsArray.length]).fadeIn(400);
    							});
  							}, 2000);
						});
					}
				</script>
				
				<p class="aboutText">I am a recent graduate from the Multimedia Design and Communication programme at Business Academy Aarhus. I specialise in user interface design and front-end development, but I also like to work with user experience design, as well as back-end development using Ruby on Rails.</p>
								
				<p class="aboutText">I have extensive knowledge and experience with HTML and CSS and know the basics of JavaScript and jQuery. Recently I also added Ruby on Rails to my skillset and used this language in my final project of my educational programme.</p>
                                
                <p class="aboutText">In addition, I am used to working with the Scrum framework and tools like <a href="https://trello.com" class="itemLink">Trello</a>, <a href="https://github.com" class="itemLink">GitHub</a>, and <a href="https://www.invisionapp.com" class="itemLink">InVision</a>.</p>
				
				<p class="aboutText">In my spare time, I like to watch motorsport (particularly the FIA World Endurance Championship) as well as kicking back and relaxing with some video games. Other interests of mine include cars, football, computers, and start-ups.</p>
                
                <p class="aboutText">My interests of course also include design and web development, where I keep up to date with the latest trends and tendencies through reading different articles on <a href="https://medium.com" class="itemLink">Medium</a> and scrolling through <a href="https://dribbble.com" class="itemLink">Dribbble</a>.</p>
				
				<p class="aboutText">If you would like to get in touch, you can send me an email from the <a href="contact.php" class="itemLink">contact page</a>. I look forward to hearing from you!</p>
			</main>

			<?php include 'inc/footer.php';?>