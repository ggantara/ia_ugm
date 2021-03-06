        <div class="container ia-container no-navbar-container">
            <div class="row" style="height:59px;">
                <div class="col">
                    <h1 class="text-left ia-title" data-aos="fade-down">startup</h1>
                    <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                    <hr data-aos="fade-right" class="title-underline">
                </div>
            </div>
            <div class="row">
                <?php foreach ($startup as $key => $value): ?>
                <div class="col-6 offset-0 col-xs-6 col-md-4 col-lg-2">
                    <div>
                         <?php 
                            if ($value['startup_status']=="active") {
                                echo '<img src="'.base_url("assets/img/active-startup-icon.png").'" data-aos="fade-down" class="active-ind-startup-list">';
                            }else{
                                echo '<img src="'.base_url("assets/img/inactive-startup-icon.png").'" data-aos="fade-down" class="active-ind-startup-list">';
                            }
                         ?>
                    </div>
                    <a style="text-decoration-color: black" href="<?php echo base_url("startup/view/$value[startup_id]"); ?>">
                        <div class="align-self-center logo-startup-list" style="background-image:url(&quot;<?php echo base_url("assets/startup/$value[startup_image]"); ?>&quot;);"></div>
                    </a>
                    <div>
                        <p class="text-center title-startup-title"><?php echo $value['startup_name'] ?></p>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            
           
            