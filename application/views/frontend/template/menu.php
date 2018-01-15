<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('principal')?>">Principal</a>
      </li>
      <li class="nav-item">
        <?php if ($this->session->userdata('userlogado')->tipo == "admin") { ?>
          <a class="nav-link" href="<?php echo base_url('republica_admin')?>">República</a>
        <?php }else{?>
          <a class="nav-link" href="<?php echo base_url('republica')?>">República</a>
        <?php }?>
      </li>

      <li class="nav-item">
        <?php if ($this->session->userdata('userlogado')->tipo == "admin") { ?>
          <a class="nav-link" href="<?php echo base_url('despesas_admin')?>">Despesas</a>
        <?php }else{?>
          <a class="nav-link" href="<?php echo base_url('despesas')?>">Despesas</a>
        <?php }?>
      </li>


    </ul>
  </div>
</nav>