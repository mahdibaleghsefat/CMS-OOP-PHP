<?php require_once("includes/init.php"); ?>
<?php if (!$session->is_signed_in()) {redirect("login.php");} ?>
<?php include("includes/header.php"); ?>
<!-- Navigation-->
<?php include("includes/navigation.php"); ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <h1 class="page-header">Admin</h1>
      <small>Subheading</small>

      <?php include("includes/Admin_connect.php"); ?>

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

<?php include("includes/footer.php"); ?>