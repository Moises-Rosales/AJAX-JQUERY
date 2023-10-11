<html>
    <head>
        <title>AJAX/JQUERY</title>
        <style>
            #mensaje{
                color:#F00;
                font-size: 16px;
            }


        </style>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script>
            function enviaAjax(){
                var numero = $('#numero').val();
                if (numero && numero >0){
                    $.ajax({
                        url : 'respuesta.php',
                        type: 'post',
                        datatype: 'text',
                        data: 'numero='+numero,
                        success: function(res){
                            console.log(res);
                            if (res==1){
                                $('#mensaje').html('El valor es MAYOR A 40');
                            } else {
                                $('#mensaje').html('El valor es menor a 40');
                            }
                            setTimeout("$('#mensaje').html('');",5000);
                        },error:function(){
                            alert('Error archivo no encontrado....');
                        }
                        
                    });
                }else{
                    $('#mensaje').html('Faltan campos por llenar');
                    setTimeout("$('#mensaje').html('');",5000);
                }
            }


        </script>
    </head>
    <body>
        <input type="text" name="numero" id="numero" /><br>
        <a href="javascript:void(0);" onClick="enviaAjax();">  Enviar con Ajax </a> <br>
        <div id="mensaje"></div>

    </body>
</html>