
// Validar Cadastro de Notícias

function validar_noticia(){
    var titulo = form_noticia.titulo.value;
    var texto = form_noticia.texto.value;
    var foto = form_noticia.foto.value;   
    // alert(nome); => verificando se esta funcionando
    
    if(titulo.length < 1){
        alert('Preencha o campo titulo.');
        form_noticia.titulo.focus();
        return false; 
    }

    if(texto.length < 20){
        alert('Preencha o campo texto com mais de 20 caracteres.');
        form_noticia.texto.focus();
        return false; 
    }

    if(foto.length == ""){
        alert('Adicione uma Foto.');
        form_noticia.foto.focus();
        return false; 
    }
  
}

// Validar Cadastro de Usuários

function validar_usuario(){
    var usuario = form_usuario.usuario.value;
    var senha = form_usuario.senha.value;  
    // alert(nome); => verificando se esta funcionando
    
    if(usuario.length < 1){
        alert('Preencha o campo usuario.');
        form_usuario.usuario.focus();
        return false; 
    }

    if(senha.length < 1){
        alert('Preencha o campo senha.');
        form_usuario.senha.focus();
        return false; 
    }

}

// Validar Login

function validarLogin(){
    var usuario = formLogin.usuario.value;
    var senha = formLogin.senha.value;  
    // alert(nome); => verificando se esta funcionando
    
    if(usuario.length < 1){
        alert('Preencha o campo usuario.');
        formLogin.usuario.focus();
        return false; 
    }

    if(senha.length < 1){
        alert('Preencha o campo senha.');
        formLogin.senha.focus();
        return false; 
    }

}

// Confirmação de exclusão

function deletar(){
    var confirmar = confirm('Deseja excluir esse registro?');

    if(confirmar){
        return true;
    }else{
        return false;
    }
}

// Validando Contato

function validarContato(){
    var nome = formContato.nome.value.trim();  
    var email = formContato.email.value.trim();
    var sexo = formContato.sexo.value;
    var cidade = formContato.cidade.value.trim();
    var estado = formContato.estado.value;
    var comentario = formContato.comentario.value;
    // var informativo = formContato.informativo.value;
    // alert(nome); => verificando se esta funcionando
    
    if(nome.length < 5 ){
        alert('Preencha o campo com o nome completo.');
        formContato.nome.focus();
            return false;
    }

    if(email < 1){
        alert('Preencha o campo email.');
        formContato.email.focus();
            return false;
    }

    if(sexo == ""){
        alert('Escolha uma opção.');
        formContato.sexo.focus();
            return false;
    }

    if(cidade.length < 1){
        alert('Preencha o campo cidade.');
        formContato.cidade.focus();
        return false; 
    }

    if(estado == ""){
        alert('Estado incorreto!')
        formContato.estado.focus();
        return false; 
    }

    if(comentario.length < 1){
        alert('Preencha o campo comentario.');
        formContato.comentario.focus();
        return false; 
    }

    // if(informativo.length < 1){
    //     alert('Escolah uma opção o campo comentario.');
    //     formContato.informativo.focus();
    //     return false; 
    // }
  
}
