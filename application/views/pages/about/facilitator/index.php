<section id="facilitator">
    <div class="columns is-gapless is-multiline">
        <div class="column is-3">
            <div class="content desc">
                <div class="breadcrumb">
                    <label>Home / Facilitator</label>
                </div>
                <h2>Facilitator</h2>
                <p class="description">
                    <?php echo $page['page_description']?>
                </p>
            </div>
        </div>
        <div class="column is-9">
            <div class="column is-full">
                <div class="columns is-multiline">
                    <?php foreach ($items as $item): ?>
                    <div class="column is-half">
                        <div class="content">
                            <div class="team-wrapper">
                                <div class="profile-wrapper">
                                    <img src="<?php echo base_url()?>resources/images/facilitator/<?php echo $item['facilitator_image']?>" alt="" width="120px" height="120px">
                                    <h4><?php echo $item['facilitator_name']?></h4>
                                </div>
                                <div class="profile-info">
                                    <p>
                                        <?php echo $item['facilitator_description']?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>
