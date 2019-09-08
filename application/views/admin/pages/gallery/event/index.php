<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">Manage Event Gallery</h3>
        <a id="btnModal" href="javascript:void(0);" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i> Add New Event Gallery</a>
        <div class="clearfix"></div>
        <p class="panel-subtitle">This is your event gallery dashboard</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="setting-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Event Name</th>
                                <th>Place</th>
                                <th>Number of Image</th>
                                <th>Archive Year</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                            <tr>
                                <td>
                                    <p style="text-transform:capitalize;">
                                        <?php echo strtolower($item['event_archive_name'])?>
                                    </p>
                                </td>
                                <td>
                                    <?php echo $item['event_archive_place']?>
                                </td>
                                <td>
                                    <?php echo $item['count(gallery_image_key)']?> Images
                                </td>
                                <td>
                                    <?php echo $item['archive_year']?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url()?>admin/manage/event/gallery/detail/<?php echo $item['event_archive_id']?>"><span class="label label-success">View</span></a>
                                    <!--                                    <a href="<?php echo base_url()?>administrator/apis/deleteGallery/<?php echo $item['gallery_image_id']?>" onclick="return confirm('Are you sure to delete <?php echo $item['gallery_image_name']?> ?')"><span class="label label-danger">Delete</span></a>-->
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
<div id="addModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Client</h4>
            </div>
            <div class="modal-body">
                <form id="addForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="control-label">Select Event</label>
                        <select id="yearselect" class="form-control" name="gallery_image_key" data-validate="gallery_image_key"> 
                         <?php foreach ($events as $event): ?>
                             <option value="<?php echo $event['event_archive_id']?>" data-validate="event_archive_id" data-key="gallery_image_key">
                                 <?php echo $event['event_archive_name']?>
                             </option>
                         <?php endforeach ?>                          
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Event Image</label>
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
            $('#addModal').find('.modal-title').text('Add New Event Gallery');
            $('#addModal').find('#addBtn').text('Add New Image');
            $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/addGallery/event/');
            $('#addForm').attr('method', 'post');
        })

        $('button[data-reset=addReset]').click(function() {
            $('#addForm')[0].reset();
            $('#addForm > .form-group').removeClass('has-error');
        })

        $('.item-edit').on('click', function() {
            var id = $(this).attr('data-id');
            console.log(id);
            alert(id);
        })
    })
</script>
