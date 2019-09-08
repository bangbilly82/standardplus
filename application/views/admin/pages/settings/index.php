<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title">Page Settings</h3>
        <p class="panel-subtitle">This is your setting page dashboard</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8">
                <div class="setting-wrapper">
                    <form id="addForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="" class="control-label">Home Page Description</label>
                            <textarea class="form-control" name="site_about" id="" cols="" rows="3" data-validate="working_desc"><?php echo $items['setting_about']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Team Page Description</label>
                            <textarea class="form-control" name="team_description" id="" cols="" rows="3" data-validate="working_desc"><?php echo $items['setting_team']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Facilitator Page Description</label>
                            <textarea class="form-control" name="facilitator_description" id="" cols="" rows="3" data-validate="working_desc"><?php echo $items['setting_facilitator']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Praktisi Wirausaha Page Description</label>
                            <textarea class="form-control" name="praktisi_description" id="" cols="" rows="3" data-validate="working_desc"><?php echo $items['setting_praktisi']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Working with us Page Description</label>
                            <textarea class="form-control" name="working_description" id="" cols="" rows="3" data-validate="working_desc"><?php echo $items['setting_working']?></textarea>
                        </div>
<!--
                        <div class="form-group">
                            <label for="" class="control-label">Training Provider Description</label>
                            <textarea class="form-control" name="training_description" id="" cols="" rows="3" data-validate="working_desc"><?php echo $items['setting_training']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Event Organizer Description</label>
                            <textarea class="form-control" name="event_description" id="" cols="" rows="3" data-validate="working_desc"><?php echo $items['setting_event']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Wedding Organizer Description</label>
                            <textarea class="form-control" name="wedding_description" id="" cols="" rows="3" data-validate="working_desc"><?php echo $items['setting_wedding']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Merchandising Description</label>
                            <textarea class="form-control" name="merchandising_description" id="" cols="" rows="3" data-validate="working_desc"><?php echo $items['setting_merchandising']?></textarea>
                        </div>
-->
                        <div class="form-group">
                            <label for="" class="control-label">Testimony Page Description</label>
                            <textarea class="form-control" name="testimony_description" id="" cols="" rows="3" data-validate="working_desc"><?php echo $items['setting_testimony']?></textarea>
                        </div>
                        <hr>
                        <button id="addSetting" type="submit" class="btn btn-primary">Update Page Setting</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END TEAM SECTION -->

<script>
    $(function () {

        $('#btnModal').click(function () {
            $('#addModal').modal('show');
            $('#addModal').find('.modal-title').text('Add Working');
            $('#addModal').find('#addBtn').text('Add Working');
            $('#addForm').attr('action', '<?php echo base_url()?>administrator/apis/addWorking');
            $('#addForm').attr('method', 'post');
        })

        $('button[data-reset=addReset]').click(function () {
            $('#addForm')[0].reset();
            $('#addForm > .form-group').removeClass('has-error');
        })

        // Add Team
        $('#addBtn').click(function () {
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
        $('.item-edit').on('click', function () {
            var id = $(this).attr('data-id');
            var url = '<?php echo base_url()?>administrator/apis/editWorking';

            $.ajax({
                url: url,
                method: 'get',
                dataType: 'json',
                data: {
                    id: id
                },
                success: function (data) {
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
                error: function () {
                    alert('Failed to fetch data !');
                }
            })
        })

    })
</script>