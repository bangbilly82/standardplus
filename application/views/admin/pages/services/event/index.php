<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">Manage Event Archive</h3>
        <a id="btnModal" href="javascript:void(0);" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i> Add New Event</a>
        <div class="clearfix"></div>
        <p class="panel-subtitle">This is your event archive management page</p>
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
                                <th>Year</th>
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
                                    <?php echo strtoupper($item['event_archive_place'])?>
                                </td>
                                <td>
                                    <?php echo $item['archive_year']?>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="item-edit" data-id="<?php echo $item['event_archive_id']?>"><span class="label label-success">Edit</span></a>
                                    <a href="<?php echo base_url()?>administrator/apis/deleteEvent/<?php echo $item['event_archive_id']?>" onclick="return confirm('Are you sure to delete <?php echo $item['event_archive_name']?> ?')"><span class="label label-danger">Delete</span></a>
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
                        <label for="" class="control-label">Event Name</label>
                        <input class="form-control" type="text" placeholder="" name="event_archive_name" data-validate="event_archive_name">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Place</label>
                        <input class="form-control" type="text" placeholder="" name="event_archive_place" data-validate="event_archive_place">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Year</label>
                        <select id="yearselect" class="form-control" name="event_archive_year" data-validate="event_archive_year"> 
                         <?php foreach ($years as $year): ?>
                             <option value="<?php echo $year['archive_id']?>" data-validate="event_archive_year" data-key="event_archive_year">
                                 <?php echo $year['archive_year']?>
                             </option>
                         <?php endforeach ?>                          
                        </select>
                    </div>
<!--
                    <div class="form-group">
                        <label for="" class="control-label">Key</label>
                        <input type="text" class="form-control" name="event_archive_image_key" data-validate="event_archive_key" value="1" readonly>
                    </div>
-->
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
                $('#addModal').find('.modal-title').text('Add New Event');
                $('#addModal').find('#addBtn').text('Add New Event');
                $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/addEvent');
                $('#addForm').attr('method', 'post');
                $('#yearselect').on('change', function(){
//                    var value = $('select[name=event_archive_year]').val();
//                    var getvalue = $('input[name=event_archive_image_key]');
//                    getvalue.val(value);
                })
            })

            $('button[data-reset=addReset]').click(function() {
                $('#addForm')[0].reset();
                $('#addForm > .form-group').removeClass('has-error');
            })

            // Add Team
            $('#addBtn').click(function() {
                var nameInput = $('input[data-validate=event_archive_name]');
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
                var url = '<?php echo base_url()?>administrator/apis/editEvent';

                $.ajax({
                    url: url,
                    method: 'get',
                    dataType: 'json',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        var nameInput = $('input[data-validate=event_archive_name]');
                        var placeText = $('input[data-validate=event_archive_place]');
                        var yearText = $("select[name=event_archive_year]");
                        $('#addModal').modal('show');
                        $('#addModal').find('.modal-title').text('Edit ' + data[0].event_archive_name);
                        $('#addModal').find('#addBtn').text('Edit Event');
                        $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/updateEvent/' + data[0].event_archive_id);
                        $('#addForm').attr('method', 'post');
                        nameInput.val(data[0].event_archive_name);
                        placeText.val(data[0].event_archive_place);
                        yearText.prop('selectedIndex',(data[0].event_archive_year)-1);
                    },
                    error: function() {
                        alert('Failed to Edit Event');
                    }
                })
            })

        })

    </script>
