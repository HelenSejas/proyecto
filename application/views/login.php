         <link href="<?php echo base_url(); ?> assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
         </head>
<body >

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">LOGIN </h1>
                      <a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>assets/img/usuario.png" width="80">
                        <form class="text-left">
                            <div class="form d-grid my-4">

                                <div id="username-field" class="field-wrapper input">
                                <label>Nombre de Usuario</label>
                                    <input id="username" name="username" type="text" class="form-control" placeholder="Username">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                 <label>Password</label>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                               
                                    <div class="field-wrapper">
                                           <?php echo form_open_multipart('usuarios/index'); ?>
                        <button type="submit" class="btn btn-warning">ingresar</button>
                        <?php echo form_close(); ?>
                                    </div>
                                    
                               

                                <div class="field-wrapper text-center keep-logged-in">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                          <input type="checkbox" class="new-control-input">
                                        </label>
                                    </div>
                                </div>

                                <div class="field-wrapper">
                                    <a href="auth_pass_recovery.html" class="forgot-pass-link">Olvido su Contraseña?</a>
                                </div>

                            </div>
                        </form>                        

                    </div>                    
                </div>
            </div>
        </div>
