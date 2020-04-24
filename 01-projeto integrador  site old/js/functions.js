$(document). ready (function(){
$('nav a').click(function(e){
    if(this.hash !==""){
        e.preventDefault();
        var link=this.hash;
$('html,body').animate({
    scrollTop:$(link).offset().top- 70},800);
    }
    });
    //função para mostrar esconder a seta
    $(window).scroll(function(){
    //verificando da altura da tela
    if($(this).scrollTop() > 500){
        $('.voltar').fadeIn();
        }else{
            //esconde a seta
            $('.voltar').fadeOut();
        }
        });
        $('.voltar,.logo').click(function(){
        $('html,body').animate({scrollTop:0},500);
        return false;
        });
    });

//função para adicionar seletores
$('.header_menu a').click(function(){

    //Remover um elemento ou seletor
    //o parametro Find acessa 

    $('.header_menu').find('li.active').removeClass('active');
    //adicionar um seletor em um grupo

    $(this).parent('li').addClass('active')

});

$('.voltar,.logo').click(function(){
    $('.header_menu').find('li.active').removeClass('active');
    $('.header_menu li:first-child').addClass('active');
});
// fechamento do menu
$(".nav-link").on("click", function(){
   $('.navbar-collapse').collapse('hide');
 
 });