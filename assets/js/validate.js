$(document).ready(function () { 
     //Name Validation
     $('#namecheck').hide();
    
     let nameerror=true;
     $('#fname').keyup(function () { 
         validatefname(); 
     }); 
     function validatefname() {
         var x=$('#fname').val();
         if(x.length==0 || !isNaN(x) ) {
             $('#namecheck').show();
             nameerror=false;
         }
         else{
             $('#namecheck').hide();
             nameerror=true;
         }
         return nameerror;
 
     }
     $('#lname').keyup(function () { 
         validatelname(); 
     }); 
     function validatelname() {
         var x=$('#lname').val();
         if(x.length==0 || !isNaN(x) ) {
             $('#namecheck').show();
             nameerror=false;
         }
         else{
             $('#namecheck').hide();
             nameerror=true;
         }
         return nameerror;
 
     }
 
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
      else if((usernameValue.length < 3)||  
              (usernameValue.length > 10)) { 
          $('#usercheck').show(); 
          $('#usercheck').html 
("**length of username must be between 3 and 10"); 
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
        if ((passwrdValue.length < 8)) { 
            $('#passcheck').show(); 
            $('#passcheck').html 
("**length of your password must be greater than 8"); 
            $('#passcheck').css("color", "red"); 
            passwordError = false; 
            return false; 
        } else { 
            $('#passcheck').hide(); passwordError = true; 
            passwordError = true; 
            return true;
        } 
    } 
    
  
        function check(n, m) { 
            if (n < 6) { 
                percentage = 0; 
               
            } else if (n < 8) { 
                percentage = 20; 
                
            } else if (n < 10) { 
                percentage = 40; 
                
            } else { 
                percentage = 60; 
            
            } 
  
            // Check for the character-set constraints 
            // and update percentage variable as needed. 
            
            //Lowercase Words only 
            if ((m.match(/[a-z]/) != null))  
            { 
                percentage += 10; 
            } 
            
            //Uppercase Words only 
            if ((m.match(/[A-Z]/) != null))  
            { 
                percentage += 10; 
            } 
            
            //Digits only 
            if ((m.match(/0|1|2|3|4|5|6|7|8|9/) != null))  
            { 
                percentage += 10; 
            } 
            
            //Special characters 
            if ((m.match(/\W/) != null) && (m.match(/\D/) != null)) 
            { 
                percentage += 10; 
            }
            if (percentage<=50){
                $('#pass').html('Strength:&nbsp;<span style="color:red;">Weak</span>');
            } 
            if (percentage>50){
                $('#pass').html('Strength:&nbsp;<span style="color:#46A049;">Strong</span>');
            }
        }


    // Validate Confirm Password 
    $('#conpasscheck').hide(); 
    let confirmPasswordError = true; 
    $('#conpassword').keyup(function () { 
        validateConfirmPasswrd(); 
    }); 
    function validateConfirmPasswrd() { 
        let confirmPasswordValue =  
            $('#conpassword').val(); 
        let passwrdValue =  
            $('#password').val(); 
        if (passwrdValue != confirmPasswordValue) { 
            $('#conpasscheck').show(); 
            $('#conpasscheck').html( 
                "**Password didn't Match"); 
            $('#conpasscheck').css( 
                "color", "red"); 
            confirmPasswordError = false; 
            return false; 
        } else { 
            $('#conpasscheck').hide(); 
            confirmPasswordError = true;
            return true;
        } 
    }
 //Validate Age
 $('#agecheck').hide();
    
    
 let ageerror=true;
 $('#age').keyup(function () { 
     validateage(); 
 }); 
 function validateage() {
     var x=$('#age').val();
     if(x.length<1 || x<1 || isNaN(x) ) {
         $('#agecheck').show();
         ageerror=false;

     }
     else{
         $('#agecheck').hide();
         ageerror=true;
     }
     return ageerror;

 }
    // Submitt button 
    $('#submitbtn').click(function () { 
        validatefname();
        validatelname();
        validateUsername(); 
        validatePassword(); 
        validateConfirmPasswrd();
        validateage(); 
        if ((usernameError) &&  
            (passwordError) &&  
            (confirmPasswordError) &&
            (ageerror) &&
            (nameerror)){
                
            return true; 
        } else { 
          
            return false; 
        } 
    }); 



});