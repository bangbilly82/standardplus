<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">Manage Praktisi Wirausaha</h3>
        <a id="btnModal" href="javascript:void(0);" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i> Add New Praktisi Wirausaha</a>
        <div class="clearfix"></div>
        <p class="panel-subtitle">You can add, edit or delete praktisi from this page</p>
    </div>
    <div class="panel-body no-padding">
        <div class="row">
            <div class="col-md-12">
                <div class="team-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th width="160">Name</th>
                                <th>Description</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                            <tr>
                                <td>
                                    <img src="<?php echo base_url()?>resources/images/praktisi/<?php echo $item['praktisi_image']?>" class="img-circle" alt="Avatar" width="50px">
                                </td>
                                <td>
                                    <?php echo $item[ 'praktisi_name']?>
                                </td>
                                <td>
                                    <?php echo $item[ 'praktisi_description']?>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="item-edit" data-id="<?php echo $item['praktisi_id']?>"><span class="label label-success">Edit</span></a>
                                    <a href="<?php echo base_url()?>administrator/apis/deletePraktisi/<?php echo $item['praktisi_id']?>" onclick="return confirm('Are you sure to delete <?php echo $item['praktisi_name']?> ?')"><span class="label label-danger">Delete</span></a>
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
                <h4 class="modal-title">Add New Team</h4>
            </div>
            <div class="modal-body">
                <form id="addForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="control-label">Name</label>
                        <input class="form-control" type="text" placeholder="" name="praktisi_name" data-validate="praktisi_name">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Description</label>
                        <textarea class="form-control" name="praktisi_description" id="" cols="" rows="5" data-validate="praktisi_desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Image</label>
                        <input type="file" name="praktisi_image" required>
                    </div>
                    <p class="small">Recommended image size : 150px x 150px</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" data-reset="addReset">Cancel</button>
                        <button id="addBtn" type="submit" class="btn btn-primary">Add New</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- END TEAM SECTION -->

<script>
    $(function() {

        $('#btnModal').click(function() {
            $('#addModal').modal('show');
            $('#addModal').find('.modal-title').text('Add Praktisi Wirausaha');
            $('#addModal').find('#addBtn').text('Add Praktisi Wirausaha');
            $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/addPraktisi');
            $('#addForm').attr('method', 'post');
        })

        $('button[data-reset=addReset]').click(function() {
            $('#addForm')[0].reset();
            $('#addForm > .form-group').removeClass('has-error');
        })

        // Add Team
        $('#addBtn').click(function() {
            var nameInput = $('input[data-validate=praktisi_name]');
            var descText = $('textarea[data-validate=praktisi_desc]');
            var result = '';
            if (nameInput.val() == '') {
                nameInput.parent().addClass('has-error');
            } else {
                nameInput.parent().removeClass('has-error');
                result += '1';
            }

            if (descText.val() == '') {
                descText.parent().addClass('has-error');
            } else {
                descText.parent().removeClass('has-error');
                result += '2';
            }
        })

        // Edit Team
        $('.item-edit').on('click', function() {
            var id = $(this).attr('data-id');
            var url = '<?php echo base_url()?>administrator/apis/editPraktisi';

            $.ajax({
                url: url,
                method: 'get',
                dataType: 'json',
                data: {
                    id: id
                },
                beforeSend: function() {
                    console.log('Loading...');
                    $('#addModal').modal('show');
                    $('#addModal').find('.modal-title').text('Fetching data...');
                    $('#addModal').find('.modal-body').hide();
                },
                success: function(data) {
                    $('#addModal').find('.modal-body').show();
                    var nameInput = $('input[data-validate=praktisi_name]');
                    var descText = $('textarea[data-validate=praktisi_desc]');
                    $('#addModal').modal('show');
                    $('#addModal').find('.modal-title').text('Edit ' + data[0].praktisi_name);
                    $('#addModal').find('#addBtn').text('Edit Praktisi Wirausaha');
                    $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/updatePraktisi/' + data[0].praktisi_id);
                    $('#addForm').attr('method', 'post');
                    nameInput.val(data[0].praktisi_name);
                    descText.val(data[0].praktisi_description);
                },
                error: function() {
                    alert('Failed to fetch data !');
                }
            })
        })

    })

</script>
