<?php
if (isset($_SESSION['message']) == TRUE) {
?>
    <div class="alert alert-success alert-dismissible m-3" role="alert">
        <div class="alert-icon">
            <i class="far fa-fw fa-bell"></i>
        </div>
        <div class="alert-message">
           <?php echo $_SESSION['message']; unset($_SESSION['message']);?>
        </div>

        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
else if(isset($_SESSION['error'])==true)
{
	?>
    <div class="alert alert-danger alert-dismissible m-3" role="alert">
        <div class="alert-icon">
            <i class="far fa-fw fa-bell"></i>
        </div>
        <div class="alert-message">
           <?php echo $_SESSION['error']; unset($_SESSION['error']);?>
        </div>

        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>