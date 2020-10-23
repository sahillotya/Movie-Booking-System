$(document).ready(function () { 
    // Validate Username 
    $('#usercheck').hide();     
    let usernameError = true; 
    $('#username').keyup(function () { 
        validateUsername(); 
    }); 
      
    function validateUsername() { 
      let usernameValue = $('#username').val(); 
      if (usernameValue.length == '') { 
      $('#usercheck').show(); 
          usernameError = false; 
          return false; 
      }  
      else { 
          $('#usercheck').hide(); 
          usernameError = true;
          return true;
      } 
    }
    // Validate Password 
    $('#passcheck').hide(); 
    let passwordError = true; 
    var percentage = 0; 
    $('#password').keyup(function () { 
        validatePassword(); 
        check($('#password').val().length,$('#password').val());
    }); 
    function validatePassword() { 
        let passwrdValue =  
            $('#password').val(); 
        if (passwrdValue.length == '') { 
            $('#passcheck').show(); 
            passwordError = false; 
            return false; 
        }  
        else { 
            $('#passcheck').hide(); passwordError = true; 
            passwordError = true; 
            return true;
        } 
    } 
    // Submitt button 
    $('#submitbtn').click(function () { 
        validateUsername(); 
        validatePassword();
        if ((usernameError) &&  
            (passwordError)){
                
            return true; 
        } else { 
          
            return false; 
        } 
    }); 



});