
   function validate ()
   {
          var name = document.getElementById('name').value;
          var email = document.getElementById('email').value;
          var password = document.getElementById('passwd').value;
          var contact = document.getElementById('contact').value;
          var city = document.getElementById('city').value;
          var address = document.getElementById('address').value;
          
    if(name==0||name==null||email==0||email==null||password==0||password==null||contact==0||contact==null||city==0||city==null||address==0||address==null)
    {
     if(name==0||name==null)    
     {	
    
          	 document.getElementById('name_er').style.color = "red";
             document.getElementById('name').placeholder = "Enter Name Here";
          	 
          	 
      }
     else if(email==0||email==null)    
     {	
          	 document.getElementById('email_er').style.color = "red";
             document.getElementById('email').placeholder = "Enter Email Here";
          	 return false;
          	 
      }
     else if(password==0||password==null)    
     {	
          	 document.getElementById('passwd_er').style.color = "red";
             document.getElementById('passwd').placeholder = "Password Required";
          	 return false;
       
      }
     else if(contact==0||contact==null)    
     {	
          	 document.getElementById('contact_er').style.color = "red";
             document.getElementById('contact').placeholder = "Mobile no required";
          	 return false;
          	
      }
     else if(city==0||city==null)    
     {	
          	 document.getElementById('city_er').style.color = "red";
             document.getElementById('city').placeholder = "City required";
          	 return false;
          
      }
     else if(address==0||address==null)    
     {	
          	 document.getElementById('address_er').style.color = "red";
             document.getElementById('address').placeholder = "Enter Address";
          	 return false;
          	
      }
      else{
      	document.getElementById('address_er').style.color = "black";
      	document.getElementById('name_er').style.color = "black";
      	document.getElementById('email_er').style.color = "black";
      	document.getElementById('password_er').style.color = "black";
      	document.getElementById('city_er').style.color = "black";
      	document.getElementById('contact_er').style.color = "black";
      }
      return false;
  }
      else
      {
      	return true;
      }
     
     }

