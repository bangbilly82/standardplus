<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">Manage Training Archive</h3>
        <a id="btnModal" href="javascript:void(0);" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i> Add New Training</a>
        <div class="clearfix"></div>
        <p class="panel-subtitle">This is your training archive management dashboard</p>
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
                                <th>Training Service</th>
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
                                    <?php echo strtoupper($item['training_archive_place'])?>
                                </td>
                                <td>
                                    <?php echo $item['training_service_name']?>
                                </td>
                                <td>
                                    <?php echo $item['training_archive_year']?>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="item-edit" data-id="<?php echo $item['training_archive_id']?>"><span class="label label-success">Edit</span></a>
                                    <a href="<?php echo base_url()?>administrator/apis/deleteTraining/<?php echo $item['training_archive_id']?>" onclick="return confirm('Are you sure to delete <?php echo $item['training_archive_name']?>, <?php echo $item['training_archive_place']?>?')"><span class="label label-danger">Delete</span></a>
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
                        <label for="" class="control-label">Training Name</label>
                        <input class="form-control" type="text" placeholder="" name="training_archive_name" data-validate="training_archive_name">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Client</label>
                        <input class="form-control" type="text" placeholder="" name="training_archive_place" data-validate="training_archive_place">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Year</label>
                        <input class="form-control" type="text" placeholder="" name="training_archive_year" data-validate="training_archive_year">
                    </div>
                    <div class="form-group" id="selectTraining">
                        <label for="" class="control-label">Service</label>
                        <select id="trainingselect" class="form-control" name="training_archive_key_placeholder" data-validate="training_archive_key_placeholder"> 
                         <?php foreach ($services as $service): ?>
                             <option value="<?php echo $service['training_service_id']?>" data-validate="training_service_name" data-key="training_service_name">
                                 <?php echo $service['training_service_name']?>
                             </option>
                         <?php endforeach ?>                          
                        </select>
                    </div>
                    <input class="form-control" type="hidden" placeholder="" name="training_archive_key" data-validate="training_archive_key" value="1" readonly>
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
            $('#addForm')[0].reset();
            $('#addModal').modal('show');
            $('#addModal').find('.modal-title').text('Add New Training');
            $('#addModal').find('#addBtn').text('Add New Training');
            $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/addTraining');
            $('#addForm').attr('method', 'post');
            var serviceSelected = $("#selectTraining");
            serviceSelected.show();
            $('#trainingselect').on('change', function() {
                var value = $('select[name=training_archive_key_placeholder]').val();
                var getvalue = $('input[name=training_archive_key]');
                getvalue.val(value);
            })
        })

        $('button[data-reset=addReset]').click(function() {
            $('#addForm')[0].reset();
            $('#addForm > .form-group').removeClass('has-error');
        })

        // Add Team
        $('#addBtn').click(function() {
            var nameInput = $('input[data-validate=training_archive_name]');
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
            var url = '<?php echo base_url()?>administrator/apis/editTraining';

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
                    console.log(data);
                    $('#addModal').find('.modal-body').show();
                    var nameInput = $('input[data-validate=training_archive_name]');
                    var placeText = $('input[data-validate=training_archive_place]');
                    var yearText = $("input[data-validate=training_archive_year]");
                    var serviceText = $("input[data-validate=training_archive_key_text]");
                    var serviceId = $("input[data-validate=training_archive_key]");
                    var serviceSelected = $("#selectTraining");
                    $('#addModal').modal('show');
                    $('#addModal').find('.modal-title').text('Edit ' + data[0].training_archive_name);
                    $('#addModal').find('#addBtn').text('Edit Training');
                    $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/updateTraining/' + data[0].training_archive_id);
                    $('#addForm').attr('method', 'post');
                    serviceSelected.hide();
                    nameInput.val(data[0].training_archive_name);
                    placeText.val(data[0].training_archive_place);
                    yearText.val(data[0].training_archive_year);
                    serviceText.val(data[0].training_service_name);
                    serviceId.val(data[0].training_service_id);
                },
                error: function() {
                    alert('Failed to load data !');
                    console.log('Failed to load data !');
                }
            })
        })

    })

</script>
