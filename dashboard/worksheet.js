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
				    window.location.href="login.php";
				  }
				})
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
				    window.location.href="login.php";
				  }
				})
		}
	});
}
});

var idleTime = 0;
      $(document).ready(function () {
          //Increment the idle time counter every minute.
          var idleInterval = setInterval(timerIncrement, 20000); // 1 minute

          //Zero the idle timer on mouse movement.
          $(this).mousemove(function (e) {
              idleTime = 0;
          });
          $(this).keypress(function (e) {
              idleTime = 0;
          });
      });

function timerIncrement() {
          idleTime = idleTime + 1;
          if (idleTime > 1) { // 3 minutes
               Swal({
                  title: 'Have Some Coffee!',
                  text: 'Working for long time can make you feel hazy! Have some walk and some coffee to recharge yourself for better productivity and enthusiasm!',
                  imageUrl: '../assets/img/coffee.jpg',
                  imageWidth: 400,
                  imageHeight: 200,
                  imageAlt: 'Custom image',
                  animation: false
                })
          }
          if (idleTime > 2) { // 2 minutes
               let timerInterval
                Swal({
                  title: 'LOGING OUT',
                  html: 'You will be loged out in <strong></strong> seconds. Due to long inactivity!',
                  timer: 5000,
                  onBeforeOpen: () => {
                    Swal.showLoading()
                    timerInterval = setInterval(() => {
                      Swal.getContent().querySelector('strong')
                        .textContent = Swal.getTimerLeft()
                    }, 1000)
                  },
                  onClose: () => {
                    clearInterval(timerInterval)
                  }
                }).then((result) => {
                  if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.timer
                  ) {
                    console.log('I was closed by the timer')
                    window.location.replace("logout.php");
                  }
                })
          }
      }