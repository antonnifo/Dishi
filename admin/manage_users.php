<?php include '../includes/header.php'; ?>

        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>Manage Orders</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
      <a href="add_user.php"class="btn btn-primary btn-flat btn-pri" id="noPrint"> <i class="fa fa-user"></i> Add User</a>
                        <br>
                        <br>
    <table class="table">
      <thead>
        <tr> 


                        <th>#</th>
                        <th>Name</th> 
                        <th>Email</th>
                        <th>Added by</th> 
                        <th>Date</th> 
            
                        <th></th>
               
                      
        </tr>
      </thead>
      <tbody id="myTable">

        <?php
                      $count = 1;
                      $sel_query = "SELECT * FROM admin  ORDER BY id Desc; ";
                      $result = mysqli_query($con, $sel_query);
                      confirm_query($result);
                      while ($row = mysqli_fetch_assoc($result)) { ?>   

          <tr class="active">
                    
          <th scope="row"><?php echo $count; ?></th> 
							<td><?php echo $row["name"]; ?></td>
							<td><?php echo $row["email"]; ?></td>
							<td><?php echo $row["added_by"]; ?></td>
							<td><?php echo $row["date_"]; ?></td>
                       
                        
                        <td id="noPrint"><a href="delete_user.php?id=<?php echo $row["id"]; ?>"class="btn btn-flat btn-pri btn-danger"> <i class="fa fa-trash"></i> Delete </a> </td>
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
