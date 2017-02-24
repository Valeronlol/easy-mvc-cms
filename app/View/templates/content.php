<?php if (! defined('ABSPATH')) die('permision denied');?>
<div class="cont_wrap <?php echo 'has-sidebar-' . $side;?>">
    <div class="col-lg-12 text-center">
        <h2><?php $this->_('Login form');?></h2>
        <hr class="star-primary">
    </div>
    <div class="col-lg-8 col-lg-offset-2 text-center">
        <form name="sentMessage" id="contactForm" method="POST">
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label for="login"><?php $this->_('Login');?></label>
                    <input
                            minlength="6"
                            name="login"
                            type="text"
                            class="form-control"
                            placeholder="<?php $this->_('Login');?>"
                            required
                            value="<?php if( isset($_POST['login']) ) echo $_POST['login']; ?>"
                    >
                    <p class="help-block text-danger">
                        <?php if( isset($validation['login']) ) echo $validation['login'];?>
                    </p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label  for="password"><?php $this->_('Password');?></label>
                    <input
                            id="password"
                            minlength="6"
                            name="password"
                            type="password"
                            class="form-control"
                            placeholder="<?php $this->_('Password');?>"
                            required
                            value="<?php if( isset($_POST['password']) ) echo $_POST['password']; ?>"
                    >
                    <p class="help-block text-danger">
                        <?php if ( isset($validation['password']) ) echo $validation['password'];?>
                    </p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group col-xs-12">
                    <button type="submit" name="submit" class="btn btn-success"><?php $this->_('Done');?></button>
                    <a class="btn btn-primary" href="/register"><?php $this->_('Registration');?></a>
                </div>
            </div>
        </form>
    </div>
</div>
