<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="<?php echo base_url();?>main.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
        
        <title>Registration Form</title> 
        <style>
            td{
                padding: 5px;
            }
        </style>
    </head> 
    <body>
        <div class="container features" style="font-size: 22px">
            <strong>Student Registration Form</strong>            
        </div>
        <div class="container features-new">
            <form name="userinput" method="post">
                <div class="form-group">
                    <label>Enter full name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Enter email address</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Enter mobile number</label>
                    <input type="text" class="form-control" name="mobile" maxlength="10">
                </div>
                <input class="btn btn-primary" type="submit" name="save" value="Register Student">
            </form>
        </div>
        <div class="container bg-light features">
            <a href="<?php echo base_url();?>index.php/registration/displaydata">View Student Details</a>            
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>js/bootstrap.js"></script>
    </body> 
</html>