<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Freedom Quest
 * @since Freedom Quest 1.0
 */
get_header(); ?>
 <head>
        <title>Meg Miller | Developer</title>
		
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
		<header>     <!--Begin Page Header Section / Navigation!!!-->
			<div class="full-width">
				<div class="half-width">
					<h1>Meg Miller</h1>
					<h2><span>I'm Meg </span>&amp building beautiful<br> websites is my happy place.</h2>
				</div>
				<div class="half-width">
					
					<nav>
						<ul>
							<li><a href="#about">About</a></li>
							<li><a href="#work">Work</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>	
					</nav>
				</div>
			</div>
		</header>
		<main>
			<section id="about">               <!--Begin about section!!!-->
				<div class="full-width">
					<h2>A little bit about me</h2>
					
					<div class="half-width">
						<p>I&rsquo;ve made my home base in Hilo, Hawaii for the past few years. I live in a small apartment on the bay with my wonderful fiancee Joe, where we live and work with the salty ocean air. After becoming part of a team of like-minded buisiness owners (more accurately, regular people who started businesses from home) I discovered that we all had a need for one thing and we needed that thing soon. That one thing was a website. A web presence is crucial in today&rsquo;s marketing arena and so I jumped into coding with both feet!!</p>
					</div>
					<div class="half-width">
						<p>Since I built my first Wordpress website using tutorials on Youtube, I have graduated to taking more structured courses at <a href="http://www.skillcrush.com" target="_blank">Skillcrush</a> and I am learning so quickly it seems impossible!! My first desire is to be able to build a quick, affordable, and easily updated website for my fellow entrepreneurs to be able to use and offer along with a position in the business. That being said, I quickly realized the vast potential of these skills, so the sky&rsquo;s the limit! I look forward to helping people stake out their tiny piece of the Web to call their own!</p>
					</div>
				</div>
			</section>
				
			<section id="work">                <!--Begin work section!!!-->
				<div class="full-width">
					<div class="third-width">
						<img class="center-icons" src="img/wordpress-circle-navy.png" alt="wordpress icon"/>
						<h3>Wordpress<br>Customization</h3>
						<br>
						<p>I love building websites with Wordpress because they are so easy to update for YOU, the client! If you want to change your testimonials, update them as often as you like without having to wait! Of course, there are still times when you need a hand making bigger changes...</p>
					</div>
					<div class="third-width">
						<img class="center-icons" src="img/thumbs-up.png" alt="thumbs up icon"/>
						<h3>Extra Help When<br>You Need It</h3>
						<br>
						<p>I pride myself on building websites that are easy for you to update, but that doesn't mean you are on your own! I am always available to make the big changes, add or remove content or pages, build a new custom site from scratch... I can help you find solutions that fit your budget... </p>
					</div>
					<div class="third-width">
						<img class="center-icons" src="img/dollar.png" alt="dollar sign icon"/>
						<h3>Not an Owner Yet<br>or Need to Advertise?</h3>
						<br>
						<p>Sign up for a FREE Webcast to learn the basics of how you can use the internet and social media to brand yourself and work as your own boss! You will learn the secrets that 6-figure online earners are using to earn substantial monthly income from anywhere... Part-Time!</p>
					</div>
				</div>
			</section>
			<footer id="contact">             <!--Begin contact section!!!-->
				<div class="full-width">
					<div class="half-width">
						<img id="contact-img" src="img/hawaiian-sunset.JPG" alt="Contact Image"/>
					</div>
					<div class="half-width" id="contact-info">
						<h2>Like what you see?</h2>
						
						<h3 id="email-header">Let&rsquo;s meet for a cup of coffee.</h3>
						<h4><a href="mailto:meg@happyzencode.com"><img id="envelope" src="img/envelope.png" alt="envelope icon"/>meg [@] happyzencode.com</a></h4>
						
						<h3 id="socialmedia-header">Or, find me on the interwebs.</h3>
						<ul>         <!--social media links!!!-->  
							<li><a href="http://twitter.com/megmillerhilo"><img class="sm-social" src="img/twitter-circle.png" alt="twitter icon"/></a></li>
							<li><a href="https://www.youtube.com/channel/UCz3TR7YNbpSqHI6TAzAmhaw"><img class="sm-social" src="img/youtube-circle.png" alt="Youtube icon"/></a></li>
							<li><a href="https://plus.google.com/u/2/100070974169734960991"><img class="sm-social" src="img/googleplus-circle.png" alt="instagram icon"/></a></li>
							<li><a href="https://www.linkedin.com/in/megmillerhilo"><img class="sm-social" src="img/linkedin-circle.png" alt="linkedin icon"/></a></li>
							<li><a href="https://www.facebook.com/themegmiller"><img class="sm-social" src="img/facebook-circle.png" alt="Facebook icon"/></a></li>
							<li><a href="https://github.com/AumDove"><img class="sm-social" src="img/github.png" alt="Github icon"/></a></li>
						</ul>
					</div>
				</div>
			</footer>
		</main>
    
    </body>
</html>