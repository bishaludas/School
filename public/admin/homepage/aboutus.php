<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<?php 
			$column=isset($_GET['column']) ? $_GET['column'] : '';
			echo "<h4>".$column."</h4>";

			submitAboutUsColumn($con, $column);
			?>
			<div class="card post-body">
				<div class="card-body">
					
					<form action="" method="post" enctype="multipart/form-data">

						<div class="row pb-2">
							<div class="col-md-2  text-center">Content</div>
							<div class="col-md-9">
								<textarea id="content" class="tinymce" name="post-content" placeholder="body"" >
									<?php selectAboutUs($con, $column) ?>
								</textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2  text-center"></div>
							<div class="col-md-9">
								<input type="submit" name="submit">
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>
</div>