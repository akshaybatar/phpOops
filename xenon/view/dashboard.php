<?php
extend('include/header.php');
?>
<div class="container">

    <div class="row justify-content-center">

        <div class="col-sm-6 pt-4">
            <h2>Dashboard</h2>
            <h3> <?php echo $_SESSION['name']  ?></h3>

            <a href="logout" class="btn btn-primary">Logout</a>

        </div>

        <?php
        foreach ($data as $key => $value) {?>
           
           <div class="card pt-4">

              <h3><?php echo $value['name'] ?></h3>
              <h3><?php echo $value['lastname'] ?></h3>
           </div>
            <?php }
        ?>
    </div>

</div>
<?php
extend('include/footer.php');
?>