$(document).ready(function(){
 $("#calcular").click(function(){
 // $( "#resultado").html("Aguarde. calculando......");
  $( "#resultado").html("<iframe src='https://giphy.com/embed/3oEjI6SIIHBdRxXI40' width='100' height='100' frameBorder='0' class='giphy-embed' allowFullScreen></iframe><p><a href='https://giphy.com/gifs/mashable-3oEjI6SIIHBdRxXI40'>via GIPHY</a></p>");
  
    $.ajax({
        type: "POST",
        url: "https://www.limeiraweb.com.br/alisson/calcularfrete.php",
        data: $("#form1").serialize(),
        success:  function (resposta){
      $( "#resultado").html(resposta);
        },
        error: function (resposta){
      alert("Deu erro" + resposta);
       }
    });  
   });
});