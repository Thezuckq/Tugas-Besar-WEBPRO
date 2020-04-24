<?php
if($this->session->flashdata('message')){ 
  echo '<div class="alert alert-success">'.$this->session->flashdata('message').'</div>';
}
?>
<div class="container">
<form action="<?php echo base_url('home/login'); ?>" method="post">
  <div class="container-fluid" style="border:1px solid #cecece;">  
    <h1>Login</h1>
    <p>Please login to continue to Go-Sus.</p>
    <hr>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <hr>
    <p>Dont have an account? <a href="<?php echo site_url('home/registerindex') ?>">Register</a>.</p>

    <button type="submit" class="registerbtn">Sign In</button>
  </div>
  </form>
</div>
