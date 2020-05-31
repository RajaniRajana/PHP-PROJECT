function validation(){
			var firstname=document.getElementById("fname").value;
			var email=document.getElementById("mail").value;
			var add=document.getElementById("add").value;	
			var fname_error=false;
			var mail_error=false;
			var add_error=false;
		if(firstname==""){
		document.getElementById("fname_error").innerHTML="Enter Firstname";
			fname_error=true;		
		    }
		if(fname_error==true){
			document.getElementById("fname").focus();
			return false;
		    }
	        else if(firstname.match(/^[A-Za-z]+$/)==null)
				{
					document.getElementById("fname_error").innerHTML="Please enter characters only";
					document.getElementById("fname").focus();
					return false;
				}
			if(email==""){
		  document.getElementById("mail_error").innerHTML="Enter Valid Email";
		   mail_error=true;
	      }
		if(mail_error==true){
			document.getElementById("mail").focus();
			return false;
		      }
			if(add==""){		
		document.getElementById("add_error").innerHTML="Enter Address";
		  add_error=true;
	         }
		  if(add_error==true){
	       document.getElementById("add").focus();
			return false;
		     }		
		}
			function clear_fname_error(){
				document.getElementById("fname_error").innerHTML="";
			}
			function clear_mail_error(){
				document.getElementById("mail_error").innerHTML="";
			}
			function clear_add_error(){
				document.getElementById("add_error").innerHTML="";
			}
function myvalidation(){
			var email=document.getElementById("mail").value;
			var pwd=document.getElementById("pwd").value;
			var mail_error=false;
			var pwd_error=false;
			if(email==""){
		  document.getElementById("mail_error").innerHTML="Enter Valid Email";
		   mail_error=true;
	      }
		if(mail_error==true){
			document.getElementById("mail").focus();
			return false;
		      }	
						
			if(pwd==""){
		document.getElementById("pwd_error").innerHTML="Enter Password";
		  pwd_error=true;
	         }
		  if(pwd_error==true){
	       document.getElementById("pwd").focus();
			return false;
		  }
		}	
			function clear_pwd_error(){
				document.getElementById("pwd_error").innerHTML="";
			} 
			function clear_mail_error(){
				document.getElementById("mail_error").innerHTML="";
			}
function formvalidation(){
			var firstname=document.getElementById("fname").value;
			var lastname=document.getElementById("lname").value;
			var number=document.getElementById("number").value;
			var email=document.getElementById("email").value;
			var pwd=document.getElementById("pwd").value;
			var cpwd=document.getElementById("cpwd").value;
			var add=document.getElementById("add").value;
			var city=document.getElementById("city").value;
			var checkEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			var fname_error=false;
			var lname_error=false;
			var number_error=false;
			var email_error=false;
			var pwd_error=false;
			var cpwd_error=false;
			var add_error=false;
			var city_error=false;
			
		if(firstname==""){
		document.getElementById("fname_error").innerHTML="Enter Firstname";
			fname_error=true;		
		    }
		if(fname_error==true){
			document.getElementById("fname").focus();
			return false;
		    }
			else if(firstname.match(/^[A-Za-z]+$/)==null)
				{
					document.getElementById("fname_error").innerHTML="Please enter characters only";
					document.getElementById("fname").focus();
					return false;
				}
	    if(lastname==""){
		  document.getElementById("lname_error").innerHTML="Enter Lastname";
		   lname_error=true;
	      }
		if(lname_error==true){
			document.getElementById("lname").focus();
			return false;
		      }
			else if(lastname.match(/^[A-Za-z]+$/)==null)
				{
					document.getElementById("lname_error").innerHTML="Please enter characters only";
					document.getElementById("lname").focus();
					return false;
				}
			if(number==""){
		document.getElementById("number_error").innerHTML="Enter Valid Number";
		   number_error=true;
	         }
	       if(number_error==true){
		   document.getElementById("number").focus();
			return false;
	             }	
			else if(isNaN(number)==true)
			    {
				document.getElementById("number_error").innerHTML="please enter numbers only";
					document.getElementById("number").focus();
					return false;
			    }
				else if(number.match(/[0-9]{10}/)==null)
			    {
				document.getElementById("number_error").innerHTML="please enter 10 numbers";
					document.getElementById("number").focus();
					return false;
			    }
			if(email==""){
		  document.getElementById("email_error").innerHTML="Enter Valid Email";
		   email_error=true;
	      }
		if(email_error==true){
			document.getElementById("email").focus();
			return false;
		      }
			else if(checkEmail.test(email)==false)
			    {
				document.getElementById("email_error").innerHTML="please enter valid email";
				document.getElementById("email").focus();
				return false;
			    }
			if(pwd==""){
		document.getElementById("pwd_error").innerHTML="Enter Password";
		  pwd_error=true;
	         }
		  if(pwd_error==true){
	       document.getElementById("pwd").focus();
			return false;
		     }
			if(cpwd==""){		
		document.getElementById("cpwd_error").innerHTML="Enter Valid Password";
		  cpwd_error=true;
	         }
		  if(cpwd_error==true){
	       document.getElementById("cpwd").focus();
			return false;
		     }	
			else if(pwd!=cpwd)
			{
				document.getElementById("cpwd_error").innerHTML="Password should match with confirmpassword";
				document.getElementById("cpwd").focus();
				return false;
			}
			if(add==""){		
		document.getElementById("add_error").innerHTML="Enter Address";
		  add_error=true;
	         }
		  if(add_error==true){
	       document.getElementById("add").focus();
			return false;
		     }	
			if(city==""){		
		document.getElementById("city_error").innerHTML="Selet City";
		  city_error=true;
	         }
		  if(city_error==true){
	       document.getElementById("city").focus();
			return false;
		     }	
		}
			function clear_fname_error(){
				document.getElementById("fname_error").innerHTML="";
			}
			
			function clear_lname_error(){
				document.getElementById("lname_error").innerHTML="";
			}
			 
			function clear_number_error(){
				document.getElementById("number_error").innerHTML="";
			}	
			function clear_pwd_error(){
				document.getElementById("pwd_error").innerHTML="";
			} 
			function clear_cpwd_error(){
				document.getElementById("cpwd_error").innerHTML="";
			}
			function clear_email_error(){
				document.getElementById("email_error").innerHTML="";
			}
			function clear_add_error(){
				document.getElementById("add_error").innerHTML="";
			}
			function clear_city_error(){
				document.getElementById("city_error").innerHTML="";
			}
