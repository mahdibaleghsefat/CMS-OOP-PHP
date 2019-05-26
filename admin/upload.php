<?php include("includes/header.php"); ?>
<?php if (!$session->is_signed_in()) {redirect("login.php");} ?>


<?php 

$message = "";

if (isset($_POST['submit'])) {
	$photo = new Photo();
	$photo->title = $_POST['title'];
	$photo->set_file($_FILES['file_upload']);

	if ($photo->save()) {
		$message = "photo uploaded successfully";
		$photo->create();
	} else {
		$message = join("<br />", $photo->errors);
	}
}




 ?>




<div class="content-wrapper">
    <div class="container-fluid">
      <h1 class="page-header">
					UPLOAD
					<small>Subheading</small>
				</h1>

		<div class="col-md-6">

			<?php echo $message; ?>
			
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<input type="file" name="file_upload">
				</div>
				<input type="submit" name="submit">
			</form>
		</div>      

    </div>
  </div>

  	<!-- navigation -->

	<?php include("includes/navigation.php"); ?>

	<?php include("includes/side-nav.php"); ?>



<?php include("includes/footer.php"); ?>