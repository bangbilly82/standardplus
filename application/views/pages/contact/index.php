<section id="map-wrapper">
    <div class="columns is-gapless is-multiline">
        <div class="column is-6">
            <div id="map"></div>
        </div>
        <div class="column is-6 contact-address">
            <div class="content">
               <div class="breadcrumb">
                    <label>Home / Contact</label>
                </div>
                <h2>Contact us</h2>
                <p class="address-location"><?php echo $items['address']?></p>
                <p>Telepon - <?php echo $items['phone']?></p>
                <p>Fax - <?php echo $items['fax']?></p>
                <p>Email - <strong><?php echo $items['email']?></strong></p>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="columns is-gapless is-multiline">
        <div class="column is-full">
            <div class="content">
                <form action="">
                    <div class="columns is-gapless is-multiline">
                        <div class="column is-half form">
                            <label class="label">Name</label>
                            <p class="control">
                                <input class="input" type="text">
                            </p>
                        </div>
                        <div class="column is-half form">
                            <label class="label">Email</label>
                            <p class="control">
                                <input class="input" type="email">
                            </p>
                        </div>
                        <div class="column is-full form">
                            <label class="label">Message</label>
                            <p class="control">
                                <textarea class="textarea"></textarea>
                            </p>
                            <br>
                            <div class="control is-grouped is-pulled-right">
                                <p class="control">
                                    <button class="button">Submit</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>