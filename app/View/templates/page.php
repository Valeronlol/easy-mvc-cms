<?php
if (! defined('ABSPATH')) die('permision denied');
include_once 'header.php';

?>
<section class="container">
    <div class="row">
<?php
    $side = '';
    if (
            isset($config['custom_sidebar']) &&
            is_string($config['custom_sidebar'])
    ){
        $side = $config['sidebar'];
        include_once 'custom/' . $config['custom_sidebar'] . '.php';
        include_once $config['content_layout'] . '.php';
    }
    elseif ( !$config['sidebar'] ) {
        include_once $config['content_layout'] . '.php';
    }
    elseif ( isset($config['sidebar']) and
            $config['sidebar'] == 'left' ||
            $config['sidebar'] == 'right' )
    {
        $side = $config['sidebar'];
        include_once 'sidebar.php';
        include_once $config['content_layout'] . '.php';
    }
;?>
    </div>
</section>
<?php

include_once 'footer.php';