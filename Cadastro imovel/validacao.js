 function valida(){
    cep =(document.getElementById('cep'));

    if ((cep.value).length < 10){
        alert("CEP Incompleto");
        nome.focus();
        return false
        }
    if (cep.value == ''){
        alert("Preencha o CEP");
        cpf.focus();
        return false
    }
 }