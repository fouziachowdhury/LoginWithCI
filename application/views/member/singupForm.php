<div class="signup-page-main">
    <div class="signup-main" style="border:1px solid #BB0A01">  	
        <div class="signup-head">
            <h1>Sign Up</h1>
        </div>
        <div class="signup-block">
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
            <form id="registrationform" method="post" action="<?php echo base_url() ?>newMemberSave">
                <input type="text" name="firstName" placeholder="First Name" required="">
                <input type="text" name="lastName" placeholder="Last Name" required="">
                <input type="text" name="email" placeholder="Email" required="">
                <input type="password" id="password" name="password" class="lock" placeholder="Password">
                <input type="password" name="repassword" class="lock" placeholder="Retype Password">
                <div class="forgot-top-grids">
                    <div class="forgot-grid">
                        <ul>
                            <li>
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1"><span></span>I agree to the terms</label>
                            </li>
                        </ul>
                    </div>

                    <div class="clearfix"> </div>
                </div>
                <input id="regisubmit" type="submit" name="Sign In" value="Sign up">														
            </form>
            <div class="sign-down">
                <h4>Already have an account?</h4>
                <h5><a href="<?php echo base_url() ?>"> Login here</a></h5>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery().ready(function () {
        var v = jQuery("#registrationform").validate({
            rules: {
                firstName: {
                    required: true
                },
                lastName: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                },
                repassword: {
                    required: true,
                    equalTo: "#password"
                }
            },
            errorElement: "span",
            errorClass: "help-inline-error",
            messages: {
                "repassword": "Password Not Matched",
            }
        });

        $("#regisubmit").click(function () {
            if (v.form()) {
                $("#registrationform").submit();
                return false;
            }
        });
    });
</script>  