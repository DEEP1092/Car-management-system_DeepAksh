<!--Begin
function Login(form)
 {
  username=new Array("Omkar","","");
  password=new Array("Om!","","");
  page="secretpage"+".html";
  
  
  if(form.username.value==" "&&form.password.value==" ")
	{
	      alert("Please enter the loginname and password !!!");
		
	}	
  else

	{

    if(form.username.value=="Omkar"&&form.password.value=="Om!"||
   	   form.username.value==""&&form.password.value==""|| 
	   form.username.value==""&&form.password.value=="")
	}
	{
	self.location.href=page;
	}
	else
	{
	alert("Either the username or password iz incorrect\nPlease try agan !!!");
	form.username.focus();
	}
	return true;
	}
	//End-->
	
	
	
	