var flag = 0; var swal; 
function varifynull(vari,message)
{
	if(vari===null || vari==="" || vari==='indefined')
	{  
	  alert(message);
	  flag++;  
	  return false; 
	}
}
$(document).on('click','#submitwork',function(e){
	e.preventDefault();
	alert("1");
	var title = $('#title').val();
	varifynull(title,"Title must be filled!");
	var details = $('#details').val();
	varifynull(details,"Details must be filled!");
	

if(flag===0)
{	
	$.ajax({
		method:'post',
		url:'worksheet.php',
		data:{
			titlekey:title,
			detailskey:details
		},
		success:function(data){
			swal("Well Done",data, "success");
		}
	});
}
});

$(document).on('click','#updatework',function(e){
	e.preventDefault();
	var title = $('#update_title').val();
	varifynull(title,"Title must be filled!");
	var details = $('#update_details').val();
	varifynull(details,"Details must be filled!");
	var s_no = $('#s_no').val();

if(flag===0)
{	
	$.ajax({
		method:'post',
		url:'worksheet.php',
		data:{
			titlekey:title,
			detailskey:details,
			s_nokey:s_no
		},
		success:function(data){
			swal("Well Done",data, "success");
		}
	});
}
});