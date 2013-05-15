<?php 
	$page = 'home';
	include_once('includes/header.inc.php'); 
?>
<div>
	Premier ajout
	<p>Qqchose</p>
	<ul>
<<<<<<< HEAD
	<li>Accueil</li>
	<li>Contact</li></ul>
=======
	<li>Nous ne supportons html5</li></ul>
>>>>>>> sansIE8
</div>
<div class="main_home">
	<?php
		/*
		include_once('lib/slideshow.cls.php');
		$slideshow = new SlideShow("data/slideshow/xml/slideshow.xml");
		echo $slideshow -> show($lan);
		*/
	?>
	<div class="slideshow">
		<div class="slidesmask">
			<div class="slides"></div>
		</div>
		<div class="control"></div>
	</div>


	<p><?=$_s['home']['intro1']?></p>
	<p><?=$_s['home']['intro2']?></p>
</div>
<?php include_once 'includes/footer.inc.php'; ?>