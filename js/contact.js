jQuery(document).ready(function($) {
	$("#contact").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/alexwlami/send-mail-1.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<span class="modal__thanks" style="text-align:center;color:green;font-weight:bold;display:block">Спасибо за доверие.</span><br/><span class="modal__thanks"  style="text-align:center;color:green;font-weight:bold;display:block">Я свяжусь с вами в течение 2-х часов.</span>';
					$("#fields").hide();
				}
				else {result = msg;}
				$('#note').html(result);
			}
		});
		return false;
	});
});

jQuery(document).ready(function($) {
	$("#contact2").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/alexwlami/send-mail-2.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<span class="modal__thanks" style="text-align:center;color:green;font-weight:bold;display:block">Спасибо за доверие.</span><br/><span class="modal__thanks"  style="text-align:center;color:green;font-weight:bold;display:block">Я свяжусь с вами в течение 2-х часов.</span>';
					$("#fields2").hide();
				}
				else {result = msg;}
				$('#note2').html(result);
			}
		});
		return false;
	});
});

jQuery(document).ready(function($) {
	$("#contact3").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/alexwlami/send-mail-1.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<span class="modal__thanks" style="text-align:center;color:green;font-weight:bold;display:block">Спасибо за доверие.</span><br/><span class="modal__thanks"  style="text-align:center;color:green;font-weight:bold;display:block">Я свяжусь с вами в течение 2-х часов.</span>';
					$("#fields3").hide();
				}
				else {result = msg;}
				$('#note3').html(result);
			}
		});
		return false;
	});
});

jQuery(document).ready(function($) {
	$("#contact4").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/alexwlami/send-mail-4.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<span class="modal__thanks" style="text-align:center;color:green;font-weight:bold;display:block">Спасибо за доверие.</span><br/><span class="modal__thanks"  style="text-align:center;color:green;font-weight:bold;display:block">Я свяжусь с вами в течение 2-х часов.</span>';
					$("#fields4").hide();
				}
				else {result = msg;}
				$('#note4').html(result);
			}
		});
		return false;
	});
});

jQuery(document).ready(function($) {
	$("#contact5").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/alexwlami/send-mail-5.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<span class="modal__thanks" style="text-align:center;color:green;font-weight:bold;display:block">Спасибо за доверие.</span><br/><span class="modal__thanks"  style="text-align:center;color:green;font-weight:bold;display:block">Я свяжусь с вами в течение 2-х часов.</span>';
					$("#fields5").hide();
				}
				else {result = msg;}
				$('#note5').html(result);
			}
		});
		return false;
	});
});

jQuery(document).ready(function($) {
	$("#contact6").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/alexwlami/send-mail-6.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<span class="modal__thanks" style="text-align:center;color:green;font-weight:bold;display:block">Спасибо за доверие.</span><br/><span class="modal__thanks"  style="text-align:center;color:green;font-weight:bold;display:block">Я свяжусь с вами в течение 2-х часов.</span>';
					$("#fields6").hide();
				}
				else {result = msg;}
				$('#note6').html(result);
			}
		});
		return false;
	});
});

jQuery(document).ready(function($) {
	$("#contact7").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/alexwlami/send-mail-7.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<span class="modal__thanks" style="text-align:center;color:green;font-weight:bold;display:block">Спасибо за доверие.</span><br/><span class="modal__thanks"  style="text-align:center;color:green;font-weight:bold;display:block">Я свяжусь с вами в течение 2-х часов.</span>';
					$("#fields7").hide();
				}
				else {result = msg;}
				$('#note7').html(result);
			}
		});
		return false;
	});
});

jQuery(document).ready(function($) {
	$("#contact8").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/alexwlami/send-mail-8.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<span class="modal__thanks" style="text-align:center;color:green;font-weight:bold;display:block">Спасибо за доверие.</span><br/><span class="modal__thanks"  style="text-align:center;color:green;font-weight:bold;display:block">Я свяжусь с вами в течение 2-х часов.</span>';
					$("#fields8").hide();
				}
				else {result = msg;}
				$('#note8').html(result);
			}
		});
		return false;
	});
});

jQuery(document).ready(function($) {
	$("#contact9").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/alexwlami/send-mail-9.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<span class="modal__thanks" style="text-align:center;color:green;font-weight:bold;display:block">Спасибо за доверие.</span><br/><span class="modal__thanks"  style="text-align:center;color:green;font-weight:bold;display:block">Я свяжусь с вами в течение 2-х часов.</span>';
					$("#fields9").hide();
				}
				else {result = msg;}
				$('#note9').html(result);
			}
		});
		return false;
	});
});

jQuery(document).ready(function($) {
	$("#contact10").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/alexwlami/send-mail-10.php",
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					$("#succs").show();
				}
				else {result = msg;}
				$('#note1').html(result);
			}
		});
		return false;
	});
});