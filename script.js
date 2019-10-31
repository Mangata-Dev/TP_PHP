$(document).ready(function(){

  $("#my-form").submit(function(event){
    event.preventDefault();
    var value1  = $("#value1").val();
    var value2  = $("#value2").val();
    var operateur  = $("#operateur").val();
    $.ajax({
         url : 'calculateur.php',
         type : 'POST' ,
         data : 'val1=' + value1 + '&val2=' + value2 + '&operator=' + operateur,
         dataType : "json",
         success : function($response){
          alert($response);
         },
         error : function($response, statut, erreur){
         }
      });

  });
});
