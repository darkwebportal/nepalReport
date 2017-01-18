var serverRespond;
var log=true;
function c(data) //console
{
	if(log)
		console.log(data);
}
function switchFromTextToAnimation() { //switch from iniitial to loading animaiton\
	c("switchFromTextToAnimation");
		$(".create-account-text").fadeOut(0, function() {
			$(".loading-anim").fadeIn(0);
			});
			

		}

function switchFromAnimationToText() { //switch from loading animaiton to form
	c("switchFromAnimationToText");
	$(".loading-anim").fadeOut(0,()=>{
		$(".create-account-text").fadeIn(0);
	});
	
}
function checkPendingAnimation()
{
	var status= a(".create-account-text") && 
		   a(".loading-anim");
		  
	c("padding animation:"+status);
	return status;
}
function a(selector)
{
	if($(selector).is(":animated"))
		return false;
	else
		return true;
}
action= (data)=>{login(data)};

function serverConnectionTimeOutHandeller(handle) {
	serverRespond=false;
	serverLoginResponseInterval=setInterval(()=>{
			clearInterval(serverLoginResponseInterval);
			if(!serverRespond)
			{
				switchFromAnimationToText();
				clearFromError();
				handle();
				formError("Couldn't connect to server");
			}
		},1000*60);
}

function login(data) {
	c("login");
	c(data);
	var validation=validatePassword(data.password) || validateEmail(data.userName);
	if(!validation){
		switchFromAnimationToText();
		if(!(validateEmail(data.userName) ))
			formError("enter a valid Email");

		if(!validatePassword(data.password))
			formError("enter a valid password");
	}
	else
	{
		c("validation successful");
		serverConnectionTimeOutHandeller(switchFromAnimationToText);
		if(loginpage=="admin")
			loginValidator="adminloginvalidation";
		else
			loginValidator="userloginvalidation";
		$.ajax({
			url:baseUrl+loginValidator,
			type: 'Post',
			dataType: 'json',
			data: data,
		})
		.done(function(d) {
			c(d);
			c("success");
			if(d.status=="success")
				location.reload();
			else
			{
				clearFromError();
				switchFromAnimationToText();

				for(var key in d)
				{
					if(key!="status"&&d[key])
						formError(d[key]);
				}
				
			}
		})
		.fail(function(data) {
			c("faild");
			c(data);
			switchFromAnimationToText();
			clearFromError();
			formError("Something went wrong");
				
				
		})
		.always(function() {
			serverRespond=true;
		});
	}
	
}

$("#mainFrom").submit(function(event) {

	event.preventDefault();
	clearFromError();
	switchFromTextToAnimation()
	var email=$("input[name='email']").val();
	var password=$("input[name='password']").val();
	action({email:email,password:password});

});
function validateEmail(email) {
	 var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	 return regex.test(email);
}
function validatePassword(password){
	 return password.length>6 && password.length<32;
}
function clearFromError()
{
	$("div.alert.alert-danger.alert-dismissable").remove();
}
function formError(error){
	c(error)
	var newError=`<div class="error"><strong>Error!</strong>`+error+`</div>`;
	if($("div.alert.alert-danger.alert-dismissable").length)
	{
		previousError=$("span.errorWrapper").html();
		$("span.errorWrapper").html(previousError+newError)
	}
	else
	$("div.errorContainer").html(
									`<div class="alert alert-danger alert-dismissable">
								 		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
									  	<span class="errorWrapper"> `+newError+`</span>
									</div>`

		);

}

	
		
			
			
		
