jQuery(document).ready(function($) {
	$('#btn_login').click(function(){
		credentials = $('#frm_login').serialize();
		console.log(credentials);
		$.post(
			'include/login.inc.php',
			credentials,
			function(html){
				console.log(html);
			});
	});
});