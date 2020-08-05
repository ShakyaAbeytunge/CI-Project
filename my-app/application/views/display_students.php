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
                text-align: center;
            }
        </style>
    </head> 
    <body>
        <div class="container features" style="font-size: 22px">
            <strong>Registered Student Details</strong>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-9"><a class="btn btn-primary" href="<?php echo base_url();?>index.php/registration/savedata">Back to Student Registration</a></div>
                <div class="col-sm-3"><a class="btn btn-warning" href="<?php echo base_url();?>index.php/registration/generate_pdf">Generate a PDF report</a></div>
            </div>
        </div>
        
        
        
        
        <div class="container features-new" style="height: 100%">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Student Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>            
            <?php
                foreach($data as $row){
                    echo "<tr>";
                    echo "<td>".$row->Id."</td>";
                    echo "<td>".$row->Name."</td>";
                    echo "<td>".$row->Email."</td>";
                    echo "<td>".$row->Mobile."</td>";
                    echo "<td><a href='deletedata?id=".$row->Id."' style='color: white;'><span class='badge badge-danger'>Delete</span></a></td>";
                    echo "<td><a href='updatedata?id=".$row->Id."' style='color: white;'><span class='badge badge-primary'>Update</span></a></td>";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>js/bootstrap.js"></script>
    </body>
</html>