document.addEventListener("DOMContentLoaded",function(){
/*
    Atributos utilizados no Login / Cadastro
*/
const btn_cadastro = document.querySelector(".btn-cadastro");
const btn_login = document.querySelector(".btn-login");
var user_cad = document.querySelector("#user_cad");
var email_cad = document.querySelector("#email_cad");
var pass_cad = document.querySelector("#pass_cad");
var pass_cad_t = document.querySelector("#pass_cad_t");
var usuario = document.querySelector("#usuario");
var senha = document.querySelector("#senha");

/*
    Valida "por cima" as informações digitadas no input de cadastro
*/
function validaRegistro(){
    if(user_cad.value.length >= 5){
            if(email_cad.value.length >= 4){
                    if(pass_cad.value.length >= 8){
                        if(pass_cad.value === pass_cad_t.value){
                            return true;
                        }else{
                            throw 'A senha informada não é igual nos dois campos!';
                        }
                    }else{
                        throw 'A senha deve conter ao menos 8 caracteres!';
                    }
            }else{
                throw 'O e-mail informado é inválido!';
            }
    }else{
        throw 'O usuário deve conter ao menos 5 caracteres!';
    }
}

/*
    Responsável por realizar a requisição que efetua o cadastro do usuário no sistema
    A função registrar() só é invocada após a verificação dos dados através da função validaRegistro()
    O EventListener responsável é btn_cadastro
*/
async function registrar(){
    try {
        let reqData = new URLSearchParams;
        reqData.append('username',user_cad.value);
        reqData.append('email',email_cad.value);
        reqData.append('password',pass_cad.value);
        reqData.append('confirm',pass_cad_t.value);
        let response = await axios.post('/api/v1/registrar',reqData);
        let data = response.data;
            switch(data.type){
                case "success":
                    Swal.fire('Tudo OK',data.message,'success');
                break;

                case "error":
                    Swal.fire('Ocorreu um erro',data.message,'error');
                break;
            }
    } catch (error) {
        Swal.fire('Ocorreu um erro','Não foi possível completar a requisição, tente novamente mais tarde!','error');
    }
}

/*
    Valida se as informações referentes ao Login foram preenchidas
*/
function validaLogin(){
    if(usuario.value && usuario.value.length >= 5){
        if(senha.value && senha.value.length >= 8){
            return true;
        }else{
            throw 'Por favor, insira uma senha válida antes de tentar realizar o login!';
        }
    }else{
        throw 'Por favor, insira um usuário válido antes de tentar realizar o login!';
    }
}


/*
    Realiza a requisição que efetua o login do usuário
    Só é invocada após a verificação dos dados através da função validaLogin()
    O EventListener responsável é btn_login
*/
async function autenticar(){
    try {
        let reqData = new URLSearchParams;
        reqData.append('username',usuario.value);
        reqData.append('password',senha.value);
        let response = await axios.post('/api/v1/autenticar',reqData);
        let data = response.data;
            switch(data.type){
                case "success":
                    Swal.fire('Tudo OK',data.message,'success');
                    setTimeout(()=>{
                        window.location.href='/home';
                    },1400);
                break;

                case "error":
                    Swal.fire('Ocorreu um erro',data.message,'error');
                break;
            }
    } catch (error) {
        Swal.fire('Ocorreu um erro','Não foi possível completar a requisição, tente novamente mais tarde!','error');
    }
}


/*
 EventListeners do Login / Cadastro
*/
btn_cadastro.addEventListener("click",function(){
    try {
        if(user_cad.value && email_cad.value && pass_cad.value && pass_cad_t.value){
            if(validaRegistro()){
                registrar();
            }else{
                Swal.fire('Opss','Ocorreu um erro desconhecido ao registrar-se!','error');
            }
        }
    } catch (error) {
        Swal.fire('Opss',error,'warning')
    }
});


btn_login.addEventListener("click",function(){
    try {
        if(usuario.value && senha.value){
            if(validaLogin()){
                autenticar();
            }else{
                Swal.fire('Opss','Ocorreu um erro desconhecido ao efetuar login!','error');
            }
        }
    } catch (error) {
        Swal.fire('Opss',error,'warning');
    }
});

});