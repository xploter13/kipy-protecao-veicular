<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="#" />
    <meta name="description" content="Kipy Proteção Veícular" />
    <meta name="author" content="#" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kipy Proteção Veicular</title>
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

        <!-- Banner -->
        <div class="banner_slider">
            <div class="slide">
                <div class="slide_img" style="background-image: url(<?php echo base_url(); ?>assets/images/slides/slider-mainbg-001.jpg); background-size: contain; background-repeat: no-repeat;"></div>
                <div class="slide__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="slide__content--headings d-flex">
                                    <!-- <div data-animation="fadeInLeft" class="padding_left3 ttm-bgcolor-skincolor"></div>
                                    <div class="padding_left30 padding_top10 padding_bottom10">
                                        <h3  data-animation="fadeInDown">Se preocupe com seu futuro.</h3>
                                        <h2  data-animation="fadeInDown">Proteja o seu <span class="ttm-textcolor-skincolor">veículo</span></h2>
                                        <!-- <h2  data-animation="fadeInDown">Boundaries.</h2> --
                                        <p  data-animation="fadeInDown" class="ttm-textcolor-darkgrey">Não contrate ou renove o seu contrato de proteção ou seguro <br> antes de conhecer as nossas condições!</p>
                                        <div class="d-sm-flex margin_top30 align-items-center res-767-margin_top20" data-animation="fadeInUp" data-delay="1.4">
                                            <!-- <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-dark margin_right4" href="#">Conheça nossa proteção</a> -->
                                            <!-- <a href="https://www.youtube.com/watch?v=dk9uNWPP7EA" target="_self" class="ttm_prettyphoto ttm-btn btn-inline ttm-btn-size-md margin_left30">
                                                <span class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-xs ttm-icon_element-style-rounded margin_right15 margin_bottom0">
                                                    <i class="fa fa-play margin_left0 padding_left0"></i>
                                                </span><span> WATCH VIDEO</span>
                                            </a> --
                                        </div>
                                        <!--<div data-animation="fadeInDown" class="arrow-block md-hide">
                                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/slides/slider-shape-border.png" alt="arrow-img">
                                        </div>
                                         <div data-animation="fadeInDown" class="circle-block md-hide">
                                            <span></span>
                                        </div> --
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="slide">
                <div class="slide_img" style="background-image: url(<?php echo base_url(); ?>assets/images/slides/slider-mainbg-002.jpg);"></div>
                <div class="slide__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="slide__content--headings d-flex">
                                    <div data-animation="fadeInLeft" class="padding_left3 ttm-bgcolor-skincolor"></div>
                                    <div class="padding_left30 padding_top10 padding_bottom10">
                                        <h3  data-animation="fadeInDown">Brand innovations</h3>
                                        <h2  data-animation="fadeInDown">The <span class="ttm-textcolor-skincolor">Possibilities</span></h2>
                                        <h2  data-animation="fadeInDown">are Infinite.</h2>
                                        <p  data-animation="fadeInDown" class="ttm-textcolor-darkgrey">A consultancy agency, see through innovation and dedication</p>
                                        <div class="d-sm-flex margin_top30 align-items-center res-767-margin_top25" data-animation="fadeInUp" data-delay="1.4">
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-dark margin_right15" href="about-us-2.html">more detail</a>
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-dark margin_right15" href="about-3.html">appoinment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- Banner end-->
        
        <!--services-section-->
        <section class="ttm-row services-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <!-- <h3>O que oferecemos</h3> -->
                                <h2 class="title text-uppercase" style="color: #303493;">Proteção completa <br> para o veículo.</h2>
                            </div>                                
                        </div><!-- section title end -->
                    </div>
                </div><!-- row end -->

                <!-- row -->
                <div class="row ">
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style2">                            
                            <div class="ttm-box-view-overlay overlay-none border-rad_6">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail-">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/roubo.png" class="mx-auto d-block mb-4" width="150px" height="auto" alt="image">
                                </div><!-- featured-thumbnail end-->
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">ROUBO / FURTO</a></h3>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>                    
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style2">                            
                            <div class="ttm-box-view-overlay overlay-none border-rad_6">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail-">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/colisao-de-carro.png" class="mx-auto d-block mb-4" width="150px" height="auto" alt="image">
                                </div><!-- featured-thumbnail end-->
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">COLISÃO</a></h3>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>                    
                   
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style2">                            
                            <div class="ttm-box-view-overlay overlay-none border-rad_6">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                <img src="<?php echo base_url(); ?>assets/images/icons/veiculo-capotado.png" class="mx-auto d-block mb-4" width="150px" height="auto" alt="image">
                                </div><!-- featured-thumbnail end-->
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">CAPOTAMENTO</a></h3>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style2">                            
                            <div class="ttm-box-view-overlay overlay-none border-rad_6">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img src="<?php echo base_url(); ?>assets/images/icons/carro-em-chamas.png" class="mx-auto d-block mb-4" width="150px" height="auto" alt="image">
                                </div><!-- featured-thumbnail end-->
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">INCÊNDIO</a></h3>
                                    <p>(decorrente exclusivamente de colisão)</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style2">                            
                            <div class="ttm-box-view-overlay overlay-none border-rad_6">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                <img src="<?php echo base_url(); ?>assets/images/icons/danos.png" class="mx-auto d-block mb-4" width="250px" height="auto" alt="image">
                                </div><!-- featured-thumbnail end-->
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">FENÔMENO DA NATUREZA</a></h3>
                                    <p>(inundação, enchente, alagamento por água doce e tempestades, queda de árvore, deslizamento de terra, granizo e raios).</p>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>                        
                </div>
                <!-- row end -->                
            </div>
        </section>
        <!--services-section end-->      

        <!--padding_bottom_zero-section-->
        <section class="ttm-row padding_bottom_zero-section bg-layer bg-layer-equal-height mt_20 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-md-12">
                                <!-- col-img-img-one -->
                                <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-one ttm-left-span z-index-2">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                    <div class="layer-content">
                                    </div>
                                </div><!-- col-img-bg-img-one end-->
                                <img class="img-fluid ttm-equal-height-image w-100" src="<?php echo base_url(); ?>assets/images/bg-image/col-bgimage-1.jpg" alt="bg-image">
                            </div>
                            <div class="col-lg-8">
                                <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-darkgrey ttm-bg ttm-col-bgimage-yes col-bg-img-three ttm-right-span spacing-1 h-auto">
                                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                        <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                    </div>
                                    <div class="layer-content">
                                        <!-- section title -->
                                        <div class="section-title">
                                            <div class="title-header">
                                                <h2 class="title text-uppercase text-blue">Pensamos em você</h2> <br>
                                                <h3 class="text-white" style="font-size: 19px">Aqui você tem liberdade para contratar e usar.</h3>
                                            </div>
                                            <div class="title-desc"><p>Na <strong style="font-size: 22px">Kipy</strong> você tem Proteção e Benefícios sempre que precisar e onde estiver, porque estamos preparados para te ajudar!</p></div>
                                        </div><!-- section title end -->
                                        <div class="padding_top15 padding_bottom30 res-991-padding_bottom30">
                                            <!-- featured-icon-box -->
                                            <div class="featured-icon-box icon-align-before-content style2 icon-ver_align-top">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-round">
                                                        <i class="flaticon flaticon-copyright"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h3>Sem burocracia</h3>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <!-- <p>Você pode ser tornar um de nossos associados a qualquer momento. Sem consulta ao SPC/SERASA, cobertura para terceiros, proteção contra roubo/furto, sem análise de perfil, cobertura de perda total e muito mais.</p> -->
                                                        VEJA COMO É FACIL PROTEGER COM A <strong style="font-size: 26px">Kipy</strong>
                                                        <ul class="list-unstyled">
                                                            <li>* Sem consulta de SPC/SERASA</li>
                                                            <li>* Sem perfil de condutor</li>
                                                            <li>* Sem perfil de idade ( desde que seja habilitado)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- featured-icon-box end -->
                                            <!-- featured-icon-box --
                                            <div class="featured-icon-box icon-align-before-content style2  icon-ver_align-top">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-round">
                                                        <i class="flaticon flaticon-idea-4"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h3>Business Process Outsourcing</h3>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>Today’s digitally disrupted market, where traditional revenue sources are becoming more sustainable growth.</p>
                                                    </div>
                                                </div>
                                            </div><!-- featured-icon-box end -->
                                        </div>
                                        <div class="padding_left30 padding_right30 padding_top15 padding_bottom15 ttm-bgcolor-white">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <!--featured-icon-box-->
                                                    <div class="featured-icon-box icon-align-top-content ttm-bgcolor-skincolor p-20 padding_bottom15 padding_top25 text-center border-rad_6">
                                                        <div class="featured-icon padding_top1">
                                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-md">
                                                                <i class="flaticon flaticon-idea-1"></i>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h3>Qualidade</h3>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-icon-box end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <!--featured-icon-box-->
                                                    <div class="featured-icon-box icon-align-top-content ttm-bgcolor-darkgrey p-20 padding_bottom15 padding_top25 text-center border-rad_6">
                                                        <div class="featured-icon padding_top1">
                                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-md">
                                                                <i class="flaticon flaticon-charts"></i>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h3>Proteção</h3>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-icon-box end-->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <!--featured-icon-box-->
                                                    <div class="featured-icon-box icon-align-top-content ttm-bgcolor-skincolor p-20 padding_bottom15 padding_top25 text-center border-rad_6">
                                                        <div class="featured-icon padding_top1">
                                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-md">
                                                                <i class="flaticon flaticon-corporate-3"></i>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h3>Confiança</h3>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-icon-box end-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row end -->                            
                    </div>
                </div>
            </div>
        </section>
        <!--padding_bottom_zero-section-->

        <!--services-section-->
        <section class="ttm-row services-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <!-- <h3>O que oferecemos</h3> -->
                                <h2 class="title text-uppercase" style="color: #303493;">Assistência 24 horas para todo brasil</h2>
                            </div>                                
                        </div><!-- section title end -->
                    </div>
                </div><!-- row end -->
                <!-- row -->

                <!-- row -->
                <div class="row ">
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">SOCORRO ELÉTRICO</a></h3>
                                </div>
                            </div>
                            <div class="ttm-box-view-overlay overlay-none border-rad_6">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail-">
                                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/services/socorro-eletrico.jpg" alt="image">
                                </div><!-- featured-thumbnail end-->
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">SOCORRO MECÂNICO</a></h3>
                                </div>
                            </div>
                            <div class="ttm-box-view-overlay overlay-none border-rad_6">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/services/socorro-mecanico.jpg" alt="image">
                                </div><!-- featured-thumbnail end-->
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">REBOQUE</a></h3>
                                </div>
                            </div>
                            <div class="ttm-box-view-overlay overlay-none border-rad_6">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/services/reboque.jpg" alt="image">
                                </div><!-- featured-thumbnail end-->
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">TROCA DE PNEUS</a></h3>
                                </div>
                            </div>
                            <div class="ttm-box-view-overlay overlay-none border-rad_6">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/services/troca-pneus.jpg" alt="image">
                                </div><!-- featured-thumbnail end-->
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">TÁXI EMERGENCIAL</a></h3>
                                </div>
                            </div>
                            <div class="ttm-box-view-overlay overlay-none border-rad_6">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/services/taxi.jpg" alt="image">
                                </div><!-- featured-thumbnail end-->
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!--featured-imagebox-->
                        <div class="featured-imagebox featured-imagebox-services style2">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="#">CHAVEIRO</a></h3>
                                </div>
                            </div>
                            <div class="ttm-box-view-overlay overlay-none border-rad_6">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/images/services/chaveiro.jpg" alt="image">
                                </div><!-- featured-thumbnail end-->
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>                        
                </div>
                <!-- row end -->                    
            </div>
        </section>
        <!--services-section end-->   
    


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
    <script>
        $(".mn-home").addClass('active');
    </script>
    <!-- Javascript end-->

</body>

</html>