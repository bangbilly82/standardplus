<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">Manage Event Organizer Page Slider</h3>
        <a id="btnModal" href="javascript:void(0);" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i> Add New Event Slider</a>
        <div class="clearfix"></div>
        <p class="panel-subtitle">This is your event organizer slider page dashboard</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="setting-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="100">Image</th>
                                <th>Event Name</th>
                                <th>Place</th>
                                <th>Year</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                            <tr>
                                <td>
                                    <img src="<?php echo base_url()?>resources/images/slide/<?php echo $item['images_name']?>" alt="Avatar" width="100%">
                                </td>
                                <td>
                                    <?php echo $item['images_caption']?>
                                </td>
                                <td>
                                    <?php echo $item['images_client_name']?>
                                </td>
                                <td>
                                    <?php echo $item['images_year']?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url()?>administrator/apis/deleteSlider/event-organizer/<?php echo $item['images_id']?>" onclick="return confirm('Are you sure to delete <?php echo $item['images_name']?> ?')"><span class="label label-danger">Delete</span></a>
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
                    <input class="form-control" type="hidden" name="images_category" data-validate="images_category" value="5" readonly> 
                    <div class="form-group">
                        <label for="" class="control-label">Slider Image</label>
                        <input type="file" name="images_name" required>
                    </div>
                    <p class="small">Recommended image size : 750px x 500px</p>
                    <hr>
                    <label for="">Caption</label>
                    <div class="form-group">
                        <label for="" class="control-label">Event Name</label>
                        <input class="form-control" type="text" placeholder="" name="images_caption" data-validate="images_caption" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Place</label>
                        <input class="form-control" type="text" placeholder="" name="images_client_name" data-validate="images_client_name" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Year</label>
                        <input class="form-control" type="text" placeholder="" name="images_year" data-validate="images_year" required>
                    </div>
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
        $('#btnModal').click(function() {
            $('#addModal').modal('show');
            $('#addModal').find('.modal-title').text('Add New Event Slider');
            $('#addModal').find('#addBtn').text('Add New Slider');
            $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/addSliderAll/event-organizer');
            $('#addForm').attr('method', 'post');
        })

        $('button[data-reset=addReset]').click(function() {
            $('#addForm')[0].reset();
            $('#addForm > .form-group').removeClass('has-error');
        })
    })

</script>
