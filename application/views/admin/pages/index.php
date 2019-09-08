<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title">Manage Site Pages</h3>
        <p class="panel-subtitle">You can manage your site page from this page</p>
    </div>
    <div class="panel-body no-padding">
        <div class="row">
            <div class="col-md-12">
                <div class="team-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="200">Page Name</th>
                                <th>Page Description</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                            <tr>
                                <td>
                                    <?php echo $item[ 'page_name']?>
                                </td>
                                <td>
                                    <?php echo $item[ 'page_description']?>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="item-edit" data-id="<?php echo $item['page_id']?>"><span class="label label-success">Edit</span></a>
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
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form id="addForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="control-label">Page Name</label>
                        <input class="form-control" type="text" placeholder="" name="page_name" data-validate="page_name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Page Description</label>
                        <textarea class="form-control" name="page_description" id="" cols="" rows="5" data-validate="page_desc"></textarea>
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
<!-- /.modal -->
<!-- END TEAM SECTION -->

<script>
    $(function() {
        $('button[data-reset=addReset]').click(function() {
            $('#addForm')[0].reset();
            $('#addForm > .form-group').removeClass('has-error');
        })

        // Add Team
        $('#addBtn').click(function() {
            var nameText = $('input[data-validate=page_name]');
            var descText = $('textarea[data-validate=page_desc]');
            var result = '';
            
            if (nameText.val() == '') {
                nameText.parent().addClass('has-error');                
                return false;
            } else {
                nameText.parent().removeClass('has-error');
                result += '1';
            }

            if (descText.val() == '') {
                descText.parent().addClass('has-error');
                return false;
            } else {
                descText.parent().removeClass('has-error');
                result += '2';
            }
        })

        // Edit Team
        $('.item-edit').on('click', function() {
            var id = $(this).attr('data-id');
            var url = '<?php echo base_url()?>administrator/apis/editPages';

            $.ajax({
                url: url,
                method: 'get',
                dataType: 'json',
                data: {
                    id: id
                },
                success: function(data) {
                    var nameText = $('input[data-validate=page_name]');
                    var descText = $('textarea[data-validate=page_desc]');
                    $('#addModal').modal('show');
                    $('#addModal').find('.modal-title').text('Edit ' + data[0].page_name);
                    $('#addModal').find('#addBtn').text('Edit Page');
                    $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/updatePages/' + data[0].page_id);
                    $('#addForm').attr('method', 'post');
                    nameText.val(data[0].page_name);
                    descText.val(data[0].page_description);
                },
                error: function() {
                    alert('Failed to fetch data !');
                }
            })
        })

    })

</script>
