<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title">Contact Settings</h3>
        <p class="panel-subtitle">This is your contact setting page dashboard</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8">
                <div class="setting-wrapper">
                    <form action="<?php echo base_url()?>administrator/apis/updateContact/<?php echo $items['contact_id']?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="" class="control-label">Address</label>
                            <textarea class="form-control" name="address" id="" cols="" rows="3" data-validate="address" required><?php echo $items['address']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Phone</label>
                            <input type="text" class="form-control" value="<?php echo $items['phone']?>" date-validate="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Fax</label>
                            <input type="text" class="form-control" value="<?php echo $items['fax']?>" date-validate="fax" name="fax" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="email" class="form-control" value="<?php echo $items['email']?>" date-validate="email" name="email" required>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">Update Contact</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END TEAM SECTION -->