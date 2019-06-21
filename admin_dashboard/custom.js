$(document).on('click','.edit_task',function(){
	var date = $(this).attr('data-date');
	var title = $(this).attr('data-title');
	var details = $(this).attr('data-details');
	var id = $(this).attr('data-id');
	var sno = $(this).attr('data-sno');
	$('#sno').val(sno);
	$('#title').val(title);
	$('#details').val(details);
	$.ajax({
		method:'post',
		url:'function.php',
		data:{
			user:'details',
			id:id
		},
		success:function(data){
			//alert(data);
			$('#user_profile').html(data);
			$('#edittask').modal('show'); 
			
		}
	});
});

$(document).on('click','.view_user',function(){
	var id = $(this).attr('data-id');
	var sno = $(this).attr('data-sno');
	$('#sno').val(sno);
	$.ajax({
		method:'post',
		url:'function.php',
		data:{
			user:'details',
			id:id
		},
		success:function(data){
			//alert(data);
			$('#view_profile').html(data);
			$('#more').modal('show'); 
			
		}
	});
});


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

$(document).on('click','#ad_workupdate',function(e){
	e.preventDefault();
	var title = $('#title').val();
	varifynull(title,"Title must be filled!");
	var details = $('#details').val();
	varifynull(details,"Details must be filled!");
	var s_no = $('#sno').val();
if(flag===0)
{	
	$.ajax({
		method:'post',
		url:'function.php',
		data:{
			key:'updatework',
			titlekey:title,
			detailskey:details,
			s_nokey:s_no
		},
		success:function(data){
			swal({
				  text: data,
				  type: 'success',
				  title: 'Well Done',
				  button: {
				    text: "OK!",
				    closeModal: false,
				  },
				})
				.then(willSearch => {
				  if (willSearch) {
				    window.location.href="edit_task.php";
				  }
				})
		}
	});
}
});
