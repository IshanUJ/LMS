<?php
include_once 'connectoion.php';

// fetch files
$sql = "select * from module";
$result = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="log6.css">
</head>
<body>
		<div class="box1" style="height: 150vh;"><br>
			<h1 style="color: white" align="center">&nbspTOPIC OUTLINE-CS101.3</h1>
				<div class="box2" style="border-color: black;border-style: solid;border-width: 15px;margin-left: 175px;">
					<img src="pdf.gif" class="pdf"><a href="http://lms.nsbm.lk/file.php/97/Introduction_to_Computer_Science_Module_Discriptor.pdf" style="text-decoration: none;"><div class="h"><h4>&nbsp&nbsp&nbspModule Discriptor</h4></div></a>
					<img src="pdf.gif" class="pdf"><a href="http://lms.nsbm.lk/file.php/393/Model_paper.pdf" style="text-decoration: none;"><div class="h"><h4>&nbsp&nbsp&nbspModel Paper</h4></div></a>
					
				</div>
				<br><br> 
				<div class="box3" style="border-color: black;border-style: solid;border-width: 15px;margin-left: 175px;height: 100vh;">
					<?php
						include 'connectoion.php';
						$sql= "SELECT * FROM files";
						$result = $con->query($sql);
						while($row = mysqli_fetch_array($result)) {
							$fid = $row['fid'];
							$filename=$row['filename'];
							$path = $row['path'];
					?>
						 <div class="row" style="width: 100vh; margin-top: -35px;"
						 margin-left: 50px;">
						        <div class="row">
								        <div class="col-xs-8 col-xs-offset-2">
								        <br><br>
								            <table class="table table-striped table-hover" cellspacing="5">
								                <thead>
								                    <tr>
								                        <th>#</th>
								                        <th>FileName</th>
								                        <th>Download</th>
								                    </tr>
								                </thead>
								                <tbody>
								                	<tr>
								                   	 	<td><?php echo $fid; ?></td>
									                    <td><?php echo $filename?></td>
									                    <td style="padding:0 15px 0 15px;"><a href=<?php echo $path; ?> target="_blank">Download</a></td>
								                	</tr>
								                <?php } ?>
								                </tbody>
								            </table>
								        </div>
								    </div>
								</div>
							</div>

		</div>




				</div>


</body>
</html>