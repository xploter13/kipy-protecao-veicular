<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="#" />
    <meta name="description" content="Kipy Proteção Veícular" />
    <meta name="author" content="#" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kipy Proteção Veicular .: Contato :.</title>
    <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" /> -->
    <?php $this->load->view('includes/styles'); ?>

</head>


<body>

    <!--page start-->
    <div class="page">
       
        <!-- preloader start -->
        <div id="preloader" class="blobs-wrapper">
            <div class="ttm-bgcolor-skincolor loader-blob"></div>
        </div>
        <!-- preloader end -->
        
        <!--header start-->
        <?php $this->load->view('includes/header'); ?>
        <!--header end-->

        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">Contato</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="ti ti-home margin_right1"></i>
                                    <a title="Homepage" href="<?php echo base_url(); ?>">Home</a>
                                </span>
                                <span>Contato</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
        <!-- page-title end -->

        <!--site-main start-->
        <div class="site-main">
            <!--- conatact-section -->
            <section class="ttm-row conatact-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section title -->
                            <div class="section-title without-seperator title-style-center_text">
                                <div class="title-header">
                                    <h3>Nós podemos te ajudar!</h3>
                                    <h2 class="title">Fale Conosco</h2>
                                </div>
                                <div class="title-desc">
                                    <p>Somos especialista em proteção veicular e fazemos de tudo <br> para que o seu veículo fique 100% protegido.</p>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="padding_right30 res-991-padding_right0 res-991-margin_bottom30">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content style11">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-round"> 
                                            <i class="fa fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Ligue a qualquer hora</h3>
                                        </div>
                                        <div class="featured-desc">(24) 99839-5123</div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <div class="ttm-horizontal_sep width-100 margin_top20 margin_bottom20"></div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content style11">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-round"> 
                                            <i class="fa fa-globe"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>E-mail</h3>
                                        </div>
                                        <div class="featured-desc">administrativo@kipyprotecaoveicular.com.br</div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <div class="ttm-horizontal_sep width-100 margin_top20 margin_bottom20"></div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content style11 margin_bottom0">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-round"> 
                                            <i class="ti ti-home"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Endereço</h3>
                                        </div>
                                        <div class="featured-desc">Rua José Alves Pimenta 1851, Matadouro, Barra do Piraí - RJ</div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-grey z-index-2 p-50 res-991-margin_top30 res-991-p-15">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                    <form id="contact_form" class="contact_form wrap-form clearfix" method="post" novalidate="novalidate" action="#">
                                        <div class="row ttm-boxes-spacing-15px">
                                            <div class="col-md-12 ttm-box-col-wrapper">
                                                <label>
                                                    <span class="text-input margin_bottom0"><input name="name" type="text" value="" placeholder="Nome" required="required"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 ttm-box-col-wrapper">
                                                <label>
                                                    <span class="text-input margin_bottom0"><input name="address" type="text" value="" placeholder="E-mail" required="required"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 ttm-box-col-wrapper">
                                                <label>
                                                    <span class="text-input margin_bottom0"><input name="phone" type="text" value="" placeholder="Assunto" required="required"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12 ttm-box-col-wrapper">
                                                <label>
                                                    <span class="text-input margin_bottom0"><input name="phone" type="text" value="" placeholder="Telefone" required="required"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12 ttm-box-col-wrapper">
                                                <label>
                                                    <span class="text-input margin_bottom0"><textarea name="message" rows="3" placeholder="Mensagem" required="required"></textarea></span>
                                                </label>
                                            </div>
                                        </div>
                                        <button class="submit ttm-btn ttm-btn-size-lg ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor w-100" type="submit">ENVIAR MENSAGEM!</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->                
                </div>
            </section>
            <!-- conatact-section end -->

            <!--google_map-->
            <div id="google_map" class="google_map">
                <div class="map_container clearfix">
                    <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.2754239431933!2d-43.81557768504262!3d-22.456281985242743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9eb568e1d6ed27%3A0xb0f39ef7ff8f06a1!2sR.%20Jos%C3%A9%20Alves%20Pimenta%2C%201851%20-%20Santo%20Ant%C3%B4nio%2C%20Barra%20do%20Pira%C3%AD%20-%20RJ%2C%2027115-010!5e0!3m2!1spt-BR!2sbr!4v1619306499159!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ttm_contact_widget_wrapper clearfix">
                                    <h3>Horário de Funcionamento</h3>
                                    <ul>
                                        <li><h6>Segunda à Sexta</h6>8h – 18h</li>
                                        <li><h6>Sábado</h6>8h – 14h</li>
                                    </ul>
                                    <!-- <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor margin_top10" href="contact-us.html">Make A Appoinment</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--site-main end-->

        <!--footer start-->
        <?php $this->load->view('includes/footer'); ?>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->


    <!-- Javascript -->
    <?php $this->load->view('includes/scripts'); ?>
    <!-- Javascript end-->

</body>

</html>