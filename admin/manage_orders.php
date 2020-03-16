<?php include '../includes/header.php'; ?>

        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>Manage Orders</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
                        <!-- <th>Sr.no</th>
                        <th>Name</th> -->
                        <th>Phone</th>
                        <th>Email</th>
                        <th>D_Date</th>
                        <th>Time</th>
                        <th>Address</th>
                        <th>People</th>
                        <th>Dishi</th>
                        <th>Restrant</th>
                        <th>Date</th>
                        <th>Done</th>
            
                        <th></th>
                        <th></th>
                      
        </tr>
      </thead>
      <tbody id="myTable">

        <?php
                      $count = 1;
                      $sel_query = "SELECT * FROM orders_  ORDER BY order_id Desc; ";
                      $result = mysqli_query($con, $sel_query);
                      confirm_query($result);
                      while ($row = mysqli_fetch_assoc($result)) { ?>   

          <tr class="active">
                    
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["d_date"]; ?></td>
                        <td><?php echo $row["time_"]; ?></td>
                        <td><?php echo $row["address_"]; ?></td>
                        <td><?php echo $row["people"]; ?></td>
                        <td><?php echo $row["dishi"]; ?></td>
                        <td><?php echo $row["restrant"]; ?></td>
                        <td><?php echo $row["date_"]; ?></td>
                        <td><?php echo $row["fullfilled"]; ?></td>
                       
                        <td id="noPrint"><a href="complete_order.php?id=<?php echo $row["order_id"]; ?>"class="btn btn-flat btn-pri btn-primary"> <i class="fa fa-pencil"></i> Fulfil</a> </td>
                        <td id="noPrint"><a href="delete_order.php?id=<?php echo $row["order_id"]; ?>"class="btn btn-flat btn-pri btn-danger"> <i class="fa fa-trash"></i> Delete </a> </td>
        </tr>
        <?php $count++;
                    } ?>

      </tbody>
    </table>
   </div>




  </div>
  <div class="copy_layout">
      <p>Copyright © 2020 Dishi Foods. All Rights Reserved </p>
  </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