function adminform(){
			var pname=document.getElementById("pname").value;
			var price=document.getElementById("price").value;
			var file=document.getElementById("file").value;
			var category=document.getElementById("category").value;
			var pname_error=false;
			var price_error=false;
			var file_error=false;
			var category_error=false;	
		if(pname==""){
		document.getElementById("pname_error").innerHTML="Enter Product Name";
			pname_error=true;		
		    }
		if(pname_error==true){
			document.getElementById("pname").focus();
			return false;
		    }
			if(price==""){
		document.getElementById("price_error").innerHTML="Enter Price";
		   price_error=true;
	         }
	         else if(isNaN(price)==true)
	         {
	         	document.getElementById("price_error").innerHTML="Please enter numbers only";
		   document.getElementById("price").focus();
					return false;
	         }
	       if(price_error==true){
		   document.getElementById("price").focus();
			return false;
	             }	
			if(file==""){		
		document.getElementById("file_error").innerHTML="upload file";
		  file_error=true;
	         }
		  if(file_error==true){
			return false;
		     }	
			if(category==""){		
		document.getElementById("category_error").innerHTML="Selet category";
		  category_error=true;
	         }
		  if(category_error==true){
	       document.getElementById("category").focus();
			return false;
		     }	
		}
			function clear_pname_error(){
				document.getElementById("pname_error").innerHTML="";
			}
			function clear_price_error(){
				document.getElementById("price_error").innerHTML="";
			}	
			function clear_category_error(){
				document.getElementById("category_error").innerHTML="";
			}
			function clear_file_error(){
				document.getElementById("file_error").innerHTML="";
			}
	$(document).ready(function(){
	$(".h1").click(function(){
		var imgpath = $(this).attr('dir');
		$('.head1').html('<img src='+imgpath+'>');
	});
    $(".h2").click(function(){
		var imgpath = $(this).attr('dir');
		$('.head2').html('<img src='+imgpath+'>');
	});
    $(".h4").click(function(){
		var imgpath = $(this).attr('dir');
		$('.head4').html('<img src='+imgpath+'>');
	});
	$(".h0").click(function(){
		var imgpath = $(this).attr('dir');
		$('.head').html('<img src='+imgpath+'>');
	});
    $(".b2").click(function(){
		var imgpath = $(this).attr('dir');
		$('.beats').html('<img src='+imgpath+'>');
	});
    $(".h5").click(function(){
		var imgpath = $(this).attr('dir');
		$('.head5').html('<img src='+imgpath+'>');
	});
    $(".h7").click(function(){
		var imgpath = $(this).attr('dir');
		$('.head7').html('<img src='+imgpath+'>');
	});
	$(".qcy").click(function(){
		var imgpath = $(this).attr('dir');
		$('.buds').html('<img src='+imgpath+'>');
	});
	$("#search").mouseover(function(){
    $("#disp").show();
  });
	$("#search").mouseleave(function(){
    $("#disp").hide();
  });
	});
	$(document).ready(function(){
    $('#searchbar-icon').click(function(){
    $('#searchbar-input').animate({width: 'toggle'});
     $('#searchbar-input').focus();
    $("#searchbar-icon").toggle();
    $("#searchbar-cross").toggle(500);
  });
  
  $('#searchbar-cross').click(function(){
  	$('#searchbar-input').val("");
    $('#searchbar-input').animate({width: 'toggle'});
    $("#searchbar-cross").toggle();
    $("#searchbar-icon").toggle(500);
  });
  
});
	function login()
	{
		alert("please login to your account to buy products");
	}
	/*$(function () {
        $(".dialog").dialog({
            modal: true,
            autoOpen: false,
            title: "jQuery Dialog",
            width: 300,
            height: 150
        });
        $(".btnShow").click(function () {
            $('.dialog').dialog('open');
        });
    });*/
    $(document).ready(function(){
$('.pop').click(function() {
    $('.popup').fadeIn(800);
  });
  // popup close function
  $('.close_button').click(function() {
    $('.popup').fadeOut(800);
  });
   });
function openCity(evt, cityName) 
{
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();


