<?php
include('header.php');
?>

<h2 style="text-align:center; padding:12px">About this Project</h2>

<div class="row" style="display:flex; align-items:center; justify-content:center">
<div class="card border-success mb-3 col-6" style="max-width: 18rem; margin:32px">
  <div class="card-header">Key Points</div>
  <div class="card-body text-success">
    <p class="card-text">Admin can filter user according to their university, course, subcourse, and batch.</p>
    <p>Initially all users will be shown to admin.</p>
  </div>
</div>

<div class="card border-warning mb-3 col-6" style="max-width: 18rem; margin:32px">
  <div class="card-header">Properties</div>
  <div class="card-body text-warning">
  <p>Admin has the priveleage to set result and status of student accordingly.</p>
  <p>Well formed user interactive architecture.</p>
  </div>
</div>
</div>

<div class="row" style="display:flex; align-items:center; justify-content:center">
<div class="card border-danger mb-3 col-6" style="max-width: 18rem; margin:32px">
  <div class="card-header">Security</div>
  <div class="card-body text-danger">
    <p class="card-text">Another user cannot enter into admin's workspace.</p>
    <p class="card-text">Session will be cleared on logout + no cookies.</p>
  </div>
</div>

<div class="card border-primary mb-3 col-6" style="max-width: 18rem; margin:32px">
  <div class="card-header">Code</div>
  <div class="card-body text-primary">
    <p>Access Github account for open source code.</p>
    <br>
    <a href="" class="btn btn-sm btn-primary">Visit</a>
</div>
</div>

</div>

<?php
include('footer.php');
?>


