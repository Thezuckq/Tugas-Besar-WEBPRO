<?php
if($this->session->flashdata('message')){ 
  echo '<div class="alert alert-success">'.$this->session->flashdata('message').'</div>'; 
}
?>
<div class="container">
<form action="<?php echo base_url('home/register'); ?>" method="post">
  <div class="container-fluid" style="border:2px solid #64C7CC; border-radius: 8px; margin: 8px; padding: 80px;"">  
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="Nama"><b>Nama</b></label>
    <input type="text" placeholder="Enter your name" name="nama" style="border-radius: 8px;" required>

    <label for="Alamat"><b>Alamat</b></label>
    <input type="text" placeholder="Alamat" name="alamat" style="border-radius: 8px;" required>

    <label for="nohp"><b>No HP</b></label>
    <input type="text" placeholder="No HP" name="nohp" style="border-radius: 8px;" required>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" style="border-radius: 8px;" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" style="border-radius: 8px;" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="re-password" style="border-radius: 8px;" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <p>Already have an account? <a href="<?php echo site_url('home/loginindex') ?>">Sign in</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  </form>
</div>
