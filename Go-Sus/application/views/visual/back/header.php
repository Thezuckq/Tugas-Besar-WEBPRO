 <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">
      <span class="fa-lg">
        <i class="fas fa-clinic-medical iconcolor-2"></i>
      </span>
      Go-Sus</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('home/'); ?>">HOME</a></li>
         <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">OUR SERVICES
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="border-radius: 4px;">
          <li><a href="<?php echo base_url('web/sus'); ?>">BABY AND MOM CARE</a></li>
          <li><a href="<?php echo base_url('web/sus'); ?>">LANSIA</a></li>
        </ul>
      </li>
        <?php

            if($this->session->userdata('role') == 'Suster'){ 
                ?>
                <li><a href="
                    
                    <?php echo base_url();?>web/pesan/<?php echo $this->session->userdata('id')?>" 
                    "><b>Kelola Pesanan</b></a></li>
                 <?php
            }
            ?>
            <?php

            if($this->session->userdata('role') == 'Admin'){ 
                ?>
                <li><a href="<?php echo base_url('web/suster'); ?>"><b>Kelola Suster</b></a></li>
                 <?php
            }
            ?>
            
        <li class="dropdown pull-right">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Hello, <?php echo $this->session->userdata('nama') ?>
        <span class="caret"></span></a>
                <ul class="dropdown-menu" style="border-radius: 4px;">
                    <li style="color: black;">&nbsp;
  <?php echo $this->session->userdata('role') ?></li>
                    <li><a href="<?php echo base_url('home/logout') ?>"><button type="button" class="btn btn-danger btn-block">Logout</button></a></li>
                </ul>
            </li>
    </div>
  </div>