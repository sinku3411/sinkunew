function check(){

	var pass1 = document.getElementById('pass1');
	var pass2 = document.getElementById('pass2');
	if(pass1==pass2)
	{
		alert('New Password and Confirm Password are Not Matching');
		return 0;
	}
	else{
		return 1;
	}
}