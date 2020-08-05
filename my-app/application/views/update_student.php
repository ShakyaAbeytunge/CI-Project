<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="<?php echo base_url();?>main.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
         
        <title>Display Records</title> 
        <style>
            td{
                padding: 5px;
            }
        </style>
    </head> 
    <body>
    <div class="container features" style="font-size: 22px">
            <strong>Update Student Details</strong>
        </div>
        <a class="btn btn-primary" style="margin-left: 200px;" href="<?php echo base_url();?>index.php/registration/savedata">Back to Student Registration</a>
        <?php
            foreach($data as $row){
        ?>
        <div class="container features-new">
            <form method="post">
                <div class="form-group">
                    <label>Change name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $row->Name;?>">
                </div>
                <div class="form-group">
                    <label>Change email address</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $row->Email;?>">
                </div>
                <div class="form-group">
                    <label>Change mobile number</label>
                    <input type="text" class="form-control" name="mobile" maxlength="10" value="<?php echo $row->Mobile;?>">
                </div>
                <input class="btn btn-primary" type="submit" name="update" value="Update Record">
            </form>
        </div>
        <div class="container bg-light features">
            <a href="<?php echo base_url();?>index.php/registration/displaydata">View Student Details</a>            
        </div>
        <?php } ?>
    </body> 
</html>
