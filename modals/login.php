
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">LogIn</h5>
        <button type="button" id="closeBtn" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!-- ModalbBody -->
       <form method="post" action="account/access_account.php" name="logIn">
       <div class="form-group">
         <label for="loginEmail">User Name / Email Address</label>
         <input type="text" name="email" class="form-control" id="loginEmail_name" aria-describedby="emailHelp" placeholder="Enter UserName/Email">
         <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
       </div>
       <div class="form-group">
         <label for="loginPassword">Password</label>
         <input type="password" name="pass" class="form-control" id="loginPassword" placeholder="Password">
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="logIn" name="logIn"  class="btn btn-primary">LogIn</button>
      </div>
      </form>
    </div>
  </div>
</div>