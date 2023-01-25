<header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                </div>
            </div>
        </header>
<section id="">
<?php include 'db_connect.php' ?>

<?php
	$qry = $conn->query("SELECT * FROM vacancy where id=".$_GET['id'])->fetch_array();
	foreach($qry as $k =>$v){
		$$k = $v;
	}
?>
<div class="container mb-2 pt-4 ">
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="text-center"><b><?php echo $job_name ?></b></h4>
					<hr class="divider" style="max-width: calc(10%)">
					<p class="text-center">
						<small>
							<i><b><larger><?php echo $employer ?></larger></b></i>
						</small>
					</p>
				</div>
			</div>
				<hr class="divider" style="max-width: calc(100%)">
			<div class="row">
				<div class="col-lg-12">
					<?php echo html_entity_decode($description) ?>
				</div>
			</div>
			<hr class="divider" style="max-width: calc(100%)">
			<div class="row">
				<div class="col-lg-12">
							<button class="btn btn-block col-md-4 btn-primary btn-sm float-right" type="button" id="apply_now">Apply Now</button>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<script>
	$('html, body').animate({
          scrollTop: ($('section').offset().top - 72)
        }, 1000);
	$('#apply_now').click(function(){
		uni_modal('Application from','submit_application.php?id=<?php echo $_GET['id'] ?>','large')
	})
</script>

