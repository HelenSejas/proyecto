         <link href="<?php echo base_url(); ?> assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
         </head>
<body >
             <?php echo form_open_multipart('usuarios/validar',array ('id'=> 'form1', 'class'=>'form-control'));
              ?>

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <h1 class="">LOGIN </h1>
                      <a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>assets/img/usuario.png" width="80"></a>
                        <form class="text-left">
                            <div class="form d-grid my-4">

                                <div id="username-field" class="field-wrapper input">
                                <label>Nombre de Usuario</label>
                                <input id="username" name="usuario" type="text" class="form-control" placeholder="Username">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
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