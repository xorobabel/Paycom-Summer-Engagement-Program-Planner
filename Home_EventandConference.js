function validateForm() {
// See my comment in EventSignUp.js on variable types. This file also needs the indentation cleaned up.

  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }

var a = document.forms["myForm"]["location"].value;
  if (a == "") {
    alert("Location must be filled out");
    return false;
  }

var b = document.forms["myForm"]["date"].value;
    if (b == "") {
      alert("Date must be filled out");
      return false;
    }

var c = document.forms["myForm"]["time"].value;
      if (c == "") {
        alert("Time must be filled out");
        return false;
      }

var d = document.forms["myForm"]["description"].value;
        if (d == "") {
          alert("Description must be filled out");
          return false;
        }
}