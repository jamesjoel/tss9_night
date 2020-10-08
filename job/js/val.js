$(document).ready(function(){

	$("#submit-btn").click(function(){
		
		var a = $("#full_name").val();
		var b = $("#username").val();
		var c = $("#password").val();
		var d = $("#re_password").val();
		var e = $("#address").val();
		var f = $("#city").val();
		var g = $("#contact").val();

		var h = $("#male").is(":checked");
		// if #male is checked then h = true
		// otherwise h = false
		var i = $("#female").is(":checked");

		if(h==false && i==false)
		{
			$("#gender_msg").html("Select Your Gender");
		}
		else
		{

			$("#gender_msg").html("");
		}



		if(a=="")
		{
			$("#full_name_msg").html("Insert Your Full Name");
		}
		else
		{
			$("#full_name_msg").html("");

		}
		if(b=="")
		{
			$("#username_msg").html("Insert Your Username/Email");
		}
		else
		{
			$("#username_msg").html("");
			var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(reg.test(b)==false)
			{
				$("#username_msg").html("Email Id is not correct");
			}
			else
			{
				$("#username_msg").html("");

			}

		}
		if(c=="")
		{
			$("#password_msg").html("Insert Your Password");
		}
		else
		{
			$("#password_msg").html("");

		}


		if(d=="")
		{
			$("#re_password_msg").html("Insert Your Re-Password");
		}
		else
		{
			$("#re_password_msg").html("");
			if(c != d)
			{
				$("#re_password_msg").html("Your Re-Password is not correct");
			}
			else
			{

				$("#re_password_msg").html("");
			}

		}
		if(e=="")
		{
			$("#address_msg").html("Insert Your Address");
		}
		else
		{
			$("#address_msg").html("");

		}

		if(f=="Select")
		{
			$("#city_msg").html("Select Your City");
		}
		else
		{
			$("#city_msg").html("");

		}

		if(g=="")
		{
			$("#contact_msg").html("Insert Your Contact Number");
		}
		else
		{
			$("#contact_msg").html("");
			/*
			isNaN()   ---  is Not a Number
			*/

			if(isNaN(g)==true)
			{
				$("#contact_msg").html("Insert Number/Digits only");
			}
			else
			{
				$("#contact_msg").html("");
				if(g.length != 10)
				{
					$("#contact_msg").html("Insert 10 Digits");

				}
				else
				{
					$("#contact_msg").html("");

				}
			}
		}

		return false;

	});

});