<?php if (! defined('ABSPATH')) die('permision denied');?>
<aside class="<?php echo $side ;?>">
    <form method="post" enctype="multipart/form-data">
        <label class="btn btn-primary" for="my-file-selector">
            <input id="my-file-selector" type="file" name="image">
            <?php $this->_('Upload image');?>
        </label>
        <p class='label label-info' id="upload-file-info"></p>
        <?php if(!empty($uploadResult) && is_array($uploadResult) ):?>
            <?php foreach ($uploadResult as $error):?>
                <p class="upload-errors text-danger"><?php echo $error;?></p>
            <?php endforeach;?>
        <?php endif;?>
        <?php if( $uploadResult === true):?>
            <p class="upload-errors text-success"><?php $this->_('ImageSuccess');?></p>
        <?php endif;?>
        <input type="submit" />
    </form>
</aside>