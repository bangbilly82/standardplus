<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">Manage Client</h3>
        <a id="btnModal" href="javascript:void(0);" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i> Add New Client</a>
        <div class="clearfix"></div>
        <p class="panel-subtitle">This is your client page dashboard</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="setting-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="100">Client Logo</th>
                                <th>Client Name</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                            <tr>
                                <td>
                                    <img src="<?php echo base_url()?>resources/images/client/<?php echo $item['clients_image']?>" class="img-circle" alt="Avatar" width="100px">
                                </td>
                                <td>
                                    <?php echo $item[ 'clients_name']?>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="item-edit" data-id="<?php echo $item['clients_id']?>"><span class="label label-success">Edit</span></a>

                                    <a href="<?php echo base_url()?>administrator/apis/deleteClient/<?php echo $item['clients_id']?>" onclick="return confirm('Are you sure to delete <?php echo $item['clients_name']?> ?')"><span class="label label-danger">Delete</span></a>
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
                        <label for="" class="control-label">Client Logo</label>
                        <input type="file" name="clients_image" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Client Name</label>
                        <input class="form-control" type="text" placeholder="" name="clients_name" data-validate="clients_name">
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
            $('#addModal').find('.modal-title').text('Add New Client');
            $('#addModal').find('#addBtn').text('Add New Client');
            $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/addClient');
            $('#addForm').attr('method', 'post');
        })

        $('button[data-reset=addReset]').click(function() {
            $('#addForm')[0].reset();
            $('#addForm > .form-group').removeClass('has-error');
        })

        // Add Team
        $('#addForm').submit(function(e) {
            //e.preventDefault();
            var nameInput = $('input[data-validate=clients_name]');
            var result = '';
            if (nameInput.val() == '') {
                nameInput.parent().addClass('has-error');
            } else {
                nameInput.parent().removeClass('has-error');
                result += '1';
            }
            //            if(result == '1'){
            //                console.log('Post Data');
            //            }
        })

        // Edit Team
        $('.item-edit').on('click', function() {
            var id = $(this).attr('data-id');
            var url = '<?php echo base_url()?>administrator/apis/editClient';

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
                    var nameInput = $('input[data-validate=clients_name]');
                    var descText = $('textarea[data-validate=clients_desc]');
                    $('#addModal').modal('show');
                    $('#addModal').find('.modal-title').text('Edit ' + data[0].clients_name);
                    $('#addModal').find('#addBtn').text('Edit Client');
                    $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/updateClient/' + data[0].clients_id);
                    $('#addForm').attr('method', 'post');
                    nameInput.val(data[0].clients_name);
                },
                error: function() {
                    alert('Failed to fetch data !');
                }
            })
        })

    })

</script>
