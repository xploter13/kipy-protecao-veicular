<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="#" />
    <meta name="description" content="Kipy Proteção Veícular" />
    <meta name="author" content="#" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kipy Proteção Veicular .: Proteção :.</title>
    <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/images/favicon.png" /> -->
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
                                <h2 class="title">Proteção</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <i class="ti ti-home margin_right1"></i>
                                    <a title="Homepage" href="<?php echo base_url(); ?>">Home</a>
                                </span>
                                <span>Proteção</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
        <!-- page-title end -->

        <!--site-main start-->
        <div class="site-main">
            <!--grid-section-->
            <section class="ttm-row grid-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="featuredbox-number">
                                <div class="row mt-5 justify-content-center">
                                    <div class="col-lg-2 col-md-6 col-sm-6">
                                        <!--featured-icon-box-->
                                        <div class=" icon-align-top-content style3">
                                            <div class="featured-icon">
                                                <img src="<?php echo base_url(); ?>assets/images/icons/furto-roubo.svg" width="100px" class="d-block mx-auto" height="auto" alt="">                                                
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title text-center mt-3">
                                                    <h6>FURTO OU ROUBO</h6>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6">
                                        <!--featured-icon-box-->
                                        <div class=" icon-align-top-content style3">
                                            <div class="featured-icon">
                                                <img src="<?php echo base_url(); ?>assets/images/icons/colisao.svg" width="100px" class="d-block mx-auto" height="auto" alt="">                                                
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title text-center mt-3">
                                                    <h6>COLISÃO</h6>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6">
                                        <!--featured-icon-box-->
                                        <div class=" icon-align-top-content style3">
                                            <div class="featured-icon">
                                                <img src="<?php echo base_url(); ?>assets/images/icons/capotamento.svg" width="100px" class="d-block mx-auto" height="auto" alt="">                                                
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title text-center mt-3">
                                                    <h6>CAPOTAMENTO</h6>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6">
                                        <!--featured-icon-box-->
                                        <div class=" icon-align-top-content style3">
                                            <div class="featured-icon">
                                                <img src="<?php echo base_url(); ?>assets/images/icons/incendio.svg" width="100px" class="d-block mx-auto" height="auto" alt="">                                                
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title text-center mt-3">
                                                    <h6>INCÊNDIO</h6>
                                                    <p>(decorrente exclusivamente de colisão)</p>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6">
                                        <!--featured-icon-box-->
                                        <div class=" icon-align-top-content style3">
                                            <div class="featured-icon">
                                                <img src="<?php echo base_url(); ?>assets/images/icons/fenomenos.svg" width="100px" class="d-block mx-auto" height="auto" alt="">                                                
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title text-center mt-3">
                                                    <h6>FENÔMENO DA NATUREZA</h6>
                                                    <p>(inundação, enchente, alagamento por água doce e tempestades, queda de árvore, deslizamento de terra, granizo e raios).</p>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                </div>
            </section>
            <!--grid-section end-->
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