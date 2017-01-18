  window.fbAsyncInit = function() {
    FB.init({
      appId      : '489567548109960',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.11'
    });      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

function fblogin(data)
{
  $.ajax({
      url: baseUrl+"fblogin",
      type: 'Post',
      dataType: 'Json',
      data:data,
    })
    .done(function(response) {
      console.log(response);
      if(response.status==="success")
        location.reload();
      else
        if(confirm("Something went wrong,\n Wanna retry"))
          fblogin(data);
    })
    .fail(function(res) {
       if(confirm("Something went wrong,\n Wanna retry"))
          fblogin(data);
    });
}

function checkLogin(response)
{
  if(response.status=="connected")
    {
      FB.api('/me?fields=id,name,email,gender', function(signedRequest,response) {
        fblogin({id:response.id,
                signedRequest:signedRequest,
                firstname:response.name.split(" ")[0],
                lastname:response.name.split(" ")[1],
                gender:response.gender,
                email:response.email,
                });
      }.bind(null,response.authResponse.signedRequest));
    }
  else
    alert("something went wrong \n try again later");
}

function facebookSignup()
{
   FB.getLoginStatus(function(response) {
    checkLogin(response);
  });
}