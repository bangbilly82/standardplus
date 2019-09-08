<section id="team">
    <div class="columns is-gapless is-multiline">
        <div class="column is-3">
            <div class="content desc">
                <div class="breadcrumb">
                    <label>Home / Our Team</label>
                </div>
                <h2>Our <br> Team</h2>
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
                                    <img src="<?php echo base_url()?>resources/images/team/<?php echo $item['team_image']?>" alt="" width="100px" height="100px">
                                    <h4>
                                        <?php echo $item['team_name']?>
                                    </h4>
                                    <label><?php echo $item['team_role']?></label>
                                </div>
                                <div class="profile-info">
                                    <p>
                                        <?php echo $item['team_description']?>
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
