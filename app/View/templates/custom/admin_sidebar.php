<?php if (! defined('ABSPATH')) die('permision denied');?>
<aside class="<?php echo $side ;?>">
    <form method="post" enctype="multipart/form-data">
        <label class="btn btn-primary" for="my-file-selector">
            <input id="my-file-selector" type="file" name="image">
            <?php $this->_('Upload image');?>
        </label>
        <span class='label label-info' id="upload-file-info"></span>
        <input type="submit" />
    </form>
</aside>