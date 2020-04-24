var app = new Framework7({
  // App root element
  root: '#app',
  // App Name
  name: 'Calculadora de Combustível',
  // App id
  id: 'gmail.com@marciolourens',
  // Enable swipe panel
  panel: {
      swipe: 'left',
  },
  // Add default routes
  routes: [{
          path: '/home/',
          url: 'index.html',
      },


  ],
});

var mainView = app.views.create('.view-main');

$(document).ready(function() {
  $('#btn-calcular').click(function() {
      etanol = $('#etanol').val();
      gasolina = $('#gasolina').val();
      resultado = 0;
      men = "";



      if (etanol == "" || gasolina == "") {
          app.dialog.alert('Informe o preço do Etanol e da Gasolina ', 'AVISO');
          return false;
      }
      etanol = parseFloat(etanol);
      gasolina = parseFloat(gasolina);


      porcentagem = etanol / gasolina;
      porcentagem = porcentagem.toFixed(2);

      if (porcentagem > 0.7) {
          resultado = "Gasolina";
          men = "O Etanol custa " + (porcentagem * 100).toFixed(0) + "% ";
      } else {
          resultado = "Etanol";
          men = "O Gasolina custa " + (porcentagem * 100).toFixed(0) + "%";

      }

      $('.mensagem').html(resultado);
      $('.porc').html(men + "comparado a " + resultado);

      $('#dinheiro,#litros').attr('disabled', false);


  }); //Fim do BTN-CALCULAR

  $('.btn-novo').click(function() {
      $('#etanol, #gasolina,#dinheiro,#litros,#cidade,#pista').val("");
      $('.mensagem, .porc').html("");
      $('#btn-calcular,#etanol,#gasolina').attr('disabled', false);
      desabilitar();
  });

  desabilitar();
  //iniciando a função Dinheiro
  $('#dinheiro').on('input', function() {
      $('.btn-novo').attr('disabled', false);

      $('#btn-calcular,#etanol,#gasolina').attr('disabled', true);
      dinheiro = $('#dinheiro').val();



      //vereficando se está digitando o dinheiro
      if (dinheiro > 0) {
          $('#litros').attr('disabled', true); //attr= atributo
          dinheiro = parseFloat(dinheiro);

          if (resultado == "Gasolina") {
              litros = dinheiro / gasolina;
          } else {
              litros = dinheiro / etanol;
          }

          $('.litros-visible').show(); //aparecendo 
          $('#lb_litros').html(litros.toFixed(2).replace('.', ',')); //toFixed() = casas decimais
          $('.result').html(resultado);
          $('.consumo').show();
          $('#cidade,#pista').val();

      } else {
          $('#litros').attr('disabled', false);
          $('.litros-visible').hide();
          $('.consumo').hide();
      }
  }); //Fim do input dinheiro

  //Inciando a função litros
  $('#litros').on('input', function() {
      $('.btn-novo').attr('disabled', false);
      $('#btn-calcular,#etanol,#gasolina').attr('disabled', true);

      litros = $('#litros').val();
      if (litros > 0) {
          $('#dinheiro').attr('disabled', true);
          litros = parseFloat(litros);

          if (resultado == "Gasolina") {
              dinheiro = litros * gasolina;
          } else {
              dinheiro = litros * etanol;
          }
          $('.dinheiro-visible').show();
          $('#lb_dinheiro').html(dinheiro.toFixed(2).replace('.', ',') + ' de ' + resultado);
          $('.consumo').show();

      } else {
          $('#dinheiro').attr('disabled', false);
          $('.dinheiro-visible').hide();
          $('.consumo').hide();
      }

  });


  $('.consumo').hide();
   
  //verifica valor do input cidade
  $('#cidade').on('input',function(){
var cidade = $('#cidade').val();
cidade = parseFloat(cidade);
if(litros!=""){
  resultcidade = litros * cidade;

}
$('.m-cidade').html(resultcidade.toFixed(2)+"km na cidade");


  });
   //verifica valor do input pista
   $('#pista').on('input',function(){
    var pista = $('#pista').val();
    pista = parseFloat(pista);
    if(litros!=""){
      resultpista = litros * pista;
    
    }
    $('.m-pista').html(resultpista.toFixed(2)+"km na pista");
    
    
      });

}); //Fim do documento

function desabilitar() {
  //Desabilitar segunda parte
  $('.btn-novo,#dinheiro,#litros').attr('disabled', true);
  $('.litros-visible,.dinheiro-visible').hide();
}