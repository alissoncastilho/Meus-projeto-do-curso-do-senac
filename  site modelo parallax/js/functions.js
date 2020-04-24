$(document).ready(function(){
    $('nav a').click(function(e){
        if(this.hash !== ""){                                                               // Verifica se o link clicado tem algum valor
            e.preventDefault();                                                             // Redefine para o padrão inicial do jquery
            var link = this.hash;                                                           // variável recebe o link clicado
            $('html,body').animate({scrollTop:$(link).offset().top -70},800);               // Utilizando a função Animate
            
            //alert('link');

        }
    //    alert('Funcionou');
    });

    // Função para mostrar e esconder a seta
    $(window).scroll(function(){                    // Verificação da altura da tela
        if($(this).scrollTop() > 1500){ 
            $('.voltar').fadeIn();              // Mostrar a seta
            
        }else{
            $('.voltar').fadeOut();
            //alert("Passou");
        }
    });

    $('.voltar,.logo').click(function(){
        $('html,body').animate({scrollTop:0},800);
        return false;
    })
});
// Função para adicionar Seletores
$('.header_menu a').click(function(){
    // Remover um elemento ou seletor
    // O parametro FIND acessa todos o descendentes (filhos)
    $('.header_menu').find('li.active').removeClass('active');
    // Adicionar um seletor em um grupo
    $(this).parent('li').addClass('active')
});

$('.voltar, .logo').click(function(){
    $('.header_menu').find('li.active').removeClass('active');
    $('.header_menu li:first-child').addClass('active');
})

// Iniciando a função Ligthbox
// https://lokeshdahakar.com/
$('.galeria li a').each(function(){
    $(this).attr('data-lightbox','lightbox');
})