
var serverRespond;
var log=false;
function c(data) //console
{
	if(log)
		console.log(data);
}
function switchFromTextToAnimation() { //switch from iniitial to loading animaiton\
	c("switchFromTextToAnimation");
		$(".create-account-text").fadeOut('slow', function() {
			$(".loading-anim").fadeIn('fast');
			});
		}

function switchFromAnimationToText() { //switch from loading animaiton to form
	c("switchFromAnimationToText");
	$(".loading-anim").fadeOut('slow',()=>{
		$(".create-account-text").fadeIn('fast');
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
action= (data)=>{signUp(data)};


$("#mainFrom").submit(function(event) {

	event.preventDefault();
	clearFromError();
	var firstName=$("input[name='firstname']").val();
	var lastName=$("input[name='lastname']").val();
	var email=$("input[name='email']").val();
	var contact=$("input[name='contact']").val();
	var address=$("input[name='address']").val();
	var password=$("input[name='password']").val();
	var gender=$("input[name='gender']:checked").val();
	signUp({firstname:firstName,lastname:lastName,email:email,contact:contact,address:address,password:password,gender:gender});

});

function signUp(data) {
	c("signUp");
	
	var validation=	validateFirstaName(data.firstname) && 
					validateLastName(data.lastname) && 
					validateEmail(data.email) && 
					validateContact(data.contact) && 
					validateAddress(data.address) && 
					validatePassword(data.password)
					;
	if(!validation){
		switchFromAnimationToText();
		if(!validateFirstaName(data.firstname))
			formError("Length of firstname >3 and <20");

		if(!validateLastName(data.lastname))
			formError("Length of lastname >3 and <20");

		if(!validateEmail(data.email))
			formError("Enter a valid email");

		if(!validateContact(data.contact))
			formError("Enter a valid contact");
		if(!validateAddress(data.address))
			formError("Enter a valid address");

		if(!validatePassword(data.password))
			formError("Length of password >6 and <32");

		


		}
	else
	{
		c("validation successful");
		switchFromTextToAnimation()
		serverConnectionTimeOutHandeller(switchFromAnimationToText);
		$.ajax({
			url:baseUrl+'signupvalidation',
			type: 'Post',
			dataType: 'json',
			data: data,
		})
		.done(function(d) {
			c(d);
			c("success");
			if(d.status=="success")
				window.location.href="./userhome"
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

function validateFirstaName(name){
	 var regex = /^([a-zA-Z_])+([a-zA-Z0-9_])+$/;
	 return regex.test(name) && name.length>3 && name.length<20;
}
function validateLastName(name){
	 var regex = /^([a-zA-Z_])+([a-zA-Z0-9_])+$/;
	 return regex.test(name) && name.length>3 && name.length<20;
}
function validateEmail(email) {
	 var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	 return regex.test(email);
}

function validateContact(contact) {
	 var regex = /^([0-9+])+$/;
	 return regex.test(contact) && contact.length >8  && contact.length >8;
}
function validateAddress(address) {

	 return address.length >2  && address.length <50;
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


	
		
			
			
		
