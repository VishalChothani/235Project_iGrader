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
		<link href="../css/bootstrap-slider.css" rel="stylesheet">

		<style type='text/css'>		
			#ex1Slider .slider-selection {
   				background: lightblue;
  			}  		
    </style>
		
	</head>
	<body>
		<div class="adjust_container">
			<header class="codrops-header">
				<h1>Settings</h1>
			</header>

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

                <div class="setting_div col-lg-offset-1 col-lg-6">
                	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  						<div class="panel panel-default">
    						<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
      							<h4 class="panel-title">
        							<a>
          								Course Total Marks
        							</a>
      							</h4>
    						</div>
    						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      							<div class="panel-body">      									
						      		<div class="control-group col-ld-12" style="float:left;width:100%;">      
      									<label class="control-label label_topic">Homework</label>
      									<div class="controls input_topic">
        									<input id="homework_total" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="500" data-slider-step="1" data-slider-value="14"/>
      									</div>
    								</div>	
    							</div>
    							<div class="panel-body">				   
    								<div class="control-group col-ld-12" style="float:left;width:100%;">      
      									<label class="control-label label_topic">Lab</label>
      									<div class="controls input_topic">
        									<input id="lab_total" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="500" data-slider-step="1" data-slider-value="134"/>
      									</div>
    								</div>
    							</div>
    							<div class="panel-body">
    								<div class="control-group col-ld-12" style="float:left;width:100%;">      
      									<label class="control-label label_topic">Project</label>
      									<div class="controls input_topic">
        									<input id="project_total" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="500" data-slider-step="1" data-slider-value="134"/>
      									</div>
    								</div>
    							</div>
    							<div class="panel-body">
    								<div class="control-group col-ld-12" style="float:left;width:100%;">      
      									<label class="control-label label_topic">Presentation</label>
      									<div class="controls input_topic">
        									<input id="presentation_total" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="500" data-slider-step="1" data-slider-value="134"/>
      									</div>
    								</div>
    							</div>
    							<div class="panel-body">
    								<div class="control-group col-ld-12" style="float:left;width:100%;">      
      									<label class="control-label label_topic">Midterm</label>
      									<div class="controls input_topic">
        									<input id="midterm_total" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="500" data-slider-step="1" data-slider-value="134"/>
      									</div>
    								</div>
    							</div>
    							<div class="panel-body">
    								<div class="control-group col-ld-12" style="float:left;width:100%;">      
      									<label class="control-label label_topic">Final</label>
      									<div class="controls input_topic">
        									<input id="final_total" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="500" data-slider-step="1" data-slider-value="134"/>
      									</div>
    								</div>
      							</div>
                  <div class="panel-body">
                      <div class="col-md-offset-10 col-md-2" style="float:left;">
                        <label class="success_save">Saved</label>
                        <button type="button" class="btn btn-success save_total_button">Save</button>
                      </div>
                    </div>
    						</div>
  						</div>
  						<div class="panel panel-default">
    						<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" >
      							<h4 class="panel-title">
        							<a>
          								Scaling Factor
        							</a>
      							</h4>
    						</div>
    						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      							<div class="panel-body">
      								<div class="control-group col-ld-12" style="float:left;width:100%;">      
      									<label class="control-label label_topic">Homework</label>
      									<div class="controls input_topic">
        									<input id="homework_scaling" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="50"/>
      									</div>
    								</div>
    							</div>
    							<div class="panel-body">
    								<div class="control-group col-ld-12" style="float:left;width:100%;">      
      									<label class="control-label label_topic">Lab</label>
      									<div class="controls input_topic">
        									<input id="lab_scaling" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="50"/>
      									</div>
    								</div>
    							</div>
    							<div class="panel-body">
    								<div class="control-group col-ld-12" style="float:left;width:100%;">      
      									<label class="control-label label_topic">Project</label>
      									<div class="controls input_topic">
        									<input id="project_scaling" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="50"/>
      									</div>
    								</div>
    							</div>
    							<div class="panel-body">
    								<div class="control-group col-ld-12" style="float:left;width:100%;">      
      									<label class="control-label label_topic">Presentation</label>
      									<div class="controls input_topic">
        									<input id="presentation_scaling" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="50"/>
      									</div>
    								</div>
    							</div>
    							<div class="panel-body">
    								<div class="control-group col-ld-12" style="float:left;width:100%;">      
      									<label class="control-label label_topic">Midterm</label>
      									<div class="controls input_topic">
        									<input id="midterm_scaling" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="50"/>
      									</div>
    								</div>
    							</div>
    							<div class="panel-body">
      								<div class="control-group col-ld-12" style="float:left;width:100%;">      
      									<label class="control-label label_topic">Final</label>
      									<div class="controls input_topic">
        									<input id="final_scaling" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="50"/>
      									</div>
    								</div>
    							</div>
    							<div class="panel-body">
        							<div class="col-md-offset-10 col-md-2" style="float:left;">
                        <label class="success_scaling_save">Saved</label>
                        <label class="error_scaling_save">Total should be 100%</label>
        								<button type="button" class="btn btn-success save_scaling_button">Save</button>
        							</div>
      							</div>
    						</div>
  						</div>
  						<div class="panel panel-default">
    						<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" >
      							<h4 class="panel-title">
        							<a>
          								Grade Congfiguration
        							</a>
      							</h4>
    						</div>
    						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      							<div class="panel-body">                        
                        <divclass="col-lg-12">
                            <div class="form-group has-success float_left">
                                <label class="control-label col-sm-3 label_margin_5">Grade A</label>
                                <div class="col-sm-4">
                                    <div class="input-group">        
                                        <input type="number" class="form-control" id="ARangeStart" />
                                        <span class="input-group-addon" id="ARangeEnd">- 500</span>
                                    </div>      
                                </div>
                            </div>

                            <div class="form-group has-success float_left">
                                <label class="control-label col-sm-3 label_margin_5">Grade B</label>
                                <div class="col-sm-4">
                                    <div class="input-group">        
                                        <input type="number" class="form-control" id="BRangeStart" />
                                        <span class="input-group-addon" id="BRangeEnd">- 500</span>
                                    </div>      
                                </div>
                            </div>

                            <div class="form-group has-success float_left">
                                <label class="control-label col-sm-3 label_margin_5">Grade C</label>
                                <div class="col-sm-4">
                                    <div class="input-group">        
                                        <input type="number" class="form-control" id="CRangeStart" />
                                        <span class="input-group-addon" id="CRangeEnd">- 500</span>
                                    </div>      
                                </div>
                            </div> 

                            <div class="form-group has-success float_left">
                                <label class="control-label col-sm-3 label_margin_5">Grade D</label>
                                <div class="col-sm-4">
                                    <div class="input-group">        
                                        <input type="number" class="form-control" id="DRangeStart" />
                                        <span class="input-group-addon" id="DRangeEnd">- 500</span>
                                    </div>      
                                </div>
                            </div>    

                            <div class="form-group has-success float_left">
                                <label class="control-label col-sm-3 label_margin_5">Grade E</label>
                                <div class="col-sm-4">
                                    <div class="input-group">        
                                        <input type="number" class="form-control" id="ERangeStart" />
                                        <span class="input-group-addon" id="ERangeEnd">- 500</span>
                                    </div>      
                                </div>
                            </div>    

                            <div class="form-group has-success float_left">
                                <label class="control-label col-sm-3 label_margin_5">Grade F</label>
                                <div class="col-sm-4">
                                    <div class="input-group">        
                                        <input type="number" class="form-control" id="FRangeStart" value="0" disabled />
                                        <span class="input-group-addon" id="FRangeEnd">- 500</span>
                                    </div>      
                                </div>
                            </div> 

                            
                                    <div class="col-md-offset-10 col-md-2" style="float:left;">
                                      <label class="success_range_save">Saved</label>
                                      <label class="error_range_save">Problem in Range</label>
                                        <button type="button" class="btn btn-success save_range_button">Save</button>
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
	<script type='text/javascript' src="../js/bootstrap-slider.js"></script>
  <script src="../js/jquery.numeric.js"></script>
	<script type='text/javascript'>
  
    	$(document).ready(function() {	

        var arr;

    	$("#ARangeStart").numeric();
      $("#BRangeStart").numeric();
      $("#CRangeStart").numeric();
      $("#DRangeStart").numeric();
      $("#ERangeStart").numeric();

			$("#homework_total").slider({
				tooltip: 'false' //always
			});	
			$("#lab_total").slider({
				tooltip: 'false'
			});		
			$("#project_total").slider({
				tooltip: 'false'
			});		
			$("#presentation_total").slider({
				tooltip: 'false'
			});		
			$("#midterm_total").slider({
				tooltip: 'false'
			});		
			$("#final_total").slider({
				tooltip: 'false'
			});	



			$('#homework_scaling').slider({
				formatter: function(value) {					
					return value + "%";
				}
			});	
			$('#lab_scaling').slider({
				formatter: function(value) {					
					return value + "%";
				}
			});	
			$('#project_scaling').slider({
				formatter: function(value) {					
					return value + "%";
				}
			});	
			$('#presentation_scaling').slider({
				formatter: function(value) {				
					return value + "%";
				}
			});	
			$('#midterm_scaling').slider({
				formatter: function(value) {					
					return value + "%";
				}
			});	
			$('#final_scaling').slider({
				formatter: function(value) {				
					return value + "%";
				}
			});	

    $("#dropdownCourse").change(function()
    {
        $("#dropdownCourse option[value=" + 0 + "]").hide();        
        $(".setting_div").show();
        var data = $("#dropdownCourse").val();

        $.ajax({                                  
            type: 'POST',
            url: 'getSubjectInfo.php',
            data: { id:data },
        }).success(function(response) {               
            arr = response.split("-");             
              $("#homework_total").slider('setValue',Number(arr[0]));
              $("#lab_total").slider('setValue',Number(arr[1]));
              $("#project_total").slider('setValue',Number(arr[2]));
              $("#presentation_total").slider('setValue',Number(arr[3]));
              $("#midterm_total").slider('setValue',Number(arr[4]));
              $("#final_total").slider('setValue',Number(arr[5]));

              $("#homework_scaling").slider('setValue',Number(arr[6]));
              $("#lab_scaling").slider('setValue',Number(arr[7]));
              $("#project_scaling").slider('setValue',Number(arr[8]));
              $("#presentation_scaling").slider('setValue',Number(arr[9]));
              $("#midterm_scaling").slider('setValue',Number(arr[10]));
              $("#final_scaling").slider('setValue',Number(arr[11]));

              $("#ARangeStart").val(Number(arr[12]));
              $("#ARangeEnd").text(Number(arr[13]));

              $("#BRangeStart").val(Number(arr[14]));
              $("#BRangeEnd").text(Number(arr[15]));

              $("#CRangeStart").val(Number(arr[16]));
              $("#CRangeEnd").text(Number(arr[17]));

              $("#DRangeStart").val(Number(arr[18]));
              $("#DRangeEnd").text(Number(arr[19]));

              $("#ERangeStart").val(Number(arr[20]));
              $("#ERangeEnd").text(Number(arr[21]));

              $("#FRangeStart").val(Number(arr[22]));
              $("#FRangeEnd").text(Number(arr[23]));


        }).error(function(response) {
            alert("No");
        });         

    });


    $("#ARangeStart").blur(function(){ 
        if($("#ARangeStart").val() > 100)
        {
            $("#ARangeStart").val(Number(arr[12]));
        }       
        else
        {
            $("#BRangeEnd").text($("#ARangeStart").val());      
        }
    });

    $("#BRangeStart").blur(function(){ 
        if($("#BRangeStart").val() > 100)
        {
            $("#BRangeStart").val(Number(arr[14]));
        }       
        else
        {
            $("#CRangeEnd").text($("#BRangeStart").val());      
        }       
        
    });

    $("#CRangeStart").blur(function(){  
        if($("#CRangeStart").val() > 100)
        {
            $("#CRangeStart").val(Number(arr[16]));
        }       
        else
        {
            $("#DRangeEnd").text($("#CRangeStart").val());      
        }      
        
    });

    $("#DRangeStart").blur(function(){        
        if($("#DRangeStart").val() > 100)
        {
            $("#DRangeStart").val(Number(arr[18]));
        }       
        else
        {
            $("#ERangeEnd").text($("#DRangeStart").val());      
        }   
        
    });

    $("#ERangeStart").blur(function(){    
        if($("#ERangeStart").val() > 100)
        {
            $("#ERangeStart").val(Number(arr[20]));
        }       
        else
        {
            $("#FRangeEnd").text($("#ERangeStart").val());      
        }      
        
    });


    $(".save_range_button").click(function(){

          if($("#ARangeStart").val() > $("#BRangeStart").val() && $("#BRangeStart").val() > $("#CRangeStart").val() && $("#CRangeStart").val() > $("#DRangeStart").val() && $("#DRangeStart").val() > $("#ERangeStart").val() && $("#ERangeStart").val() > 0)
          {
              var id = $("#dropdownCourse").val();
              var ARange = $("#ARangeStart").val();
              var BRange = $("#BRangeStart").val();
              var CRange = $("#CRangeStart").val();
              var DRange = $("#DRangeStart").val();
              var ERange = $("#ERangeStart").val();

              $.ajax({                                  
                  type: 'POST',
                  url: 'storeRangeMarks.php',
                  data: { id:id,ARange:ARange,BRange:BRange,CRange:CRange,DRange:DRange,ERange:ERange },
              }).success(function(response) {                  
                  $(".success_range_save").show();
                  setTimeout(function() {
                    $(".success_range_save").hide();
                  }, 6000);
              }).error(function(response) {
                alert("No");    
              });  
          }
          else
          {
              $(".error_range_save").show();
                setTimeout(function() {
                  $(".error_scaling_save").hide();
                }, 6000);
          }

    });

    $(".save_total_button").click(function(){
        var id = $("#dropdownCourse").val();
        var hw = $("#homework_total").slider('getValue');
        var lb = $("#lab_total").slider('getValue');
        var pro = $("#project_total").slider('getValue');
        var pre = $("#presentation_total").slider('getValue');
        var mid = $("#midterm_total").slider('getValue');
        var fin = $("#final_total").slider('getValue');

        $.ajax({                                  
            type: 'POST',
            url: 'storeMaxMarks.php',
            data: { id:id,hw:hw,lb:lb,pro:pro,pre:pre,mid:mid,fin:fin },
        }).success(function(response) {   
            $(".success_save").show();
            setTimeout(function() {
              $(".success_save").hide();
            }, 6000);
        }).error(function(response) {
            alert("No");
        });  
    });


    $(".save_scaling_button").click(function(){

      var total_value = 0;
      total_value = total_value + $("#homework_scaling").slider('getValue');
      total_value = total_value + $("#lab_scaling").slider('getValue');
      total_value = total_value + $("#project_scaling").slider('getValue');
      total_value = total_value + $("#presentation_scaling").slider('getValue');
      total_value = total_value + $("#midterm_scaling").slider('getValue');
      total_value = total_value + $("#final_scaling").slider('getValue');      
        if(Number(total_value)==100)
        {
            var id = $("#dropdownCourse").val();
            var hw = $("#homework_scaling").slider('getValue');
            var lb = $("#lab_scaling").slider('getValue');
            var pro = $("#project_scaling").slider('getValue');
            var pre = $("#presentation_scaling").slider('getValue');
            var mid = $("#midterm_scaling").slider('getValue');
            var fin = $("#final_scaling").slider('getValue');

            $.ajax({                                  
                type: 'POST',
                url: 'storeScalingMarks.php',
                data: { id:id,hw:hw,lb:lb,pro:pro,pre:pre,mid:mid,fin:fin },
            }).success(function(response) {   
                $(".success_scaling_save").show();
                setTimeout(function() {
                  $(".success_scaling_save").hide();
                }, 6000);
            }).error(function(response) {
              alert("No");    
            });              
        }
        else
        {
            $(".error_scaling_save").show();
                setTimeout(function() {
                  $(".error_scaling_save").hide();
                }, 6000);
            
        }  
    });
});

    </script>
</html>