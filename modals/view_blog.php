<?php
echo '
<!-- Modal -->
<div class="modal fade" id="viewblogModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">SignUp</h5>
        <button type="button" id="closeBtn" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- ModalBody -->
      <form method="post" name="signup" action="account/create_account.php">
       <div class="form-group">
         <label for="signupUname">User Name</label>
         <input type="text" name="susername" class="form-control" id="signupUname" placeholder="Enter User Name">
       </div>
       <div class="form-group">
         <label for="signupEmail">Email address</label>
         <input type="email" name="semail" class="form-control" id="signupEmail" aria-describedby="emailHelp" placeholder="Enter email">
         <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
       </div>
       <div class="form-group">
         <label for="signupPassword">Password</label>
         <input type="password" name="spass" class="form-control" id="signupPassword" placeholder="Password">
       </div>
       <div class="form-group">
         <label for="signupRepassword">Retype Password</label>
         <input type="password" name="sretypepass" class="form-control" id="signupRepassword" placeholder="Retype Password">
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  name=""  class="btn btn-primary">SignUp</button>
      </div>
      </form>
      </div>
  </div>
</div>';
?>