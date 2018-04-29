<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="log6.css">
</head>
<body>
		<div class="box1" style="height: 150vh;"><br>
			<h1 style="color: white" align="center">&nbspTOPIC OUTLINE-CS106.3</h1>
				<div class="box2" style="border-color: black;border-style: solid;border-width: 15px;margin-left: 175px;">
					<img src="pdf.gif" class="pdf"><a href="http://lms.nsbm.lk/file.php/276/CS106.3_Algorithms_and_Data_Structures.pdf" style="text-decoration: none;"><div class="h"><h4>&nbsp&nbsp&nbspModule Discriptor</h4></div></a>
					<img src="pdf.gif" class="pdf"><a href="http://lms.nsbm.lk/file.php/276/CS106.3_16.1.pdf" style="text-decoration: none;"><div class="h"><h4>&nbsp&nbsp&nbspModel Paper</h4></div></a>
					<img src="pdf.gif" class="pdf"><a href="http://lms.nsbm.lk/file.php/276/Sample_Answers_from_a_Student_1.pdf" style="text-decoration: none;"><div class="h"><h4>&nbsp&nbsp&nbspSample studet answer paper</h4></div></a>
				</div>
				<br><br>
				<div class="box3" style="border-color: black;border-style: solid;border-width: 15px;margin-left: 175px;height: 100vh;">
					<div class="inbx">
						  <div class="row" style="width: 100vh; margin-top: -35px;>
								        <div class="col-xs-8 col-xs-offset-2 well">
								        <form method="post" enctype="multipart/form-data">
								        	<br><br>
								        	<legend><h3>Select File to Upload:</h3></legend>
								            <div class="form-group">
								                <input type="file" name="file1"/>
								            </div>
								            <div class="form-group">
								                <input type="submit" name="submit" value="Upload" class="btn btn-info"/>
								            </div>
								            <?php if(isset($_GET['st'])) { ?>
								                <div class="alert alert-danger text-center">
								                <?php if ($_GET['st'] == 'success') {
								                        echo "File Uploaded Successfully!";
								                    }
								                    else
								                    {
								                        echo 'Invalid File Extension!';
								                    } ?>
								                </div>
								                </div>
								            <?php } ?>
								        </form>
								        
								    </div>

					</div>
				</div>
				</div>
				

				</div>
				<?php
		include 'connectoion.php';
					//check if form is submitted
					if (isset($_POST['submit']))
					{
					    $filename = $_FILES['file1']['name'];

					    //upload file
					    if($filename != '')
					    {
					        $ext = pathinfo($filename, PATHINFO_EXTENSION);
					        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif','pptx'];
					    
					        //check if file type is valid
					        if (in_array($ext, $allowed))
					        {
					            // get last record id
					            $sql = 'select max(id) as id from module';
					            $result = mysqli_query($con, $sql);
					            if (count($result) > 0)
					            {
					                $row = mysqli_fetch_array($result);
					                $filename = ($row['id']+1) . '-' . $filename;
					            }
					            else
					                $filename = '1' . '-' . $filename;

					            //set target directory
					            $path = 'upload/';
					                
					            $created = @date('Y-m-d H:i:s');
					            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
					            $sql = "INSERT INTO files(filename,path) VALUES('".$filename."','".$path . $filename."')";
					            $con->query($sql);
					            $con->close();
					        }
					    }
					}
					            
					           
					?>
				

</body>
</html>