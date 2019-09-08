<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">Manage Training Services</h3>
        <a id="btnModal" href="javascript:void(0);" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i> Add New Training Service</a>
        <div class="clearfix"></div>
        <p class="panel-subtitle">This is your training services management dashboard</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="setting-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="150">Image Cover</th>
                                <th>Training Name</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                            <tr>
                                <td>
                                    <img src="<?php echo base_url()?>resources/images/archive/<?php echo $item['training_service_image']?>" alt="Avatar" width="100%">
                                </td>
                                <td>
                                    <?php echo $item['training_service_name']?>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="item-edit" data-id="<?php echo $item['training_service_id']?>"><span class="label label-success">Edit</span></a>
                                    <a href="<?php echo base_url()?>administrator/apis/deleteService/<?php echo $item['training_service_id']?>" onclick="return confirm('Are you sure to delete <?php echo $item['training_service_name']?> ?')"><span class="label label-danger">Delete</span></a>
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

<div id="addModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Client</h4>
            </div>
            <div class="modal-body">
                <form id="addForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="control-label">Image Cover</label>
                        <input type="file" name="training_service_image" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Training Service Name</label>
                        <input class="form-control" type="text" placeholder="" name="training_service_name" data-validate="training_service_name">
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
</div>


<script>
    $(function() {

        $('#btnModal').click(function() {
            $('#addForm')[0].reset();
            $('#addModal').modal('show');
            $('#addModal').find('.modal-title').text('Add New Training Service');
            $('#addModal').find('#addBtn').text('Add New Service');
            $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/addService');
            $('#addForm').attr('method', 'post');
        })

        $('button[data-reset=addReset]').click(function() {
            $('#addForm')[0].reset();
            $('#addForm > .form-group').removeClass('has-error');
        })

        // Add Team
        $('#addBtn').click(function() {
            var nameInput = $('input[data-validate=training_service_name]');
            var result = '';
            if (nameInput.val() == '') {
                nameInput.parent().addClass('has-error');
            } else {
                nameInput.parent().removeClass('has-error');
                result += '1';
            }
        })

        // Edit Team
        $('.item-edit').on('click', function() {
            var id = $(this).attr('data-id');
            var url = '<?php echo base_url()?>administrator/apis/editService';

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
                    $('#addModal').find('.modal-title').html('<img src="<?php echo base_url()?>/resources/img/loader.gif" width="20px"/> Fetching data...');
                    $('#addModal').find('.modal-body').hide();
                },
                success: function(data) {
                    var nameInput = $('input[data-validate=training_service_name]');
                    $('#addModal').modal('show');
                    $('#addModal').find('.modal-body').show();
                    $('#addModal').find('.modal-title').text('Edit ' + data[0].training_service_name);
                    $('#addModal').find('#addBtn').text('Edit Service');
                    $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/updateService/' + data[0].training_service_id);
                    $('#addForm').attr('method', 'post');
                    nameInput.val(data[0].training_service_name);
                },
                error: function() {
                    alert('Failed to Edit Training Service !');
                }
            })
        })

    })

</script>
