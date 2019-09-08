<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">Manage Archive Folder</h3>
        <a id="btnModal" href="javascript:void(0);" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i> Add New Archive Folder</a>
        <div class="clearfix"></div>
        <p class="panel-subtitle">You can add or delete archive from this page</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="setting-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="200">Archive Folder Cover</th>
                                <th>Year</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                            <tr>
                                <td>
                                    <img src="<?php echo base_url()?>resources/images/archive/<?php echo $item['archive_image_cover']?>" alt="Avatar" width="100%">
                                </td>
                                <td>
                                    <?php echo $item['archive_year']?>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="item-edit"><span class="label label-success">View</span></a>
                                    <a href="<?php echo base_url()?>administrator/apis/deleteArchive/<?php echo $item['archive_id']?>" onclick="return confirm('Are you sure to delete archive <?php echo $item['archive_year']?> ?')"><span class="label label-danger">Delete</span></a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END TEAM SECTION -->
