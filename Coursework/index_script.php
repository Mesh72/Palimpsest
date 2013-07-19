<?php include_once("header_template.php");?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="galleria/galleria-1.2.9.min.js"></script>

<style>
    #galleria{ width: 780px; height: 294px; background: #000 }
</style>

<div id="galleria">
    <img src="images/palimpsest001.png">
    <img src="images/palimpsest004.png">
	<img src="images/palimpsest005.png">
	<img src="images/palimpsest006.png">
	<img src="images/palimpsest007.png">
	<img src="images/palimpsest002.png">
	<img src="images/palimpsest003.png">
	<img src="images/palimpsest008.png">
</div>

<script>
    Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
	Galleria.run('#galleria');
</script>

	
		<article>	
			<h1> Welcome </h1>
			<hr>
				<p> Palimpsest Paintings is a collection of artworks that examine the architectural, historic layers of a building
					through a process of stripping back. The <a href="gallery.php">paintings</a> depict a representation of the marks, scars, textures and colours
					left behind.
				</p>

				<p> "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.".
				</p>
		</article>
			
		<aside>
			<h2> News </h2>
				<p> "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.".
				</p>
		</aside>
<?php include_once("footer_template.php");?>

