<?php include_once("header_template.php");?>
	
	<div class="clear">
	</div>

		<article>
			
			<p> 
			<a href="gallery.php"><img src="images/Palimpsest-007L.png" alt="Blue hues fill most of this canvas with interruptions of green and white" title="Palimpsest #7" class="galleryl"/> 
			</a>
			<h4> Title: Palimpsest #7</h4><br>
			<h5>Acrylic on Canvas<br>
				Painting size: 40cm x 40cm<br>
				Please contact the studio for pricing<br></h5>
				<h4>SOLD</h4>
				<h5><a href="gallery.php">Return to Gallery</a></h5>
			</p>
				
		</article>
			
		<aside>
			
		<h2> Comments </h2>
			<form action="action_handler.php" method="POST">
				<dl>
					<p>Name:<br><input type="text" name="name"></p>
					<p>Email Address:<br><input type="text" name="mail"></p>
					<p>Comments:<br><textarea name="comment" rows="5" cols="20"></textarea></p>
				</dl>
					<p><input type="submit" ></p>
					<hr>
					
				<h2> Visit us at: </h2>
					<p>
					<a href="http://www.facebook.com/PalimpsestPaintings?ref=hl" target="_blank"><img src="images/facebook.png" class="left"/>
					</a>
					<a href="http://www.flickr.com/PalimpsestPaintings?ref=hl" target="_blank"><img src="images/flickr.png" class="left"/>
					</a>
					
					</p>
		</aside>
						
<?php include_once("footer_template.php");?>