<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">Manage Team</h3>
        <a id="btnModal" href="javascript:void(0);" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i> Add New Team</a>
        <div class="clearfix"></div>
        <p class="panel-subtitle">You can add, edit or delete team member from this page</p>
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
                                <th width="150">Role</th>
                                <th>Description</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                            <tr>
                                <td>
                                    <img src="<?php echo base_url()?>resources/images/team/<?php echo $item['team_image']?>" class="img-circle" alt="Avatar" width="50px">
                                </td>
                                <td>
                                    <?php echo $item[ 'team_name']?>
                                </td>
                                <td>
                                    <?php echo $item[ 'team_role']?>
                                </td>
                                <td>
                                    <?php echo $item[ 'team_description']?>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="item-edit" data-id="<?php echo $item['team_id']?>"><span class="label label-success">Edit</span></a>
                                    <a href="<?php echo base_url()?>administrator/apis/deleteTeam/<?php echo $item['team_id']?>" onclick="return confirm('Are you sure to delete <?php echo $item['team_name']?> ?')"><span class="label label-danger">Delete</span></a>
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
                        <input class="form-control" type="text" placeholder="" name="team_name" data-validate="team_name">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Role</label>
                        <input class="form-control" type="text" placeholder="" name="team_role" data-validate="team_role">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Description</label>
                        <textarea class="form-control" name="team_description" id="" cols="" rows="5" data-validate="team_desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Select Image</label>
                        <input type="file" name="team_image" required>                        
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

<!--<script src="<?php echo base_url()?>resources/admin/assets/js/vue.js"></script>-->
<script>
    //    var app = new Vue({
    //        el: '#app-team',
    //        data: {
    //            todos: []
    //        },
    //        mounted: function () {
    //            this.fetchData();
    //        },
    //        methods: {
    //            addData: function(){
    //                
    //            },
    //            fetchData: function () {
    //                var self = this;
    //                var root = '<?php echo base_url()?>administrator/apis/team';
    //                $.ajax({
    //                    url: root,
    //                    method: 'GET',
    //                    dataType: 'json',
    //                    success: function (data) {
    //                        self.todos = data;
    //                    },
    //                    error: function (request, status, error) {
    //                        alert('No Connection');
    //                    }
    //                });
    //            }
    //        }
    //    })

    $(function() {

        $('#btnModal').click(function() {
            $('#addForm')[0].reset();
            $('#addModal').modal('show');
            $('#addModal').find('.modal-body').show();
            $('#addModal').find('.modal-title').text('Add Team');
            $('#addModal').find('#addBtn').text('Add Team');
            $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/addTeam');
            $('#addForm').attr('method', 'post');
        })

        $('button[data-reset=addReset]').click(function() {
            $('#addForm')[0].reset();
            $('#addForm > .form-group').removeClass('has-error');
        })

        // Add Team
        $('#addBtn').click(function() {
            //            var url = '<?php echo base_url()?>administrator/apis/addTeam';
            //            var formdata = $('#addForm').serialize();
            var nameInput = $('input[data-validate=team_name]');
            var roleInput = $('input[data-validate=team_role]');
            var descText = $('textarea[data-validate=team_desc]');
            var result = '';
            if (nameInput.val() == '') {
                nameInput.parent().addClass('has-error');
            } else {
                nameInput.parent().removeClass('has-error');
                result += '1';
            }

            if (roleInput.val() == '') {
                roleInput.parent().addClass('has-error');
            } else {
                roleInput.parent().removeClass('has-error');
                result += '2';
            }

            if (descText.val() == '') {
                descText.parent().addClass('has-error');
            } else {
                descText.parent().removeClass('has-error');
                result += '3';
            }

            //            if (result == '123') {
            //                $.ajax({
            //                    url: url,
            //                    dataType: 'json',
            //                    method: 'post',
            //                    data: formdata,
            //                    success: function (res) {
            //                        if (res.success) {
            //                            $('#addForm')[0].reset();
            //                            $('#addModal').modal('hide');
            //                            window.location.replace(window.location.href);
            //                        } else {
            //                            alert('Error');
            //                        }
            //                    },
            //                    error: function () {
            //                        alert('Could not add team');
            //                    }
            //                })
            //            }
        })

        // Edit Team
        $('.item-edit').on('click', function() {
            var id = $(this).attr('data-id');
            var url = '<?php echo base_url()?>administrator/apis/editTeam';
            var res = true;
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
                    $('#addModal').find('.modal-body').show();
                    var nameInput = $('input[data-validate=team_name]');
                    var roleInput = $('input[data-validate=team_role]');
                    var descText = $('textarea[data-validate=team_desc]');
                    $('#addModal').modal('show');
                    $('#addModal').find('.modal-title').text('Edit ' + data[0].team_name);
                    $('#addModal').find('#addBtn').text('Edit Team');
                    $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/updateTeam/' + data[0].team_id);
                    $('#addForm').attr('method', 'post');
                    nameInput.val(data[0].team_name);
                    roleInput.val(data[0].team_role);
                    descText.val(data[0].team_description);
                },
                error: function() {
                    alert('Failed to fetch data !');
                }
            })
        })

    })

</script>
