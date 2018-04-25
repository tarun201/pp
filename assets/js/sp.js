function validate()
{
  //Mobile Number validation
  if(isNaN(document.myform.mobile_num.value) || document.myform.mobile_num.value.length != 10 )
  {
    document.myform.mobile_num.focus();
    document.getElementById("mobile_error").className= "input-group-addon alert-danger";
    document.getElementById("mobile_error").innerHTML="Enter 10-Digits!";
    return false;
  }

  //Emergency-Mobile Number validation
  if(isNaN(document.myform.e_number.value) || document.myform.e_number.value.length != 10 )
  {
    document.myform.e_number.focus();
    document.getElementById("e_mob_error").className= "input-group-addon alert-danger";
    document.getElementById("e_mob_error").innerHTML="Enter 10-Digits!";
    return false;
  }

  // Emergency Number Country code validation
  if(isNaN(document.myform.cc2.value))
  {
    document.myform.cc2.focus();
    document.getElementById("e_mob_error").className= "input-group-addon alert-danger";
    document.getElementById("e_mob_error").innerHTML="Enter Digits!";
    return false;
  }

  // Mobile Number Country code validation
  if(isNaN(document.myform.cc1.value))
  {
    document.myform.cc1.focus();
    document.getElementById("mobile_error").className= "input-group-addon alert-danger";
    document.getElementById("mobile_error").innerHTML="Enter Digits!";
    return false;
  }

  //Blood group validation
  if(document.myform.bg.value == 1)
  {
    document.myform.bg.focus();
    document.getElementById("bg_error").className="d-block alert alert-danger";
    return false;
  }

  // Get the checkbox
  var checkBox = document.getElementById("checkbox");

  // If the checkbox is checked
  if (checkBox.checked != true)
  {
    document.myform.bg.focus();
    return false;
  }
}
