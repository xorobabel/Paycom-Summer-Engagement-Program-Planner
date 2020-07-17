function validateForm() {

  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

var b = document.forms["myForm"]["email"].value;
  if (b == "") {
    alert("Email must be filled out");
    return false;
  }

  if(!(b.match(mailformat)))
  {
  alert("Enter valid email address");
          return false;

  }

var c = document.forms["myForm"]["password"].value;
  if (c == "") {
    alert("Password must be filled out");
    return false;
  }
}
