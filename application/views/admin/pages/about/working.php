<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">Manage Working With Us</h3>
        <a id="btnModal" href="javascript:void(0);" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i> Add New Working</a>
        <div class="clearfix"></div>
        <p class="panel-subtitle">You can add, edit or delete working from this page</p>
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
                                    <img src="<?php echo base_url()?>resources/images/working/<?php echo $item['working_image']?>" class="img-circle" alt="Avatar" width="50px">
                                </td>
                                <td>
                                    <?php echo $item[ 'working_name']?>
                                </td>
                                <td>
                                    <?php echo $item[ 'working_description']?>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="item-edit" data-id="<?php echo $item['working_id']?>"><span class="label label-success">Edit</span></a>
                                    <a href="<?php echo base_url()?>administrator/apis/deleteWorking/<?php echo $item['working_id']?>" onclick="return confirm('Are you sure to delete <?php echo $item['working_name']?> ?')"><span class="label label-danger">Delete</span></a>
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
                        <input class="form-control" type="text" placeholder="" name="working_name" data-validate="working_name">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Description</label>
                        <textarea class="form-control" name="working_description" id="" cols="" rows="5" data-validate="working_desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Image</label>
                        <input type="file" name="working_image" required>
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
            $('#addModal').find('.modal-title').text('Add Working');
            $('#addModal').find('#addBtn').text('Add Working');
            $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/addWorking');
            $('#addForm').attr('method', 'post');
        })

        $('button[data-reset=addReset]').click(function() {
            $('#addForm')[0].reset();
            $('#addForm > .form-group').removeClass('has-error');
        })

        // Add Team
        $('#addBtn').click(function() {
            var nameInput = $('input[data-validate=working_name]');
            var descText = $('textarea[data-validate=working_desc]');
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
            var url = '<?php echo base_url()?>administrator/apis/editWorking';

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
                    var nameInput = $('input[data-validate=working_name]');
                    var descText = $('textarea[data-validate=working_desc]');
                    $('#addModal').modal('show');
                    $('#addModal').find('.modal-title').text('Edit ' + data[0].working_name);
                    $('#addModal').find('#addBtn').text('Edit Praktisi');
                    $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/updateWorking/' + data[0].working_id);
                    $('#addForm').attr('method', 'post');
                    nameInput.val(data[0].working_name);
                    descText.val(data[0].working_description);
                },
                error: function() {
                    alert('Failed to fetch data !');
                }
            })
        })

    })

</script>
