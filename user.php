<?php include 'inc/header.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="headings">
        <h3>Ajax Search</h3>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <form class="form-inline py-5" action="" method="post">
        <div class="form-group">
          <label for="username">Password</label>
          <input type="text" id="username" class="form-control" name="username" placeholder="Enter Name" />
          <div id="userstatus"></div>
          <h6 class="my-2">Click Anywhere In The Screen After Typing A Text</h6>
        </div>
        <p><a href="index.php" class="btn btn-primary">Back To List</a></p>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
<?php include 'inc/footer.php'; ?>