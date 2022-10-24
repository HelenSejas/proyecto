
    <div class="main-container" id="container" >

        <div class="overlay"></div>
        <div class="search-overlay"></div>


    <nav class="nav navbar-dark bg-dark " >
    <?php echo form_open_multipart('estudiante/indexEstudiante'); ?>
           <button type="submit" class="btn btn-outline-warning btn-rounded">Atras</button>
           <?php echo form_close(); ?>
          <?php echo form_open_multipart('inicio/index'); ?>
           <button type="submit" class="btn btn-outline-warning">Inicio</button>
           <?php echo form_close(); ?>
</nav>

    <div class="helpdesk container">
        <nav class="navbar navbar-expand navbar-light">
        </nav>

        <div class="helpdesk layout-spacing">

            <div class="hd-header-wrapper text-center" id="" doSearch>
               
                        <h4 class="">MENSUALIDAD</h4>
                        <p class="">Buscar estudiante</p>

                      
 <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

    
        <div id="content" class="main-content">
            <div class="container">

                <div class="container">

                    <div class="row layout-top-spacing">

                        <div id="searchLive" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area text-center tags-content">
                                    
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-9 filtered-list-search mx-auto">
                                            <form class="form-inline my-2 my-lg-0 justify-content-center">
                                                <div class="w-100">
                                                    <input type="text" class="w-100 form-control product-search br-30" id="input-search" placeholder="Buscar estudiante" >
                                                    <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-12">

                                            <div class="searchable-container" >
                                                <div class="row">
                                                    <div class="col-md-12">  
                                                        <div class="searchable-items">
<?php
foreach ($estudiante->result() as $row) {
?>
                                            <div class="items" style="background:url(<?php echo base_url(); ?>assets/img/esmeralda.jpg);">
                                                <tr>
                                                <th><?php echo $row->nombres;?></th>
                                                <th><?php echo $row->primerApellido;?></th>
                                                <th><?php echo $row->segundoApellido;?> </th> 
                                                <th> <?php echo form_open_multipart('estudiante/seleccionado'); ?>
                                          <input type="hidden" name="IdEstudiante" value="<?php echo $row->IdEstudiante;?>">
                                           <input type="submit" name="buttonM" value="seleccionar" class="btn btn-secondary mb-2">
                                             <?php echo form_close(); ?></th>
                                                               </tr>
                                                            </div>
<?php 
}
?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div></div>

    <div id="miniFooterWrapper" class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="position-relative">
                        <div class="arrow text-center">
                            <p class="">Muriel</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-left text-center copyright align-self-center">
                            <p class="mt-md-0 mt-4 mb-0">2022 &copy; </p>
                        </div>
                        <div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center">
                            <p class="mb-0">La Paz y Antezana, Cochabamba, 2022</p>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div> 
  