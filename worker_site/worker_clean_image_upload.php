<form action="worker_image_upload.php" method="POST" enctype="multipart/form-data">
                        <input type="number" name="id" value='<?php echo $_GET['id']?>' hidden>
				       <input class="form-control" type="file" name="uploadfile" value="" />
			          </div>
                    <button type="sumbit" href="worker_image_upload.php" class="btn btn-info" name="upload">Submit</button></div>
               </form>