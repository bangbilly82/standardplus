<section id="testimony">
    <div class="columns is-gapless is-multiline">
        <div class="column is-3">
            <div class="content desc">
                <div class="breadcrumb">
                    <label>Home / Testimony</label>
                </div>
                <h2>Our Client Love Us</h2>
                <p class="description">
                    <?php echo $page['page_description']?>
                </p>
            </div>
        </div>
        <div class="column is-9 testimony-client">
            <div class="column is-full">
                <div class="columns is-multiline">
                    <?php foreach ($items as $item): ?>
                    <div class="column is-half">
                        <div class="content">
                            <div class="team-wrapper">
                                <div class="profile-wrapper">
                                    <img src="<?php echo base_url()?>resources/images/testimony/<?php echo $item['testimony_image']?>" alt="" width="100px" height="100px">
                                    <h4>
                                        <?php echo $item['testimony_name']?>
                                    </h4>
                                    <div class="profile-desc">
                                        <label><?php echo $item['testimony_from']?></label>
                                        <label><?php echo $item['testimony_service']?></label>
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <p>
                                        <?php echo $item['testimony_text']?>
                                    </p>
                                    <div class="hider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>
    </div>
</section>
