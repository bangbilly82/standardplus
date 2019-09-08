<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title">Social Media Account</h3>
        <p class="panel-subtitle">This is your social media setting dashboard</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8">
                <div class="setting-wrapper">
                    <form id="addForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="" class="control-label">Facebook Account</label>
                            <input type="text" class="form-control" value="<?php echo $items['social_facebook_link']?>" date-validate="contact_fax" name="contact_fax">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Instagram Account</label>
                            <input type="text" class="form-control" value="<?php echo $items['social_instagram_link']?>" date-validate="contact_fax" name="contact_fax">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Twitter Account</label>
                            <input type="text" class="form-control" value="<?php echo $items['social_twitter_link']?>" date-validate="contact_fax" name="contact_fax">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Youtube Account</label>
                            <input type="text" class="form-control" value="<?php echo $items['social_youtube_link']?>" date-validate="contact_fax" name="contact_fax">
                        </div>
                        <hr>
                        <button id="addSetting" type="submit" class="btn btn-primary">Update Social Media Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END TEAM SECTION -->