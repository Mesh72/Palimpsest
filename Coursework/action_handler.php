<?php include_once("header_template.php");?>
<div>
    <img src="images/Palimpsest004_banner.png" alt="Red abstract" title="Palimpsest #1"/>
</div>


	
		<article>
<?php

# Replicate the HTML name attributes.
$name = $_POST['name'] ;
$mail = $_POST['mail'] ;
$comment = $_POST['comment'] ;

# Display the submitted data.
echo "<p>Thank you for this comment, $name </p>" ;
echo "<p><i>$comment</i></p>" ;
echo "<p>We will reply to $mail</p>" ; 



?>
		</article>
		
<aside>
			
				<h2> Your Comments </h2>
					<p> All comments are treated with discretion and we gaurantee that any personal information is not stored or passed on to third party companies.
					</p>
				<hr>	
				
				
					
				<h2> Visit us at: </h2>
					
				
					<p>
					<a href="http://www.facebook.com/PalimpsestPaintings" target="_blank"><img src="images/facebook.png"
						alt="Palimpsest paintings, facebook page" class="left"/>
					</a>
					<a href="http://www.flickr.com/PalimpsestPaintings" target="_blank"><img src="images/flickr.png"
						alt="Palimpsest paintings, flickr page" class="left"/>
					</a>
					</p>
		</aside>

<?php include_once("footer_template.php");?>
