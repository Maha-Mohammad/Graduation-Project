 function myfun() {
     var user_name = document.forms["myform"]["user_name"].value;
     var pass1 = document.forms["myform"]["pass1"].value;
     var pass2 = document.forms["myform"]["pass2"].value;
     var email = document.forms["myform"]["email"].value;
     var user_phone = document.forms["myform"]["user_phone"].value;
     var user_status = document.forms["myform"]["user_status"].value;
     var patt1 = /\D/g;
     if (user_name == "" || pass1 == "" || pass2 == "" || email == "" || user_phone == "" || user_status == "") {
         $('.error').html('يجب ملئ جميع البيانات ');
         return false;
     }
       else if (user_phone.match(patt1)) {
         $('.error').html('رقم الهاتف يجب ان يحتوي فقط على ارقام');
         return false;
     }
      else if (pass1.length < 8 || pass2.length < 8) {
         $('.error').html('كلمة المرور يجب ان تتكون من ثمان منازل');
         return false;
     } else if (pass1 != pass2) {
         $('.error').html('كلمتا المرور غير متطابقتان');
         return false;
     } else if (pass1.search(/[A-Z]/) == -1 || pass1.search(/[a-z]/) == -1 || pass1.search(/[0-9]/) == -1 || p.search(/[!/@/#/$/%/^/&/*/(/)]/) == -1) {
         $('.error').html('يجب ان تحتوي كلمة المرور على احرف كبيرة وصغيرة وارقام واشارات خاصة').css('font-size', '14px');
         return false;
     }
    


 }