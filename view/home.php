<?php
session_start();
if(!isset($_SESSION["email"]))
{
  header("location: index.php");
}
$conn = mysqli_connect("localhost","root","","mydb");
if(!$conn)
{
    echo "Connection failed";
    die();
}

$sql = "select ID,CourseName from courses";     
$result_courses = $conn->query($sql);       

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		
		<title>iGrader</title>
		
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="../css/style2.css" />
        <!-- <link rel="stylesheet" type="text/css" href="../css/style.css" /> -->
		
	</head>
	<body>
		<div class="adjust_container">
            <div class="fallingLeaves">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            
            </div>
			<header class="codrops-header">
				<h1>Home</h1>
			</header>
            <span class="grade">A</span>
			<section class="container">
				<div class="col-lg-offset-1 col-lg-6 margin_bottom_15">					
                    <select class="form-control" id="dropdownCourse" name="dropdownCourse">
                        <option id="0" value="0">Select Course</option>
                        <?php while($courses = $result_courses->fetch_assoc())
                        { ?>
                            <option id="<?php echo $courses['ID'] ?>" value="<?php echo $courses['ID'] ?>"><?php echo $courses['CourseName'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-lg-offset-1 col-lg-6 margin_bottom_15 desc_div">                 
                    <label style="float: left;" for="comment">Description:</label>
                    <textarea class="form-control desc" rows="5"></textarea>
                </div>
                
        <div class="col-lg-offset-1 col-lg-6 margin_bottom_15">          
            <select class="form-control" id="dropdownStudent" name="dropdownStudent">
                <option value="0">Select Student</option>                        
            </select>
        </div> 

        <div class="col-lg-offset-1 row">
            <div class="col-lg-12" id="user_information">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>Information Area</h3>
                    </div>
                    <div class="panel-body">                        
                        <div class="col-lg-6">
                            <div class="form-group col-lg-12">
                              <label>User Id</label>
                              <input type="text" name="" class="form-control" id="user_id" value="" disabled>
                            </div>
                            
                            <div class="form-group col-lg-6">
                              <label>First Name</label>
                              <input type="text" name="" class="form-control" id="firstname" value="" disabled>
                            </div>
                            
                            <div class="form-group col-lg-6">
                              <label>Last Name</label>
                              <input type="text" name="" class="form-control" id="lastname" value="" disabled>
                            </div>
                                    
                            <div class="form-group col-lg-6">
                              <label>Email Address</label>
                              <input type="email" name="" class="form-control" id="email" value="" disabled>
                            </div>
                            
                            <div class="form-group col-lg-6">
                              <label>Phone</label>
                              <input type="text" name="" class="form-control" id="phone" value="" disabled>
                            </div>
                        </div>

                        <div id="morris-area-chart" class="col-lg-6">
                            <div class="panel-body">                        
                                <div class="col-lg-12">
                                    <div class="form-group has-success float_left">
                                        <label class="control-label col-sm-3 label_margin_5">Homework</label>
                                        <div class="col-sm-4">
                                            <div class="input-group">        
                                                <input type="text" class="form-control" id="homework" disabled/>
                                                <span class="input-group-addon" id="max_homework">/ 500</span>
                                            </div>      
                                        </div>
                                    </div>

                                    <div class="form-group has-success float_left">
                                        <label class="control-label col-sm-3 label_margin_5">Labs</label>
                                        <div class="col-sm-4">
                                            <div class="input-group">        
                                                <input type="text" class="form-control" id="labs" disabled/>
                                                <span class="input-group-addon" id="max_labs">/ 500</span>
                                            </div>      
                                        </div>
                                    </div>

                                    <div class="form-group has-success float_left">
                                        <label class="control-label col-sm-3 label_margin_5">Project</label>
                                        <div class="col-sm-4">
                                            <div class="input-group">        
                                                <input type="text" class="form-control" id="project" disabled/>
                                                <span class="input-group-addon" id="max_project">/ 500</span>
                                            </div>      
                                        </div>
                                    </div> 

                                    <div class="form-group has-success float_left">
                                        <label class="control-label col-sm-3 label_margin_5">Presentation</label>
                                        <div class="col-sm-4">
                                            <div class="input-group">        
                                                <input type="tex" class="form-control" id="presentation" disabled/>
                                                <span class="input-group-addon" id="max_presentation">/ 500</span>
                                            </div>      
                                        </div>
                                    </div>    

                                    <div class="form-group has-success float_left">
                                        <label class="control-label col-sm-3 label_margin_5">Midterm</label>
                                        <div class="col-sm-4">
                                            <div class="input-group">        
                                                <input type="text" class="form-control" id="midterm" disabled/>
                                                <span class="input-group-addon" id="max_midterm">/ 500</span>
                                            </div>      
                                        </div>
                                    </div>    

                                    <div class="form-group has-success float_left">
                                        <label class="control-label col-sm-3 label_margin_5">Final</label>
                                        <div class="col-sm-4">
                                            <div class="input-group">        
                                                <input type="text" class="form-control" id="final" disabled/>
                                                <span class="input-group-addon" id="max_final">/ 500</span>
                                            </div>      
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>


			</section>
			<nav id="bt-menu" class="bt-menu">
				<a href="#" class="bt-menu-trigger"><span>Menu</span></a>
				<ul>
					<li><a href="home.php"><i class="fa fa-home"></i></a>Home</li>
					<li><a href="grade.php"><i class="fa fa-pencil"></i></a>Grade</li>
					<li><a href="setting.php"><i class="fa fa-wrench"></i></a>Setting</li>
					<li><a href="logout.php"><i class="fa fa-power-off"></i></a>Logout</li>					
				</ul>
			</nav>
		</div><!-- /container -->
	</body>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="../js/bootstrap.js"></script>		
	<script src="../js/classie.js"></script>
	<script src="../js/borderMenu.js"></script>	

  <script>

    var graphInput = "";
    var homework_total;
    var lab_total;
    var project_total;
    var presentation_total;
    var midterm_total;
    var final_total;

    var homework_scaling;
    var lab_scaling;
    var project_scaling;
    var presentation_scaling;
    var midterm_scaling;
    var final_scaling;

    var ARangeStart;
    var BRangeStart;
    var CRangeStart;
    var DRangeStart;
    var ERangeStart;
    var FRangeStart;

    $("#dropdownStudent").hide();
    $("#user_information").hide();

    $("#dropdownCourse").change(function()
    {
        $("#dropdownCourse option[value=" + 0 + "]").hide();        
        $("#dropdownStudent").show();
        $(".desc_div").show();
        var data = $("#dropdownCourse").val();

        $.ajax({                                  
            type: 'POST',
            url: 'getStudents.php',
            data: { id:data },
        }).success(function(response) {            
            var arr = response.split(";");            
            for (i = 0; i < arr.length-1; i++) {                 
                $("#dropdownStudent").append("<option value="+arr[i]+">"+arr[i]+"</option>");
            }
        }).error(function(response) {
            alert("No");
        });  


        $.ajax({                                  
            type: 'POST',
            url: 'getDesc.php',
            data: { id:data },
        }).success(function(response) { 
            $(".desc").val(response);            
        }).error(function(response) {
            alert("No");
        });  

        $.ajax({                                  
            type: 'POST',
            url: 'getMaxMarks.php',
            data: { id:data },
        }).success(function(response) {  
            max_arr = response.split("-");            
            $("#max_homework").text("/ "+max_arr[0]);
            $("#max_labs").text("/ "+max_arr[1]);
            $("#max_project").text("/ "+max_arr[2]);
            $("#max_presentation").text("/ "+max_arr[3]);
            $("#max_midterm").text("/ "+max_arr[4]);          
            $("#max_final").text("/ "+max_arr[5]);          
        }).error(function(response) {
            alert("No");
        });   

        $.ajax({                                  
            type: 'POST',
            url: 'getSubjectInfo.php',
            data: { id:data },
        }).success(function(response) {               
            arr = response.split("-");             

              homework_total = arr[0];
              lab_total = arr[1];
              project_total = arr[2];
              presentation_total = arr[3];
              midterm_total = arr[4];
              final_total = arr[5];

              homework_scaling = arr[6];
              lab_scaling = arr[7];
              project_scaling = arr[8];
              presentation_scaling = arr[9];
              midterm_scaling = arr[10];
              final_scaling = arr[11];

              ARangeStart = arr[12];              
              BRangeStart = arr[14];
              CRangeStart = arr[16];
              DRangeStart = arr[18];              
              ERangeStart = arr[20];              
              FRangeStart = arr[22];

        }).error(function(response) {
            alert("No");
        });      

    });

    $("#dropdownStudent").change(function()
    {
        $("#dropdownStudent option[value=" + 0 + "]").hide();  
        $("#user_information").show();  
        var data = $("#dropdownStudent").val();
        $.ajax({                                  
            type: 'POST',
            url: 'getStudentInfo.php',
            data: { id:data },
        }).success(function(response) {            
            var arr = response.split("-");            
            $("#user_id").val(arr[0]);
            $("#firstname").val(arr[1]);
            $("#lastname").val(arr[2]);
            $("#email").val(arr[3]);
            $("#phone").val(arr[4]);
            
        }).error(function(response) {
            alert("No");
        }); 

        $.ajax({                                  
            type: 'POST',
            url: 'getMarksGrade.php',
            data: { id:data },
        }).success(function(response) {  
            act_arr = response.split("-");            

            my_hw = act_arr[0];
            my_lab = act_arr[1];
            my_pro = act_arr[2];
            my_pre = act_arr[3];
            my_mid = act_arr[4];
            my_fin = act_arr[5];

            $("#homework").val(act_arr[0]);
            $("#labs").val(act_arr[1]);
            $("#project").val(act_arr[2]);
            $("#presentation").val(act_arr[3]);
            $("#midterm").val(act_arr[4]);          
            $("#final").val(act_arr[5]);      


            // ============ Computing Grade ================

            var grade = ((my_hw/homework_total)*(homework_scaling))+((my_lab/lab_total)*(lab_scaling))+((my_pro/project_total)*(project_scaling))+((my_pre/presentation_total)*(presentation_scaling))+((my_mid/midterm_total)*(midterm_scaling))+((my_fin/final_total)*(final_scaling));
            alert(grade);

            if(grade > ARangeStart)
            {
                $(".grade").text("A");
            }
            else if(grade > BRangeStart)
            {
                $(".grade").text("B");
            }
            else if(grade > CRangeStart)
            {
                $(".grade").text("C");
            }
            else if(grade > DRangeStart)
            {
                $(".grade").text("D");
            }
            else if(grade > ERangeStart)
            {
                $(".grade").text("E");
            }
            else
            {
                $(".grade").text("F");
            }
            $(".grade").show();
        }).error(function(response) {
            alert("No");
        });  

    });




  </script>
</html>