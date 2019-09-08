<section id="merchant">
    <div class="columns">
        <div class="column is-5">
            <div class="content">
                <div class="breadcrumb">
                    <label>Home / Training Provider</label>
                </div>
                <h2>Training Provider</h2>
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

                        <!--
                        <li>
                            <img src="<?php echo base_url()?>resources/images/slide/2011_1_2.JPG" />
                            <div class="caption">
                                <div class="caption-item">
                                    <h2>2011</h2>
                                </div>
                                <div class="caption-item">
                                    <h4>Entrepreneurship</h4>
                                    <p>Taspen, Jogjakarta</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url()?>resources/images/slide/2011_1_3.JPG" />
                            <div class="caption">
                                <div class="caption-item">
                                    <h2>2011</h2>
                                </div>
                                <div class="caption-item">
                                    <h4>MANAGING CHANGES WORKSHOP</h4>
                                    <p>Polda, Kepri</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url()?>resources/images/slide/2012_1_1.JPG" />
                            <div class="caption">
                                <div class="caption-item">
                                    <h2>2012</h2>
                                </div>
                                <div class="caption-item">
                                    <h4>Entrepreneurship</h4>
                                    <p>Kalbe Farma</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url()?>resources/images/slide/2012_1_2.JPG" />
                            <div class="caption">
                                <div class="caption-item">
                                    <h2>2012</h2>
                                </div>
                                <div class="caption-item">
                                    <h4>PROTOKOLER & TABLE MANNER</h4>
                                    <p>PT Newmont</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url()?>resources/images/slide/2012_1_3.JPG" />
                            <div class="caption">
                                <div class="caption-item">
                                    <h2>2012</h2>
                                </div>
                                <div class="caption-item">
                                    <h4>TEAM BUILDING</h4>
                                    <p>Kopega PLN</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url()?>resources/images/slide/2013_1_1.JPG" />
                            <div class="caption">
                                <div class="caption-item">
                                    <h2>2013</h2>
                                </div>
                                <div class="caption-item">
                                    <h4>BRANCH MANAGER ACADEMY</h4>
                                    <p>Bank Muamalat</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url()?>resources/images/slide/2013_1_2.JPG" />
                            <div class="caption">
                                <div class="caption-item">
                                    <h2>2013</h2>
                                </div>
                                <div class="caption-item">
                                    <h4>TEAM BUILDING TASPEN</h4>
                                    <p>Lombok</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url()?>resources/images/slide/2014_1_1.JPG" />
                            <div class="caption">
                                <div class="caption-item">
                                    <h2>2014</h2>
                                </div>
                                <div class="caption-item">
                                    <h4>ENTREPRENEURSHIP <br> FOR PRE - RETIREMENT</h4>
                                    <p>Kalbe Farma 3</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url()?>resources/images/slide/2014_1_2.JPG" />
                            <div class="caption">
                                <div class="caption-item">
                                    <h2>2014</h2>
                                </div>
                                <div class="caption-item">
                                    <h4>SERVICE LEADERSHIP</h4>
                                    <p>KM Kelud</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url()?>resources/images/slide/2014_1_3.JPG" />
                            <div class="caption">
                                <div class="caption-item">
                                    <h2>2014</h2>
                                </div>
                                <div class="caption-item">
                                    <h4>STRATEGI PENGELOLAAN UKM</h4>
                                    <p>Taspen - Bandung</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url()?>resources/images/slide/2015_1_1.JPG" />
                            <div class="caption">
                                <div class="caption-item">
                                    <h2>2015</h2>
                                </div>
                                <div class="caption-item">
                                    <h4>ENTREPRENEURSHIP <br> FOR PRE - RETIREMENT</h4>
                                    <p>Kalbe Farma 4</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url()?>resources/images/slide/2016_1_1.JPG" />
                            <div class="caption">
                                <div class="caption-item">
                                    <h2>2016</h2>
                                </div>
                                <div class="caption-item">
                                    <h4>ENTREPRENEURSHIP <br> FOR PRE - RETIREMENT</h4>
                                    <p>Kalbe Farma 5</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url()?>resources/images/slide/2016_1_2.JPG" />
                            <div class="caption">
                                <div class="caption-item">
                                    <h2>2016</h2>
                                </div>
                                <div class="caption-item">
                                    <h4>ENTREPRENEURSHIP <br> FOR PRE - RETIREMENT</h4>
                                    <p>RSPI (Rumah Sakit Pondok Indah)</p>
                                </div>
                            </div>
                        </li>
-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="training-archive">
    <div class="columns is-multiline">
        <div class="column is-full">
            <div class="content">
                <h3>Training Services List</h3>
            </div>
        </div>

        <?php foreach ($services as $service): ?>
        <div class="column is-3">
            <a href="<?php echo base_url()?>service/training-provider/<?php echo str_replace("&","and",str_replace(" ","-",strtolower($service['training_service_name'])))?>?q=<?php echo $service['training_service_id']?>/">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/<?php echo $service['training_service_image']?>" />
                        </div>
                        <div class="archive-info">
                            <h5><?php echo $service['training_service_name']?></h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach?>

<!--
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/training-provider/entrepreneurship-for-pre-retirement">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/entrepreneurship.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>Entrepreneurship for Pre-Retirement</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/training-provider/managing-changes">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/managingchanges.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>Managing Changes</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/training-provider/maximizing-power-point">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/maximizingpowerpoint.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>Maximizing Power Point</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/training-provider/outbond">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/outbondwargames.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>Outbond</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/training-provider/pelatihan-peningkatan-potensi-bagi-guru">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/pelatihanpeningkatanpotensidiribagiguru.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>Pelatihan Peningkatan Potensi Bagi Guru</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/training-provider/problem-solving-and-decision-making">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/problemsolvinganddecisionmaking.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>Problem Solving & Decision Making</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/training-provider/protokoler-and-table-manner">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/protokolerandtablemanner.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>Protokoler & Table Manner</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/training-provider/refreshing-management">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/refreshingmanagement.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>Refreshing Management</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/training-provider/service-excellence">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/serviceexcellence.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>Service Excellence</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/training-provider/service-leadership">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/serviceleadership.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>Service Leadership</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/training-provider/strategi-mengelola-pertumbuhan-usaha-bagi-ukm">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/strategimengelolapertumbuhanusahabagiukm.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>Strategi Mengelola Pertumbuhan Usaha bagi UKM</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/training-provider/team-building">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/teambuilding.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>Team Building</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="column is-3">
            <a href="<?php echo base_url()?>site/services/training-provider/teknik-negosiasi-dan-handling">
                <div class="archive-items">
                    <div class="content">
                        <div class="archive-images">
                            <img src="<?php echo base_url()?>resources/images/archive/tekniknegosiasi.JPG" />
                        </div>
                        <div class="archive-info">
                            <h5>Teknik Negosiasi & Handling</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
-->
    </div>
</section>
