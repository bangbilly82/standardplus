<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">
            <?php echo $items[0]['event_archive_name']?> Gallery
        </h3>
        <a id="btnModal" href="javascript:void(0);" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i> Add New Image</a>
        <div class="clearfix"></div>
        <p class="panel-subtitle">This is your event gallery detail dashboard</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="setting-wrapper">
                    <div class="row">
                        <?php foreach ($items as $item): ?>
                        <div class="col-md-3">
                            <div class="image-detail-wrapper">
                                <img src="<?php echo base_url()?>resources/images/gallery/<?php echo $item['gallery_image_name']?>" />
                                <div class="image-detail-action">
                                    <a href="<?php echo base_url()?>administrator/apis/deleteGalleryEvent/<?php echo $item['gallery_image_id']?>/<?php echo $item['gallery_image_key']?>" onclick="return confirm('Are you sure to delete ?')" title="Delete"><span><i class="fa fa-times-circle-o"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="addModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Client</h4>
            </div>
            <div class="modal-body">
                <form id="addForm" enctype="multipart/form-data">
                    <input class="form-control" type="hidden" name="gallery_image_key" data-validate="gallery_image_key" value="<?php echo $items[0]['gallery_image_key']?>" readonly> 
                    <div class="form-group">
                        <label for="" class="control-label">Select Image</label>
                        <input type="file" name="gallery_image_name" required>
                    </div>
                    <p class="small">Recommended image size : 750px x 500px</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" data-reset="addReset">Cancel</button>
                <button id="addBtn" type="submit" class="btn btn-primary">Add New</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- END TEAM SECTION -->


<script>
    $(function() {
        $('#btnModal,#btnPhoto').click(function() {
            $('#addModal').modal('show');
            $('#addModal').find('.modal-title').text('Add New Image');
            $('#addModal').find('#addBtn').text('Add New Image');
            $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/addGalleryEvent/<?php echo $item['gallery_image_key']?>');
            $('#addForm').attr('method', 'post');
        })

        $('button[data-reset=addReset]').click(function() {
            $('#addForm')[0].reset();
            $('#addForm > .form-group').removeClass('has-error');
        })
    })

</script>
