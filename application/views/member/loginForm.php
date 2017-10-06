<div class="login-page">
    <div class="login-main" style="border:1px solid #3B5998">  	
        <div class="login-head">
            <h1>Login</h1>
        </div>
        <div class="login-block">
            <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success alert-dismissable">
                    <i class="fa fa-check-square-o"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php }
            ?>

            <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger alert-dismissable">
                    <i class="fa fa-check-square-o"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>

            <?php }
            ?> 
            <form id="loginform" method="post" action="<?php echo base_url() ?>memberLoginCheck">
                <input type="text" name="email" placeholder="Email" required="">
                <input type="password" name="password" class="lock" placeholder="Password">
                <div class="forgot-top-grids">
                    <div class="forgot-grid">
                        <ul>
                            <li>
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1"><span></span>Remember me</label>
                            </li>
                        </ul>
                    </div>
                    <div class="forgot">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <input id="loginsubmit" type="submit" name="Sign In" value="Login">	
                <h3>Not a member?<a href="<?php echo base_url() ?>singupForm"> Sign up now</a></h3>				
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery().ready(function () {
        var v = jQuery("#loginform").validate({
            rules: {
                email: {
                    required: true
                },
                password: {
                    required: true
                },
                
            },
            errorElement: "span",
            errorClass: "help-inline-error",
        });

        $("#loginsubmit").click(function () {
            if (v.form()) {
                $("#loginform").submit();
                return false;
            }
        });
    });
</script>  
