<?php if (! defined('ABSPATH')) die('permision denied');?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template text-center">
                <h1><?php $this->_('oops');?></h1>
                <h2><?php $this->_('404');?></h2>
                <div class="error-details">
                    <?php $this->_('404sorry');?>
                </div>
                <div class="error-actions">
                    <a href="/" class="btn btn-primary">
                        <span class="glyphicon glyphicon-home"></span>
                        <?php $this->_('home');?>
                    </a>
                    <a target="_blank" href="mailto:valerii.kuzivanov@gmail.com" class="btn btn-default">
                        <span class="glyphicon glyphicon-envelope"></span>
                         <?php $this->_('contactme');?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>