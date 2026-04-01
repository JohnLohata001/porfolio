<?php require "../../init.php";?>
<?php include("../app/models/model.php");?>
<?php include("../app/controllers/user.php");?>
<?php include("../inc/header.php");?>
<?php //include("../inc/header.php");?>
<?php include("../inc/navbar.php");?>
  <section class="home-section">

      <div class="container">
          
              <div class="row row-content-1">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fa-solid fa-plus"></i> Add New
                </button>
              </div>
              <div class="row-content-2">
                
                <table id="myTable" class="table table-bordered table-striped" width="100%">
                  <thead>
                      <th width="5%">ID</th>
                      <th width="30%">Name</th>
                      <th width="25%">Email</th>
                      <th width="20%">Phone</th>
                      <th width="20%">Action</th>
                  </thead>
                  <tbody>
                    <?php $user_info = selectAll($table)?>
                  <?php $i=0; foreach($user_info as $row):?>
                      <tr>
                        <td><?=$i;?></td>
                        <td><?=$row['name'];?></td>
                        <td>kalo<?=$i;?>@gmail.com</td>
                        <td><?=$i;?>96653322</td>
                        <td>
                          <a href='' class='btn btn-success btn-sm' data-toggle='modal'><i class='bx bx-edit' ></i></a>
                          <a href='' class='btn btn-danger btn-sm' data-toggle='modal'><i class="bx bx-trash"></i></a>
                        </td>
                      </tr>
                      <?php endforeach;?>
                  </tbody>
                </table>
              </div>

         

      </div>
     
  </section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <?php 
      
    ?>
  <form method="post" id="form_submit">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your name">
          </div>
          <div class="form-group">
            <input type="text" name="email" class="form-control" id="email" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          </div>
          <div class="form-group">
            <input type="password" name="passwordconf" class="form-control" id="passwordconf" placeholder="Comfirm password">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1"></label>
            <!-- <input type="file" name="user_img" class="form-control" id="user_img"> -->
          </div>
          <div class="form-group">
            <span class="text-danger" id="sms"></span>
          </div>
        
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" name="btnAdd" id="btnAdd" class="btn btn-primary btn-sm">Submit</button>
      </div>
    </div>
    </form>
  </div>
</div>

<!-- ==================================/modal ============================================ -->

<?php include("../inc/footer.php");?>





