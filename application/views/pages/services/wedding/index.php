<section id="merchant">
    <div class="columns">
        <div class="column is-5">
            <div class="content desc">
                <div class="breadcrumb">
                    <label>Home / Wedding Organizer</label>
                </div>
                <h2>Wedding Organizer</h2>
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
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
