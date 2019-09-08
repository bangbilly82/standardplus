<section id="detail-archive">
    <div class="columns is-multiline">
        <div class="column is-full">
            <div class="content">
                <div class="breadcrumb">
                    <label>Home / Event Organizer / Archive 
                    </label>
                </div>
                <br>
                <br>
                <h3 style="text-transform: none;">
                    Berikut event yang kami selenggarakan pada tahun <?php echo $year?>
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
                            <?php echo strtoupper($item['event_archive_name'])?>,
                            <?php echo strtoupper($item['event_archive_place'])?>
                        </h4>
                    </div>
                </div>
                <div class="column is-full">
                    <div class="content">
                        <?php $galleries = $this->meve->getAllEventGalleryByKey($item['event_archive_id']); ?>
                        <?php if(empty($galleries)): ?>
                        <p>Belum ada gambar</p>
                        <?php endif ?>
                        <?php if($galleries > 1): ?>
                        <ul id="responsive" class="gallery content-slider list-unstyled clearfix bg-test">
                            <?php foreach ($galleries as $gal): ?>
                            <li data-src="<?php echo base_url()?>resources/images/gallery/<?php echo $gal['gallery_image_name']?>">
                                <img src="<?php echo base_url()?>resources/images/gallery/<?php echo $gal['gallery_image_name']?>" />
                            </li>
                            <?php endforeach ?>
                        </ul>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <br>
            <?php endforeach ?>
            <?php endif?>

            <?php if(empty($items)): ?>

            <div class="columns is-multiline">
                <div class="column is-full">
                    <div class="content">
                        <p>Belum ada event untuk tahun
                            <?php echo $year?> !</p>
                    </div>
                </div>
            </div>

            <?php endif; ?>
        </div>
    </div>
</section>
