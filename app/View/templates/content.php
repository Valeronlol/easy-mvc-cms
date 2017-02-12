<div class="cont_wrap <?php echo 'has-sidebar-' . $side;?>">
    <div class="col-lg-12 text-center">
        <h2>Login form</h2>
        <hr class="star-primary">
    </div>

    <div class="col-lg-8 col-lg-offset-2 text-center">
        <form name="sentMessage" id="contactForm" method="POST" novalidate>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label for="login">Login</label>
                    <input
                            name="login"
                            type="text"
                            class="form-control"
                            placeholder="Name"
                            required>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label for="password">Password</label>
                    <input
                            name="password"
                            type="password"
                            class="form-control"
                            placeholder="Password"
                            required>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group col-xs-12">
                    <button type="submit" class="btn btn-success btn-lg">Send</button>
                </div>
            </div>
        </form>
    </div>
</div>
