<section id="detail-archive">
    <div class="columns is-multiline">
        <div class="column is-full">
            <div class="content">
                <div class="breadcrumb">
                    <label>Home / Training Provider / <?php echo $title?></label>
                </div>
                <br><br>
                <h3>
                    <?php echo $title?>
                </h3>                                
            </div>
        </div>
        <div class="column is-full">
            <?php if($items > 1): ?>
            <?php foreach ($items as $item): ?>
            <div class="columns is-multiline">
                <div class="column is-full">
                    <div class="content">
                        <h4>
                            <?php echo $item['training_archive_year']?> |
                            <?php echo $item['training_archive_name']?>,
                            <?php echo $item['training_archive_place']?>
                        </h4>
                    </div>
                </div>
                <div class="column is-full">
                    <div class="content">
                        <?php $galleries = $this->mgal->getAllTrainingGalleryByKey($item['training_archive_id']); ?>
                        <?php if(empty($galleries)): ?>
                        <p>Belum ada gambar</p>
                        <?php endif ?>
                        <?php if($galleries > 1): ?>
                        <ul id="responsive" class="gallery content-slider list-unstyled clearfix bg-test">
                            <?php foreach ($galleries as $gal): ?>
                            <li data-src="<?php echo base_url()?>resources/images/gallery/<?php echo $gal['training_image_name']?>">
                                <img src="<?php echo base_url()?>resources/images/gallery/<?php echo $gal['training_image_name']?>" />
                            </li>
                            <?php endforeach ?>
                        </ul>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            <?php endif; ?>

            <?php if(empty($items)): ?>

            <div class="columns is-multiline">
                <div class="column is-full">
                    <div class="content">
                        <p>Belum ada data !</p>
                    </div>
                </div>
            </div>

            <?php endif; ?>
        </div>
    </div>
</section>
