<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <div id="mensagem"></div>
                <form id="formulario_cadastro" method="post" class="text-center">
 
    <?php echo form_label('Nome', 'nome');?>
    <?php echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "type" => "text",
                "placeholder" => "Nome",
                "class" => "form-control"
                ));?>
 
                <?php echo form_label('Sobrenome', 'nome');?>
                <?php echo form_input(array(
                "name" => "sobrenome",
                "id" => "sobrenome",
                "type" => "text",
                "placeholder" => "Sobrenome",
                "class" => "form-control"
                ));?>
 
                <?php echo form_label('Usuario', 'usuario');?>
                <?php echo form_input(array(
                "name" => "email",
                "id" => "email",
                "type" => "text",
                "placeholder" => "Usuario",
                "class" => "form-control"
                ));?>
 
                <?php echo form_input(array(
                "name" => "cadastrar",
                "id" => "cadastrar",
                "type" => "submit",
                "class" => "btn btn-success"
                ), "Cadastrar");?>
 
    </form>
            </div>
            <div class="col-md-4"></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('/assets/js/jquery.js');?>"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#cadastrar").click(function(){
                        var dados = $('#formulario_cadastro').serialize();
                        $.ajax({
                                url: '<?= base_url(); ?>' + 'index.php/cadastro/salvar',
                                type: 'POST',
                                data: dados,
                                dataType: 'html',
                                success: function(data){
                                    //swal("Good job!", "You clicked the button!", "success");
                                    $("#formulario_cadastro").each (function(){
                                        swal("Good job!", "You clicked the button!", "success");
                                        this.reset();
                                    });
                                    console.log('success'+ data);
                                },
                                error: function(){
                                    $("#formulario_cadastro").each (function(){
                                        swal("Ops!", "Algo deu Errado!", "error");
                                        this.reset();
                                    });
                                    console.log('error' + data);
                                }
                            });
                        return false;
                    });
            });     
        </script>
    </body>
</html>