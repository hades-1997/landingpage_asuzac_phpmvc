$(document).ready(function (){
   $("#email").keyup(function (){
       var email = $(this).val();
       $.post("./Ajax/checkEmail",{un:email},function (data){
           var emailn = $("#message_email").html(data);
        //    console.log(data);
       })
   }) ;

});