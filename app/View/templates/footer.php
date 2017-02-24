<?php if (! defined('ABSPATH')) die('permision denied');?>

    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3><?php $this->_('Contacts');?></h3>
                        <p> +996 552 442882
                            <br><?php $this->_('adress');?></p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3><?php $this->_('Last works');?></h3>
                        <ul class="footer-works">
                            <li><a href="http://kazeco.kg" target="_blank">Kazeco</a></li>
                            <li><a href="vefacenter.kgvefacenter.kg" target="_blank">Vefacenter</a></li>
                            <li><a href="http://test.tawu.ru" target="_blank">Keramin(in progress)</a></li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3><?php $this->_('Source code');?></h3>
                        <p><?php $this->_('Download');?>  <a href="https://github.com/Valeronlol/test" target="_blank">gitHub</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php $this->_('Copyright'); echo ' ' . date('Y');?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script src="/node_modules/jquery/dist/jquery.min.js"></script>
<script src="/app/assets/js/jquery.cookie.js"></script>
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/app/assets/js/freelancer.min.js"></script>
<script src="/app/assets/js/hideShowPassword.min.js"></script>
<script src="/app/assets/js/common.js"></script>
</body>
</html>