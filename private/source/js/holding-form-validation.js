/*jshint unused: false */

var gd;

(function (window){

	Gd.gateway = '/gateway';

	Gd.prototype.ajaxTimeout;

	function Gd() {
		init(this);
	}

	function init(ctx){

		$("#holding-signup").submit(function(e) {

			if($('#holding-signup').parsley('isValid')){

				e.preventDefault();

				$('button[type=submit]').attr('disabled', true);

				ctx.ajaxTimeout = setTimeout(showTimeout, 10000);

				$.ajax({
					url: Gd.gateway + '/post-user',
					type: 'POST',
					data: $("#holding-signup").serialize(),
					dataType: "json",
					error: function() {
					},
					success: function(data) {


						if(data.success === 1)
						{
							showFormSuccess(data.message);
						}
						else
						{
							$.each(data.message, function(index, value) {

								showFormError(value, index);
								
							});
						}

					},
					complete: function() {
						clearTimeout(ctx.ajaxTimeout);
						$('button[type=submit]').attr('disabled', false);
					}
				}); //ajax

			} //parsley

		}); //form

	}


	function showFormError(message, field){
		
		if(field)
		{
			$('#holding-signup').append("<ul class='parsley-error-list columns small-12'><li>You've already signed up with this email address</ul>");
		}
		else
		{
			$('#holding-signup').append("<ul class='parsley-error-list columns small-12'><li>Apologies, there was an error. Please try again</ul>");
		}
	}


	function showFormSuccess(message){
		$('.holding-signup').addClass('hide');
		$('.giles-holding-description').addClass('hide');
		$('.branding').append("<p>Thank you for signing up. We'll be in contact shortly</p><p>In the meantime, you can find Giles on all good social networks</p>");
	}


	function showTimeout(){
		$('.holding-signup').addClass('hide');
		$('.giles-holding-description').addClass('hide');
		$('#holding-signup').append("<ul class='parsley-error-list columns small-12'><li>Apologies, the server is busy at the moment. Please reload and try again</ul>");
	}

	window.Gd = Gd;
})(window);


$(document).ready(function() {
	gd = new Gd();
});