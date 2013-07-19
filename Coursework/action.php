<?php include_once("header_template.php");?>


<form action="action_handler.php" method="POST">
<dl>
<dt>Name:<dd><input type="text" name="name">
<dt>Email Address:<dd><input type="text" name="mail">
<dt>Comments:<dd><textarea name="comment" rows="5" cols="20"></textarea>
</dl>
<p><input type="submit" ></p>
</form>



<?php include_once("footer_template.php");?>