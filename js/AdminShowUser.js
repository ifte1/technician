$(document).ready(function(){

    var form= $('myform');

    $('#submit').click(function(){
     $.ajax({

        url:form.attr('action'),
        type: 'post',
        data: $("myform input"),

        success:  function(data)
        {
            console.log(data);
        }

     });

    });

   });


$('#displaydata').click(function(){
$.ajax({

url: 'Back_End/adminShowUser.php',
type: 'post',

success:function(responsedata)
{
   $('#response').html(responsedata);
}
  
});

});