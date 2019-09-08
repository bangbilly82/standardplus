<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">Manage Testimony</h3>
        <a id="btnModal" href="javascript:void(0);" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i> Add New Testimony</a>
        <div class="clearfix"></div>
        <p class="panel-subtitle">This is your testimony page dashboard</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="testimony-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th width="150">Name</th>
                                <th>From</th>
                                <th>Service</th>
                                <th>Testimony</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                            <tr>
                                <td>
                                    <img src="<?php echo base_url()?>resources/images/testimony/<?php echo $item['testimony_image']?>" class="img-circle" alt="Avatar" width="50px">
                                </td>
                                <td>
                                    <?php echo $item[ 'testimony_name']?>
                                </td>
                                <td>
                                    <?php echo $item[ 'testimony_from']?>
                                </td>
                                <td>
                                    <?php echo $item[ 'testimony_service']?>
                                </td>
                                <td>
                                    <?php echo $item[ 'testimony_text']?>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="item-edit" data-id="<?php echo $item['testimony_id']?>"><span class="label label-success">Edit</span></a>

                                    <a href="<?php echo base_url()?>administrator/apis/deleteTestimony/<?php echo $item['testimony_id']?>" onclick="return confirm('Are you sure to delete <?php echo $item['testimony_name']?> ?')"><span class="label label-danger">Delete</span></a>
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
                        <label for="" class="control-label">Name</label>
                        <input class="form-control" type="text" placeholder="" name="testimony_name" data-validate="testimony_name">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">From</label>
                        <textarea class="form-control" type="text" placeholder="" name="testimony_from" data-validate="testimony_from" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Service</label>
                        <input class="form-control" type="text" placeholder="" name="testimony_service" data-validate="testimony_service">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Text</label>
                        <textarea class="form-control" type="text" placeholder="" name="testimony_text" data-validate="testimony_text" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Image</label>
                        <input type="file" name="testimony_image" required>
                    </div>
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
<!-- END TEAM SECTION -->


<script>
    $(function() {

        $('#btnModal').click(function() {
            $('#addModal').modal('show');
            $('#addModal').find('.modal-title').text('Add New testimony');
            $('#addModal').find('#addBtn').text('Add New testimony');
            $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/addTestimony');
            $('#addForm').attr('method', 'post');
        })

        $('button[data-reset=addReset]').click(function() {
            $('#addForm')[0].reset();
            $('#addForm > .form-group').removeClass('has-error');
        })

        // Add Team
        $('#addBtn').click(function() {
            var nameInput = $('input[data-validate=testimony_name]');
            var fromText = $('textarea[data-validate=testimony_from');
            var serviceText = $('input[data-validate=testimony_service');
            var descText = $('textarea[data-validate=testimony_text]');
            var result = '';
            if (nameInput.val() == '') {
                nameInput.parent().addClass('has-error');
            } else {
                nameInput.parent().removeClass('has-error');
                result += '1';
            }

            if (fromText.val() == '') {
                fromText.parent().addClass('has-error');
            } else {
                fromText.parent().removeClass('has-error');
                result += '2';
            }

            if (serviceText.val() == '') {
                serviceText.parent().addClass('has-error');
            } else {
                serviceText.parent().removeClass('has-error');
                result += '3';
            }

            if (descText.val() == '') {
                descText.parent().addClass('has-error');
            } else {
                descText.parent().removeClass('has-error');
                result += '4';
            }
        })

        // Edit Team
        $('.item-edit').on('click', function() {
            var id = $(this).attr('data-id');
            var url = '<?php echo base_url()?>administrator/apis/editTestimony';

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
                    var nameInput = $('input[data-validate=testimony_name]');
                    var fromText = $('textarea[data-validate=testimony_from');
                    var serviceText = $('input[data-validate=testimony_service');
                    var descText = $('textarea[data-validate=testimony_text]');
                    $('#addModal').modal('show');
                    $('#addModal').find('.modal-title').text('Edit ' + data[0].testimony_name);
                    $('#addModal').find('#addBtn').text('Edit Testimony');
                    $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/updateTestimony/' + data[0].testimony_id);
                    $('#addForm').attr('method', 'post');
                    nameInput.val(data[0].testimony_name);
                    fromText.val(data[0].testimony_from);
                    serviceText.val(data[0].testimony_service);
                    descText.val(data[0].testimony_text);
                },
                error: function() {
                    alert('Failed to fetch data !');
                }
            })
        })

    })

</script>
