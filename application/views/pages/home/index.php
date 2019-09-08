<section id="slider-headline">
    <div class="columns is-gapless">
        <div class="column">
            <div class="flexslider">
                <ul class="slides">
                    <?php foreach ($sliders as $slide): ?>
                    <li>
                        <img src="<?php echo base_url()?>resources/images/slide/<?php echo $slide['images_name']?>" alt="<?php echo $slide['images_name']?>">
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="slider-text">
                <div class="content">
                    <h2>We Create</h2>
                    <h2>You Celebrate</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="headline">
    <div class="columns is-gapless">
        <div class="column is-full">
            <div class="content">
                <h4>Tentang Standard plus</h4>
                <h3>
                    <?php echo $page['page_description']?>
                </h3>
            </div>
        </div>
    </div>
</section>

<section id="clients">
    <div class="columns is-gapless is-multiline is-mobile">
        <div class="column is-full">
            <div class="content desc">
                <h2>Our Client & Partner</h2>
                <hr>
            </div>
        </div>

        <div class="column is-full">

            <div class="content">
                <ul id="responsive-4" class="gallery content-slider list-unstyled clearfix bg-test">
                    <?php foreach ($items as $item): ?>
                    <li>
                        <img src="<?php echo base_url()?>resources/images/client/<?php echo $item['clients_image']?>" alt="<?php echo $item['clients_name']?>">
                    </li>
                    <?php endforeach?>
                </ul>
            </div>
        </div>
    </div>
</section>
