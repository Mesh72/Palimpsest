<?php include_once("header_template.php");?>
	
<div>
    <a href="gallery7.php"><img src="images/Palimpsest007_banner.png" alt="Blue abstract" title="Palimpsest #7"/>
	</a>
</div>
				
	<div class="clear">
	</div>

<!--Consider replacing gallery with jsquery (at present not confident understanding the jsquery scripts) -->
	<article>
			<h1> Gallery</h1>
			<hr>
			<p>
			To view an enlargement of each picture, simply click the painting.
			</p>
			<p> 
			
			<a href="gallery1.php"><img src="images/Palimpsest_1.png" alt="Red Abstract" title="Palimpsest #1" class="gallery"/> 
			</a>
			
			
			<a href="gallery2.php"><img src="images/Palimpsest_2.png" alt="#2" title="Palimpsest #2" class="gallery"/> 
			</a>
			
			<a href="gallery3.php"><img src="images/Palimpsest_3.png" alt="#3" title="Palimpsest #3" class="gallery"/> 
			</a>
			
			<a href="gallery4.php"><img src="images/Palimpsest_4.png" alt="#4" title="Palimpsest #4" class="gallery"/> 
			</a>
				
			<a href="gallery5.php"><img src="images/Palimpsest_5.png" alt="#5" title="Palimpsest #5" class="gallery"/> 
			</a>
				
			<a href="gallery6.php"><img src="images/Palimpsest_6.png" alt="#6" title="Palimpsest #6" class="gallery"/> 
			</a>
				
			<a href="gallery7.php"><img src="images/Palimpsest_7.png" alt="#7" title="Palimpsest #7" class="gallery"/> 
			</a>
				
			<a href="gallery8.php"><img src="images/Palimpsest_8.png" alt="#8" title="Palimpsest #8" class="gallery"/> 
			</a>
				
			<a href="gallery9.php"><img src="images/Palimpsest_9.png" alt="#9" title="Palimpsest #9" class="gallery"/> 
			</a>
			</p>
				
		</article>
			
		<aside>
			
				
<!--McGrath, M.(2012) PHP & MYSQL IN EASYSTEPS, Leamington Spa: In EasySteps Ltd. "Performing Actions" page 64 -->	
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