<?php
include_once 'header.php';

?>
<section class="container">
    <div class="row">
<?php
    if ( !$config['sidebar'] ) {
        include_once $config['content_layout'] . '.php';
    }
    elseif ( $config['sidebar'] == 'left' || $config['sidebar'] == 'right' ){
        if ( isset($config['sidebar']) &&
            ( $config['sidebar'] == 'left' || $config['sidebar'] == 'right' ) ) {
            $side = $config['sidebar'];
        } else {
            $side = '';
        }
        include_once 'sidebar.php';
        include_once $config['content_layout'] . '.php';
    }
;?>
    </div>
</section>
<?php

include_once 'footer.php';