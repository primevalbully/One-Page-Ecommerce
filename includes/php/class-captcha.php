<?php if (empty($_POST)) { ?>
<div id="cunt">
  <form 
	id="discount_form" 
	name="discount_form" 
	method="post" 
	action="php-ajax-output.php">
	<div class="field">
	  <input 
		type="text" 
		name="discount_code" 
		id="discount_code" 
		placeholder="Discount Code" 
		title="Discount Code"
        autocomplete="on">
	</div>
	<input 
	  type="hidden" 
	  name="hidden" 
	  id="hidden" 
	  value="hidden">
	<div id="captcha">
	  <img 
		id="siimage" 
		alt="Are you human or a bot" 
		src="securimage_show.php?sid=<?php echo md5(time()) ?>">
	  <object 
		type="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 
		data="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" 
		width="28"      
		height="28" 
		id="SecurImage_as3">
		<param name="allowScriptAccess" value="sameDomain">
		<param name="allowFullScreen" value="false">
		<param name="movie" value="securimage_play.swf?audio=securimage_play.php&amp;bgColor1=#777&amp;bgColor2=#fff&amp;iconColor=#000&amp;roundedCorner=5">
		<param name="quality" value="high">			
		<param name="bgcolor" value="#000000">
		<embed 
		  src="securimage_play.swf?audio=securimage_play.php&amp;bgColor1=#777&amp;bgColor2=#fff&amp;iconColor=#000&amp;roundedCorner=5" 
		  width="28" 
		  type="application/x-shockwave-flash" 
		  height="28" 
		  quality="high" 
		  bgcolor="#000000" 
		  allowScriptAccess="sameDomain" 
		  allowFullScreen="false" 
		  pluginspage="https://www.macromedia.com/go/getflashplayer">
	  </object>
	  <!-- pass a session id to the query string of the script to prevent ie caching -->
	  <a 
		tabindex="-1" 
		href="#" 
		title="Refresh Captcha Image" 
		onClick="document.getElementById('siimage').src = 'securimage_show.php?sid=' + Math.random(); return false">
		<img 
		  id="refreshIcon"
		  src="../images/refreshIcon30.png" 
		  alt="Reload Captcha"
		  onClick="this.blur()">
	  </a>
	</div><!--End of Captcha Div-->
	<div style="clear: both"></div>
	<!-- NOTE: the "name" attribute is "code" so that $img->check($_POST['code']) will check the submitted form field -->	
	<div class="field">
	  <input 
		type="text" 
		name="code" 
		id="code" 
		size="12"
		placeholder="Captcha Code"
		title="Captcha Code">
	</div>
	<input 
	  type="button" 
	  name="submit" 
	  id="fuck"
	  class="three-d-button" 
	  value="Submit">
  </form>
</div><!--End of cunt Div-->
<?php
  } else { //form is posted
  include("securimage.php");
  $img = new Securimage();
  $valid = $img->check($_POST['code']);
  }
?>