<?php
if($this->session->flashdata('message')){ 
  echo '<div class="alert alert-success">'.$this->session->flashdata('message').'</div>';
}
?>
<body >
<div class="container" style="vertical-align: center; justify-content: center; margin-top: 60px; margin-bottom: 60px; ">
<form action="<?php echo base_url('home/login'); ?>" method="post">
  <div class="container-fluid" style="border:2px solid #64C7CC; border-radius: 8px; margin: 8px; padding: 80px;" >  
    <span>
    <a class="navbar-brand" style="color: #64C7CC;" href="#">
      <span class="fa-2x">
        <i class="fas fa-clinic-medical" style="color: #64C7CC;"></i>
      </span>
      Go-Sus</a></span>
    <br>
    <span><br><hr></span>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" style="border-radius: 8px;" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" style="border-radius: 8px;" required>

    <hr>
    <p>Dont have an account? <a href="<?php echo site_url('home/registerindex') ?>">Register</a>.</p>

    <button type="submit" class="registerbtn">Sign In</button>
  </div>
  </form>
</div>
</body>
  