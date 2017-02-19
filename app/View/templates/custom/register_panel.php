<?php if (! defined('ABSPATH')) die('permision denied');?>
<div class="cont_wrap <?php echo 'has-sidebar-' . $side;?>">
    <div class="col-lg-12 text-center">
        <h2>Registration form</h2>
        <hr class="star-primary">
    </div>

    <div class="col-lg-8 col-lg-offset-2 text-center">
        <form name="register" id="register" method="POST">
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Login</label>
                    <input
                            name="login"
                            type="text"
                            class="form-control"
                            placeholder="Name"
                            id="login"
                            required
                            data-validation-required-message="Please enter your login."
                            aria-invalid="false"
                    >
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>First name</label>
                    <input
                            name="f_name"
                            type="text"
                            class="form-control"
                            placeholder="First name"
                            id="f_name"
                            required
                            data-validation-required-message="Please enter your first name."
                    >
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Last name</label>
                    <input
                            name="l_name"
                            type="text"
                            class="form-control"
                            placeholder="Last name"
                            id="l_name"
                            required
                            data-validation-required-message="Please enter your last name."
                    >
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Password</label>
                    <input
                            name="password"
                            type="password"
                            class="form-control"
                            placeholder="Password"
                            id="password"
                            required
                            data-validation-required-message="Please enter your password."
                    >
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="row">
                <div class="form-group col-xs-12">
                    <button name="submit" type="submit" class="btn btn-success btn-lg">Done</button>
                </div>
            </div>
        </form>
    </div>
</div>
