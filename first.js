
    function validate()                                    
    { 
    var email1 = document.forms["signintemp"]["email"].value;               
    var pass1 = document.forms["signintemp"]["pass"];    
    var rpass1 = document.forms["signintemp"]["rpass"];  
    var mno1 =  document.forms["signintemp"]["mno"].value;  
    var address1 = document.forms["signintemp"]["address"];   
	var gst1 = document.forms["signintemp"]["gst"];
	var sname1 = document.forms["signintemp"]["sname"];
	var dscp1 = document.forms["signintemp"]["dscp"];
    var passw= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
       
    if (email1.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email1.focus(); 
        return false; 
    } 
   
    if (email1.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email1.focus(); 
        return false; 
    } 
   
    if (email1.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email1.focus(); 
        return false; 
    } 
   
    /*
    if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check=false;
        }*/
    if (mno1.value == "")                           
    { 
        alert("Please enter your telephone number."); 
        mno1.focus(); 
        return false; 
    } 
		if (mno1.value.length < 10 || mno1.value.length > 10)                           
    { 
        alert("Please enter valid telephone number."); 
        mno1.focus(); 
        return false; 
    }   
		if (parseInt(mno1.value.replace(!/^[0-9]+$/g, ''))<= 999999999)                           
    { 
        alert("Please enter valid phone number."); 
        mno1.focus(); 
        return false; 
    }   
    if (pass1.value == "")                        
    { 
        window.alert("Please enter your password"); 
        pass1.focus(); 
        return false; 
    } 
    
   if(pass1.value.match(rpass1))
   {
      window.alert("correct password");
   }
   else
   {
	   window.alert("both password should be match!");
   }
   
  
    }