var validator=new Validator("frmRegister");

validator.addValidation("donor_name","req","Please enter full name");
validator.addValidation("donor_name","alpha","Enter valid name");
validator.addValidation("donor_name","maxlen=30","Maximum 30 characters allowed");

validator.addValidation("username","req","Please enter username");
validator.addValidation("username","regexp=^[A-Za-z]+[A-Za-z0-9_]+[A-Za-z0-9]$");
validator.addValidation("username","minlen=5","Minimum 5 characters required for username");
validator.addValidation("username","maxlen=20","Maximum 20 characters allowed for username");

validator.addValidation("password","req","Please enter password");
validator.addValidation("password","minlen=6","Minimum 6 characters required for password");
validator.addValidation("password","maxlen=20","Maximum 20 characters allowed for password");

//validator.addValidation("dob","req","Please enter date of birth");

validator.addValidation("bloodgroup","dontselect=0","Please select a bloodgroup");

validator.addValidation("weight","numeric","Please enter valid weight");

validator.addValidation("res_phno","maxlen=15","Maximum characters allowed is 15");
validator.addValidation("res_phno","regexp=[0-9- ]","Enter a valid phone no");

validator.addValidation("off_phno","maxlen=15","Maximum characters allowed is 15");
validator.addValidation("off_phno","regexp=[0-9- ]","Enter a valid phone no");

validator.addValidation("mob_no","maxlen=10","Maximum characters allowed is 10");
validator.addValidation("mob_no","req","Please enter your mobile number");
validator.addValidation("mob_no","regexp=9{1}[0-9]{9}","Enter a valid ethiopian mobile number");

validator.addValidation("emailid","maxlen=50");
validator.addValidation("emailid","req","Please enter email id");
validator.addValidation("emailid","email","Enter a valid email id (eg: name@domain.com)");

validator.addValidation("address1","req","Please enter your address");
validator.addValidation("address1","maxlen=50","Maximum characters allowed is 50");
validator.addValidation("address2","maxlen=50","Maximum characters allowed is 50");
validator.addValidation("city","dontselect=0","Please select your city");

validator.addValidation("message","maxlen=100","Maximum characters allowed is 100");

validator.addValidation("cpassword","req","Please enter Confirm Password");

validator.addValidation("vercode","req","Please enter Image Verification Code");

validator.setAddnlValidationFunction("CheckRetypePassword");
function CheckRetypePassword()
{
  var frm = document.frmRegister;
  if(frm.password.value != frm.cpassword.value)
  {
	alert('The password and confirm password does not match!');
	return false;
  }
  else
  {
	return true;
  }
}
