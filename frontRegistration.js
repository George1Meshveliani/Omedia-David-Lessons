
function showPassword() {
    var x = document.getElementById("psw");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
    return x.type;
  }

  var myInput = document.getElementById("psw");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");

  var name = document.getElementById("name");

  var mySecondInput = document.getElementById("rpsw")
  
  // When the user clicks on the password field, show the message box
  myInput.onfocus = function() {
    document.getElementById("mess").style.display = "block";
  }
   
  // When the user clicks outside of the password field, hide the message box
 

  mySecondInput.onfocus = function() {
    document.getElementById("mess").style.display = "block";
  }
   
  // When the user clicks outside of the password field, hide the message box
 
  
  // When the user starts to type something inside the password field
  myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {  
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }
    
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {  
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }
  
    // Validate numbers
    var numbers = /[0-11]/g;
    if(myInput.value.match(numbers)) {  
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }
    
    // Validate length
    if(myInput.value.length >= 12) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }

     
  }

 /* mySecondInput.onkeyup = function() {
    var mySecondInputValue = mySecondInput.value;
      //Compare repeated password to ordinary one
      if(mySecondInputValue.value.match(myInput.value)) {
        rpsw1.classList.remove("invalid");
        rpsw1.classList.add("valid");
      } else {
        rpsw1.classList.remove("valid");
        rpsw1.classList.add("invalid");
      }
  }*/

/*function checkEmptySpaces() {
  var x = document.forms["myForm"]["name"].value;
  if(x == " " || x == null) {
    alert("You should fullfill all inputs");
    return false;
  } 
}*/

var check = function() {
  if (document.getElementById('psw').value ==
    document.getElementById('rpsw').value) {
    document.getElementById('message').style.color = 'green';
  } else {
    document.getElementById('message').style.color = 'red';
  }
}
 