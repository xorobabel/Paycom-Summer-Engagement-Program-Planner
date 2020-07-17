function validateForm() {

  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

var x = document.forms["myForm"]["firstname"].value;
  if (x == "") {
    alert("FirstName must be filled out");
    return false;
  }

var a = document.forms["myForm"]["lastname"].value;
  if (a == "") {
    alert("LastName must be filled out");
    return false;
  }

var b = document.forms["myForm"]["email"].value;
  if (b == "") {
    alert("Email must be filled out");
    return false;
  }

  if(!mailformat.test(b))
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
