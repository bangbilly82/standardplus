<!-- TEAM SECTION -->
<div class="panel panel-headline" id="app-team">
    <div class="panel-heading">
        <h3 class="panel-title">Manage Services</h3>
        <p class="panel-subtitle">This is your services setting page dashboard</p>
    </div>
    <div class="panel-body no-padding">
        <div class="row">
            <div class="col-md-12">
                <div class="setting-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="150">Service Name</th>
                                <th>Description</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                            <tr>
                                <td>
                                    <?php echo $item[ 'services_name']?>
                                </td>
                                <td>
                                    <?php echo $item[ 'services_description']?>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="item-edit" data-id="<?php echo $item['services_id']?>"><span class="label label-success">Edit</span></a>
                                    <a href="<?php echo base_url()?>administrator/apis/deleteService/<?php echo $item['services_id']?>" onclick="return confirm('Are you sure to delete <?php echo $item['services_name']?> ?')"><span class="label label-danger">Delete</span></a>
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
