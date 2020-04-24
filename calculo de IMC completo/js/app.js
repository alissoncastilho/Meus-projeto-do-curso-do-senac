var app = new Framework7({
    // App root element
    root: '#app',
    // App Name
    name: 'My App',
    // App id
    id: 'com.myapp.test',
    // Enable swipe panel
    panel: {
      swipe: 'left',
    },
    // Add default routes
    routes: [
      {
        path: '/home/',
        url: 'index.html',
      },
    ],
    // ... other parameters
  });
  var mainView = app.views.create('.view-main');

$(document).ready(function(){
  $('#bt-calcular').click(function(){
   var peso = $('#peso').val();
   var altura = $('#altura').val();
 

  if(peso == "" || altura == ""){
    app.dialog.alert('Digite o peso e altura', "AVISO");
   return false;

  }
peso = parseFloat(peso);
altura = parseFloat(altura);

resultIMC = peso / (altura * altura);
 
resultIMC = resultIMC.toFixed(2);

 $('#peso').val("");
 $('#altura').val("");
 var man= "";
 var color="";

 if(resultIMC <= 18.5){
 men = " cuidado ! voce esta muito abaixo do peso.";
 color= "#FF0000";
 
     }else if(resultIMC >18.5 && resultIMC <= 24.99 ){
       men= "Parabens ! Pesso ideal (Contiue assim).";
       color= "#0000CD";
    
     }else if(resultIMC >24.99 && resultIMC <= 24.99 ){
      men= "Olha so voce esta um pouco acima do peso.";
      color= "#7FFF00";

}else if(resultIMC >29.99 && resultIMC <= 34.99 ){
  men= "Atenção obesidade Grau 1 (  Comece a fazer mais exercicios.)";
  color="#FF7F50";

}else if(resultIMC >34.99 && resultIMC <= 39.99 ){
  men= "Atenção obesidade Gua 2 (Procure um medico com urgencia).";
  color= "#B22222";
}else{
  men= "Atenção obesidade Gua 3 (pessa ajuda urgente).";
  color= "#FF0000";

};

  //app.dialog.alert('seu IMC é ' + resultIMC.replace('.',',') + '<br><br>' + men,'Aviso');


  demoGauge.update({
  value:resultIMC / 50,
  borderColor: color,
  labelText: "indice de masssa corporal",
  valueText:resultIMC.replace('.',',') 
});

$('.men').html(men);
   });

     });



  // Init top demo gauge
var demoGauge = app.gauge.create({
  el: '.demo-gauge',
  type: 'semicircle',
  value: 0.0,
  size: 250,
  borderColor: '#7CFC00',
  borderWidth: 10,
  valueText: '0%',
  valueFontSize: 30,
  valueTextColor: '#00FA9A',
  labelText: '?',
});

