<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    table {
      width: auto;
      border-collapse: collapse;
      margin-top: 20px;
    }
    table button a{
      text-decoration: none;
    }
    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    th {
      background-color: #f2f2f2;
    }
    body button a{
      text-decoration: none;
    }
  </style>
</head>
<body>
        <div class="container">
            <div class="row">
                 <div class="col-md-9">
                    <div class="card">
                    <div class="card-header">
                        <h5>Student Form</h5>
                    </div>
                    <div class="card-body">
                   
                    <button class="btn btn-success"> <a href="add.php" class="text-light"> Add New </a> </button>
                        
                        <br/>
                        <br/>

                    <table>
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                $connection = mysqli_connect("localhost","root","");
                                $db = mysqli_select_db($connection,"myfirstdb");

                                $sql = "select * from student";
                                $run = mysqli_query($connection, $sql);
                                $id= 1;

                                while($row = mysqli_fetch_array($run))
                                {
                                    $uid = $row['id'];
                                    $name = $row['name'];
                                    $address = $row['address'];
                                    $mobile = $row['mobile'];
                                ?>

                                   <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $address ?></td>
                                        <td><?php echo $mobile ?></td>

                                        <td>
                                        <button class="btn btn-success"> <a href='edit.php?edit=<?php echo $uid ?>' class="text-light"> Edit </a> </button> &nbsp;
                                       <button  class="btn btn-danger"><a href='delete.php?del=<?php echo $uid ?>' class="text-light" > Delete </a> </button>
                                        </td>
                                   </tr>
                                    <?php $id++; } ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
