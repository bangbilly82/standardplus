<section id="merchant">
    <div class="columns">
        <div class="column is-5">
            <div class="content">
                <div class="breadcrumb">
                    <label>Home / Event Organizer</label>
                </div>
                <h2>Event <br> Organizer</h2>
                <p class="description">
                    <?php echo $page['page_description']?>
                </p>
            </div>
        </div>
        <div class="column is-7 merchant-slide">
            <div class="column is-full">
                <div class="flexslider">
                    <ul class="slides">
                        <?php foreach ($sliders as $slide): ?>
                        <li>
                            <img src="<?php echo base_url()?>resources/images/slide/<?php echo $slide['images_name']?>" />
                            <div class="caption">
                                <div class="caption-item">
                                    <h2>
                                        <?php echo $slide['images_year']?>
                                    </h2>
                                </div>
                                <div class="caption-item">
                                    <h4>
                                        <?php echo $slide['images_caption']?>
                                    </h4>
                                    <p>
                                        <?php echo $slide['images_client_name']?>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="event-archive">
    <div class="columns is-multiline">
        <div class="column is-full">
            <div class="content">
                <h3>Event Archive</h3>
            </div>
        </div>

        <?php foreach ($archives as $archive): ?>
        <div class="column is-3">
            <a href="<?php echo base_url()?>service/event-organizer/archive/<?php echo $archive['archive_year']?>">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/<?php echo $archive['archive_image_cover']?>" />
                        </div>
                        <div class="archive-info">
                            <h5><?php echo $archive['archive_year']?></h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach ?>

<!--
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/event-organizer/archive/2012">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/ev_2012.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>2012</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/event-organizer/archive/2013">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/ev_2013.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>2013</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/event-organizer/archive/2014">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/ev_2014.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>2014</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/event-organizer/archive/2015">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/ev_2015.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>2015</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/event-organizer/archive/2016">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/ev_2016.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>2016</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
-->
   
    </div>
</section>
