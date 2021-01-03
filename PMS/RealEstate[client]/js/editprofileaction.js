  function validate(){
    var username = document.getElementById("username");
    var name = document.getElementById("name");
    var phone = document.getElementById("phone");
    var gender = document.getElementById("gender");
    var email = document.getElementById("email");
    var address = document.getElementById("address");
    
    if(username.value == ""){
      alert("Must enter username");
    }
    if(name.value == ""){
      alert("Must enter name");
    }
    if(phone.value == ""){
      alert("Must enter phone");
    }
    if(gender.value == ""){
      alert("Must enter gender");
    }
    if(email.value == ""){
      alert("Must enter email");
    }
    if(address.value == ""){
      alert("Must enter address");
    }

  }