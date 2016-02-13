<?php
$sendData=[];
$sendData['title']="Edit | $data->full_name";
inc('inc/header',$sendData);
?>
<div class="container">
    <br>
    <div class="row">
        <div class="col-xs-12">
            <a href="<?php url_e('user'); ?>" class="btn btn-info pull-right">
                <span class="glyphicon glyphicon-plus"></span>
                View All
            </a>
            <br>
            <form action="#">
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" class="form-control" placeholder="Full Name" value="<?php echo $data->full_name ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="E-Mail" value="<?php echo $data->email ?>">
                </div>
                <div class="form-group">
                    <label for="userName">User Name</label>
                    <input type="text" id="userName" class="form-control" placeholder="User Name" value="<?php echo $data->user ?>">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-block btn-primary" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
inc('inc/footer');
