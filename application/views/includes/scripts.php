    <script src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-migrate-3.3.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.js"></script> 
    <script src="<?php echo base_url(); ?>assets/js/jquery-waypoints.js"></script>    
    <script src="<?php echo base_url(); ?>assets/js/jquery-validate.js"></script> 
    <script src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/numinate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/imagesloaded.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-isotope.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script>
        //WhatsHelp.io widget
        (function() {
        var options = {
            whatsapp: "5524998395123", // WhatsApp number
            call_to_action: "Olá, como podemos te ajudar?", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol,
            host = "whatshelp.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
        })();
    </script>