<!-- LOGIN WRAPPER -->
<div class="vertical-align-wrap">
    <div class="vertical-align-middle">
        <div class="auth-box">
            <div class="left">
                <div class="content">
                    <div class="header">
                        <div class="logo text-center">
                            <img src="<?php echo base_url()?>resources/images/logo/splogo.png" alt="" width="120px">
                        </div>
                        <hr>
                        <p class="lead">Login page</p>
                    </div>
                    <form class="form-auth-small" action="<?php echo base_url()?>administrator/login/auth" method="post">
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">Username</label>
                            <input type="text" class="form-control" id="signin-email" name="admin_username" placeholder="Username" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Password</label>
                            <input type="password" class="form-control" id="signin-password" name="admin_password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="overlay"></div>
                <div class="content text">
                    <h1 class="heading">Standardplus Administrator Panel</h1>
                    <p>by It's Banana</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- END LOGIN WRAPPER -->
