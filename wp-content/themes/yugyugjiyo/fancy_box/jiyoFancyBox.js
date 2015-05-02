$(function()
{
	
	$("#popLoginBt").click(function(){
		$("#loginBox").addClass( "notranform" );
	});
	
	$("#popSignUpBt").click(function(){
		$("#signupBox").addClass( "notranform" );
	});

	$("#backBt").click(function(){
		$("#loginBox").removeClass( "notranform" );
	});	
	
	$("#backBt1").click(function(){
		$("#signupBox").removeClass( "notranform" );
	});	
	
	$("#goforgotPswbox").click(function(){
		$("#forgotPswBox").addClass( "notranform" );
	});	
	
	$("#backLoginbox").click(function(){
		$("#forgotPswBox").removeClass( "notranform" );
	});	
	
	$("#goSignupbox").click(function(){
		$("#loginBox").removeClass( "notranform" );
		$("#signupBox").addClass( "notranform" );
	});	
	
	$("#goLoginbox").click(function(){
		$("#loginBox").addClass( "notranform" );
		$("#signupBox").removeClass( "notranform" );
	});	
	
});