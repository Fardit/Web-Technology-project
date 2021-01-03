 function validateForm() {
  var name = document.forms["signup_form"]["name"].value;
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  var phone = document.forms["signup_form"]["phone"].value;
  if (phone == "") {
    alert("Phone must be filled out");
    return false;
  }
  var gender = document.forms["signup_form"]["gender"].value;
  if (gender == "") {
    alert("Gender must be filled out");
    return false;
  }
  var email = document.forms["signup_form"]["email"].value;
  if (email == "") {
    alert("Email must be filled out");
    return false;
  }
  var address = document.forms["signup_form"]["address"].value;
  if (address == "") {
    alert("Address must be filled out");
    return false;
  }
  var username = document.forms["signup_form"]["username"].value;
  if (username == "") {
    alert("Email must be filled out");
    return false;
  }
  var password = document.forms["signup_form"]["password"].value;
  if (password == "") {
    alert("Password must be filled out");
    return false;
  }
  var cpassword = document.forms["signup_form"]["cpassword"].value;
  if (cpassword == "") {
    alert("Password must be filled out again");
    return false;
  }

}