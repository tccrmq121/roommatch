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

    
    var fileInput =  document.getElementById('foto_perfil_imovel');
          
    var filePath = fileInput.value;
      
    // Permitir tipo de arquivo
        var allowedExtensions = 
                /(\.jpg|\.jpeg|\.png)$/i;
          
        if (!allowedExtensions.exec(filePath)) {
            alert('Tipo de Arquivo invalido, somente jpg, jpeg ou png');
            fileInput.value = '';
            return false
        }
    
 }