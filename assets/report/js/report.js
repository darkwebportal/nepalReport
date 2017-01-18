
var catagory="Cyber Crime";
$("#mainform").submit(function(event) {
	event.preventDefault();
	$("div.errorContainer").html(" ")
	var data={};
	data.zone=this.zone.value;
	data.location=this.location.value;
	data.priority=this.priority.value;
	data.time=this.time.value;
	data.phone=this.phone.value;
	data.reporton=this.reporton.value;
	data.name=this.name.value;
	data.message=this.message.value;
	data.catagory=catagory;
	if(validateData(data))
	{
		console.log(data);
		$.ajax({
			url: baseUrl+'submitreport',
			type: 'Post',
			dataType: 'json',
			data: data,
		})
		.done(function(data) {
			if(data.status==="success")
			{
				if(confirm("Successfully submitted\nSubmit another report?"))
					location.reload();
				else
					window.location.href='./userhome';
			}
			else
				alert("something went wrong please try agian");
		})
		.fail(function() {
			alert("something went wrong please try agian");
		});
	}
		
		

	

});
$("ul#btnContainer>li").click(function(event) {
	$("#catContainer").slideUp(400,()=>{
		catagory=this.firstChild.text.replace(/\s\s+/g, '');;
		$("#catContainer").text(this.firstChild.text);
		$("#catContainer").slideDown(400);
	});
	
});
function validateData(data){
	validation=true;
	for(key in data)
	{
	 	if(key!="message")
	 	{
	 		if(data[key].length==0)
	 		{
	 			$("div.errorContainer").append("<div>"+key+" can't be empty</div>");
	 			validation=false;
	 		}
	 		
	 		else if (data[key].length<4 && (key=="location" ||  key=="contacts" || key=="phone"  || key=="name" ))
	 		{
	 			$("div.errorContainer").append("<div>Enter valid "+key+" </div>");
	 			validation=false;
	 		}
	 		
	 	}
	 	
	}
	return validation;
}
