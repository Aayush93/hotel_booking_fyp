<?php
include('partials/menu.php');
?>

    <!-- Main Content Section Starts -->
    <div class="main-content">
    <div class="wrapper">
        <H1>DASHBOARD</H1>
        <br><br>



        <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
        ?>
            <br><br>

        <div class="col-4 text-centre">
            <h1>5</h1>
            <br>
            Categories
        </div>
        <div class="col-4 text-centre">
            <h1>5</h1>
            <br>
            Categories
        </div>
        <div class="col-4 text-centre">
            <h1>5</h1>
            <br>
            Categories
        </div>
        <div class="col-4 text-centre">
            <h1>5</h1>
            <br>
            Categories
        </div>
        <div class="clearfix"></div>

    </div>
    <!-- Main Content Section Ends -->

<?php include('partials/footer.php')?>

