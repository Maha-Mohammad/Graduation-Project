 function myfun() {
   var pass1 = document.forms["myform"]["user_pass1"].value;
    var pass2 = document.forms["myform"]["user_pass2"].value;  
     
     if ( pass1 == "" || pass2 == "") {
         $('.error').html('    يجب ملئ جميع البيانات ').css('margin-left', '30px');
         return false;
     }
     
      else if (pass1.length < 8 || pass2.length < 8) {
         $('.error').html('كلمة المرور يجب ان تتكون من ثمان منازل');
         return false;
     } else if (pass2.search(/[A-Z]/) == -1 || pass2.search(/[a-z]/) == -1 || pass2.search(/[0-9]/) == -1 || pass2.search(/[!/@/#/$/%/^/&/*/(/)]/) == -1) {
         $('.error').html('يجب ان تحتوي كلمة المرور على احرف كبيرة وصغيرة وارقام واشارات خاصة').css('font-size', '14px');
         return false;
     }
    


 }