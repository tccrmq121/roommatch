 function valida(){
    
    var fileInput =  document.getElementById('foto_perfil_imovel');
          
    var filePath = fileInput.value;

    if (fileInput != ''){
      
    // Permitir tipo de arquivo
        var allowedExtensions = 
                /(\.jpg|\.jpeg|\.png)$/i;
          
        if (!allowedExtensions.exec(filePath)) {
            alert('Tipo de Arquivo invalido, somente jpg, jpeg ou png');
            fileInput.value = '';
            return false
        }
    }
    
 }