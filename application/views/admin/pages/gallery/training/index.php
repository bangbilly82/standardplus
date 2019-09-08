<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">Manage Training Gallery</h3>
        <a id="btnModal" href="javascript:void(0);" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i> Add New Gallery</a>
        <div class="clearfix"></div>
        <p class="panel-subtitle">This is your training gallery management page</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="setting-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Training Name</th>
                                <th>Client</th>
                                <th>Number of Image</th>
                                <th>Year</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                            <tr>
                                <td>
                                    <p style="text-transform:capitalize;">
                                        <?php echo strtolower($item['training_archive_name'])?>
                                    </p>
                                </td>
                                <td>
                                    <?php echo $item['training_archive_place']?>
                                </td>
                                <td>
                                    <?php echo $item['count(training_image_key)']?> Images
                                </td>
                                <td>
                                    <?php echo $item['training_archive_year']?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url()?>admin/manage/training/gallery/detail/<?php echo $item['training_archive_id']?>"><span class="label label-success">View</span></a>
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
                        <label for="" class="control-label">Select Client</label>
                        <select id="clientselect" class="form-control" name="training_image_key" data-validate="training_image_key"> 
                         <?php foreach ($archives as $archive): ?>
                             <option value="<?php echo $archive['training_archive_id']?>">
                                 <?php echo $archive['training_archive_year']?> - <?php echo $archive['training_archive_name']?> - <?php echo $archive['training_archive_place']?>
                             </option>
                         <?php endforeach ?>                          
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Training Image</label>
                        <input type="file" name="training_image_name" required>
                    </div>
                    <p class="small">Recommended image size : 750px x 500px</p>
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
</div>


<script>
    $(function() {
        $('#btnModal').click(function() {
            $('#addModal').modal('show');
            $('#addModal').find('.modal-title').text('Add New Training Gallery');
            $('#addModal').find('#addBtn').text('Add New Image');
            $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/addTrainingGallery/training/');
            $('#addForm').attr('method', 'post');
        })

        $('button[data-reset=addReset]').click(function() {
            $('#addForm')[0].reset();
            $('#addForm > .form-group').removeClass('has-error');
        })

        $('.item-edit').on('click', function() {
            var id = $(this).attr('data-id');
            console.log(test);
        })

        //        $('.item-edit').on('click', function() {
        //            var id = $(this).attr('data-id');
        //            var url = '<?php echo base_url()?>administrator/apis/editEvent';
        //
        //            $.ajax({
        //                url: url,
        //                method: 'get',
        //                dataType: 'json',
        //                data: {
        //                    id: id
        //                },
        //                success: function(data) {
        //                    var nameInput = $('input[data-validate=event_archive_name]');
        //                    var placeText = $('input[data-validate=event_archive_place]');
        //                    var yearText = $("select[name=event_archive_year]");
        //                    $('#addModal').modal('show');
        //                    $('#addModal').find('.modal-title').text('Edit ' + data[0].event_archive_name);
        //                    $('#addModal').find('#addBtn').text('Edit Event');
        //                    $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/updateEvent/' + data[0].event_archive_id);
        //                    $('#addForm').attr('method', 'post');
        //                    nameInput.val(data[0].event_archive_name);
        //                    placeText.val(data[0].event_archive_place);
        //                    yearText.prop('selectedIndex', (data[0].event_archive_year) - 1);
        //                },
        //                error: function() {
        //                    alert('Failed to Edit Event');
        //                }
        //            })
        //        })
    })

</script>
