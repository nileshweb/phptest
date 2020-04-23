
<script type="text/javascript">
function recaptchaCallback() {
	//document.getElementById("button-class").disabled = false;
	alert("Test");
	document.getElementById("download-link-custom").href = "http://www.google.com/";
};
</script>


	
	<a id="download-link-custom" href="#" target="_blank" class="tcb-button-link tve_evt_manager_listen tve_et_mouseover">
		<span class="tcb-button-texts"><span class="tcb-button-text thrv-inline-text" data-css="tve-u-1714ef9d1d9" style=""><strong>Click Here To Watch FREE Video</strong></span>
	</a>

</div>

<button onclick="recaptchaCallback();" value="TEST">abc</button>





<?php


function googleRecaptchaCusotmFunction() { 
$string .= '<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
function recaptchaCallback() {
	$(document).ready(function(){
		alert("ABC");
	});
	document.getElementById("download-link-custom").href = "http://www.google.com/";
	document.getElementsByClassName("tcb-button-link").href = "http://www.google.com/";
};
</script>
<div class="g-recaptcha" data-sitekey="6Lc8OiYTAAAAAOPY2SnD4COLMymU1B9nk-WBkjYT" data-callback="recaptchaCallback"></div>
';
 
return $string; 
 
}







function googleRecaptchaCusotmFunction() { 
$string .= '<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
function recaptchaCallback() {
	alert("test");
	document.getElementById("download-link-custom").href = "http://www.google.com/";
};
</script>
<div class="g-recaptcha" data-sitekey="6Lc8OiYTAAAAAOPY2SnD4COLMymU1B9nk-WBkjYT" data-callback="recaptchaCallback"></div>';
 
return $string; 
 
}



















/*
function googleRecaptchaCusotmFunction() { 
$string .= '<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
function recaptchaCallback() {
	document.getElementById("button-class").disabled = false;
};
</script>
<button type="button" id="button-class" class="button-class" disabled style="font-size:18px; padding:20px;background-color:none!important;">Click Me!</button>
<div class="g-recaptcha" data-sitekey="6Lc8OiYTAAAAAOPY2SnD4COLMymU1B9nk-WBkjYT" data-callback="recaptchaCallback"></div>
';
 
return $string; 
 
}
// Register shortcode
add_shortcode('captcha_custome_function', 'googleRecaptchaCusotmFunction'); */
?>