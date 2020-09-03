function validateForm() {
// See my previous comments in JavaScript files.
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

var x = document.forms["myForm"]["firstname"].value;
  if (x === "") {
    alert("FirstName must be filled out");
    return false;
  }

var a = document.forms["myForm"]["lastname"].value;
  if (a === "") {
    alert("LastName must be filled out");
    return false;
  }

var b = document.forms["myForm"]["workplace"].value;
    if (b === "") {
      alert("Workplace must be filled out");
      return false;
    }

var c = document.forms["myForm"]["schoolname"].value;
      if (c === "") {
        alert("School Name must be filled out");
        return false;
      }

var e = document.forms["myForm"]["password"].value;
  if (e === "") {
    alert("Password must be filled out");
    return false;
  }

var f = document.forms["myForm"]["email"].value;
    if (f === "") {
      alert("Email must be filled out");
      return false;
    }

    if(!(f.match(mailformat)))
    {
    alert("Enter valid email address");
            return false;

    }
}
