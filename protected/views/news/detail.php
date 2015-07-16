<?php
$this->breadcrumbs = array(
    'Hoạt động - Fashion Show'
);
?>
<div class="content_top">
    <div class="wrap article">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1><?php echo $detail->title; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 news-date"><?php echo $detail->create_time ?></div>
                <div class="col-lg-7 text-right news-detail-social">
                    <i class="fa fa-facebook space"></i>
                    <i class="fa fa-linkedin space"></i>
                    <i class="fa fa-instagram space"></i>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 new-detail-teaser">
                    <strong><?php echo $detail->teaser; ?></strong>
                </div>
            </div>
            <div class="spacer2"></div>
            
            <div class="spacer2"></div>
            <div class="row">
                <div class="col-lg-12 new-detail-content">
                    <?php echo $detail->content; ?>
                </div>
            </div>    
        </div>
    </div>
</div>
