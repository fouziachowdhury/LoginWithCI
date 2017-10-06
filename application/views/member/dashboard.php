<div class="page-container">	
    <div class="left-content">
        <div class="mother-grid-inner">
            <!--header start here-->
            <div class="header-main">
                <div class="header-left">
                    <div class="logo-name">
                        <a href="<?php echo base_url() ?>dashboard"> <h1>LoginWithCI</h1> 
                       <!--<img id="logo" src="" alt="Logo"/>--> 
                        </a> 								
                    </div>
                    <!--search-box-->
                    <div class="clearfix"> </div>
                </div>
                <div class="header-right">
                    <!--notification menu end -->
                    <div class="profile_details">		
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">	
                                        <span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
                                        <div class="user-name">
                                            <p>Welcome</p>
                                            <span>Member</span>
                                        </div>
                                        <i class="fa fa-angle-down lnr"></i>
                                        <i class="fa fa-angle-up lnr"></i>
                                        <div class="clearfix"></div>	
                                    </div>	
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="<?php echo base_url() ?>logOut"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>				
                </div>
                <div class="clearfix"> </div>	
            </div>
            <div class="inner-block">
                <div class="portlet-grid-page"> 
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
                    <div class="portlet-grid panel-primary"> 
                        <div class="panel-heading">
                            <h3 class="panel-title">Dashboard</h3>
                        </div> 
                        <div class="panel-body">
                            Welcome Member to the Dashboard.
                        </div> 
                    </div>  	
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!--inner block end here-->
            <!--copy rights start here-->	
            <!--COPY rights end here-->
        </div>
    </div>
    <div class="copyrights">
        <p>© All Rights Reserved by  <a href="" target="_blank">Fouzia Chowdhury</a> </p>
    </div>	
</div>
<!--slide bar menu end here-->	