        <div class="container no-navbar-container">
            <div class="row" style="height:59px;">
                <div class="col">
                    <h1 class="text-left ia-title" data-aos="fade-down">
                    <?php echo $staff['front_degree'] ?> 
                    <?php echo $staff['first_name'] ?>  
                    <?php echo $staff['last_name'] ?>  
                    <?php echo $staff['back_degree'] ?> 
                    </h1>
                    <hr data-aos="fade-left" class="title-underline-base ia-gray-title-underline">
                    <hr data-aos="fade-right" class="title-underline">
                </div>
            </div>
            <div class="row">
                <div class="col col-md-5 col-xs-5 col-lg-5"><img class="img-fluid profile-image-detail" src="<?php echo base_url('assets/staff/'.$staff['person_image']); ?>"></div>
                <div class="col col-md-7 col-xs-7 col-lg-7">
                    <h1 class="ia-title"><?php echo $staff['person_company'] ?> </h1>
                    <hr class="underline-fluid ia-gray-title-underline">
                    <p class="description-text"><?php echo $staff['person_position'] ?> </p>
                    <p class="description-text"><?php echo $staff['last_education'] ?> </p>
                    <h1 class="ia-title">description</h1>
                    <hr class="underline-fluid ia-gray-title-underline">
                    <p><?php echo $staff['person_description'] ?></p>
                    <hr class="underline-fluid ia-gray-title-underline">
                    <div class="d-inline-flex social-detail-icon">
                        <a target="_blank" href="http://<?php echo $staff['person_linkedin']; ?>"><img src="<?php echo base_url('assets/img/li-logo.png'); ?>" class="social-network-icon my-info-icons"></a>
                        <a target="_blank" href="http://<?php echo $staff['person_website']; ?>"><img src="<?php echo base_url('assets/img/web-logo.png'); ?>" class="social-network-icon my-info-icons"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    