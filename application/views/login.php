         <link href="<?php echo base_url(); ?> assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
         </head>
<body >
<?php  
switch ($msg) {
    case 1:
        $mensaje="Sesion cerrada con exito";
        break;
     case 2:
        $mensaje="Usuario no identificado";
        break;
        case 3:
        $mensaje="Acceso invalido - Iniciar sesion";
        break;
    default:
       $mensaje="";
        break;
}
?>
             <?php echo form_open_multipart('usuarios/validar',array ('id'=> 'form1', 'class'=>'form-control'))
              ?>

    <div class="form-container ">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <h1 class="">LOGIN </h1>
                      <a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>assets/img/usuario.png" width="80"></a>
                        <form class="text-left">
                            <div class="form d-grid my-4">
<div class="alert alert-info mb-3" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
    <?php echo $mensaje; ?></button>
</div>
                            
                                <div id="username-field" class="field-wrapper input">
                                <label class="form-label">Nombre de Usuario</label>
                                <input name="usuario" type="text" class="form-control" placeholder="ingrese usuario">
                                </div>

                                <div class="field-wrapper input mb-3">
                                 <label>Password</label>
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                               
                                <div class="field-wrapper">
                                  
                                  <button type="submit" class="btn btn-warning">ingresar</button>
                               
                               </div>
                               </div>
                                <div class="field-wrapper my-5">
                                    <a href="auth_pass_recovery.html" class="forgot-pass-link">Olvido su Contraseña?</a>
                    </div>
                        </form>                        

                    </div>                    
                </div>
            </div>
        </div>
<?php echo form_close(); ?>