function validatePassword() {
  var password = document.getElementById("passcode").value;
  var hasLetter = false;
  var hasNumber = false;
  var hasSpecialCharacter = false;
  
  for (var i = 0; i < password.length; i++) {
      var char = password[i];
  
      if (char >= 'a' && char <= 'z') {
          hasLetter = true;
          if(char >= 'A' && char <= 'Z'){
            hasLetter= true;
          }
      } else if (char >= '0' && char <= '9') {
          hasNumber = true;
      } else {
          hasSpecialCharacter = true;
      }
  }
  
  var check = hasLetter && hasNumber && hasSpecialCharacter;
  
  if (!check && password.length < 6) {
      alert("Your password must be at least 6 characters long and must contain both alphanumeric and special characters.");
  } else if (!check) {
      alert("Your password must contain both alphanumeric and special characters.");
  } else if (password.length < 6) {
      alert("Password must be at least 6 characters long.");
  }
}

