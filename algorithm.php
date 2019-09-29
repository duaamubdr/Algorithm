<?php

$host ="localhost"; 
$user_name="root";
$user_password="";
$db_name="userdb";
$con = mysqli_connect($host,$user_name,$user_password,$db_name);




$project_ids = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26);

$project_names = array("Design and implementation of a curtain Quad antenna for Wi-Fi applications" =>9,
                        "Co-prime array technique application in direction finding" => 2 ,
						"Circuit switching voice coding"=>4,
						"Framework of general intrusion detection system"=>10 , 
						"Data mining in teacher evaluation system using J48 algorithm"=>19,
						"Simulation and Analysis of high data rate Semiconductor Optical Amplifier(SOA ) coain characteristics at specific injection current"=>26
						);
$student_avg = array("Duaa Mubdr"=>75, "Maryam Abdul Karim"=>55,"Maryam Mustafa"=>65,"Aya Hayder"=>80,"Russul Muaid"=>60, "Sura Mubdr"=>50);  

$student_selection = array
  (
  array(9,2,4,10,19),
  array(9,2,4,10,19),
  array(9,2,4,10,19),
  array(9,2,4,10,19),
  array(9,2,4,10,19),
  array(9,2,4,10,19)
  );
		$max=max(array_values($student_avg));
		echo "the maximum average : ".$max ."<br>";
		$student_name = array_search($max, $student_avg);	
		echo "the student name of maximum average : ". $student_name ."<br>";
		$index = array_search($max, array_values($student_avg));	
		echo "the index of maximum average : ".$index ."<br>";
		for($row=0;$row<5;$row++)
		{
			if($row==$index)
			{
				$project_id1 = $student_selection[$row][0];
				echo "the project of student : ".$student_name." is : ".$project_id1 ;
				$project_name = array_search($project_id1, $project_names);
				$sql = "select * from result where `stu_name` ='$student_name' or `pro_id` ='$project_id1' or `pro_name` ='$project_name'";
				$result  = mysqli_query($con , $sql);
				if (mysqli_num_rows($result)>0){}
				else
				{
				   $query = "INSERT INTO result (stu_name,pro_id,pro_name) VALUES('$student_name','$project_id1','$project_name')";
				   mysqli_query($con,$query);
				}
			}
		}	
							echo "<br>";
            
							for($i=0;$i<26;$i++)
							{
								if($project_ids[$i]==$project_id1)
								{
                                   	$project_ids[$i]=0;							
								}
							}
		
		echo"<br>";
		echo "<br>";
		
				
		$a2=array(0=>0);
        array_splice($student_avg,$index,1,$a2);
	    $max=max(array_values($student_avg));
	    echo "<br>the maximum average : ".$max ."<br>";
		$student_name = array_search($max, $student_avg);	
		echo "the student name of maximum average : ". $student_name ."<br>";
	    $index = array_search($max, array_values($student_avg));	
	    echo "the index of maximum average : ".$index ."<br>";
	    for($row=0;$row<5;$row++)
		{
			if($row==$index)
			{
				if ($project_id1==$student_selection[$row][0])
				{
						$project_id2 = $student_selection[$row][1];
				}
				else
				{
					 $project_id2 = $student_selection[$row][0];
				}
				echo "the project of student : ".array_search($max, $student_avg)." is : ".$project_id2 ;
				$project_name = array_search($project_id2, $project_names);		

						  $sql = "select * from result where `stu_name` ='$student_name' or `pro_id` ='$project_id2' or `pro_name` ='$project_name'";
				$result  = mysqli_query($con , $sql);
				if (mysqli_num_rows($result)>0){}
				else
				{
					$query = "INSERT INTO result (stu_name,pro_id,pro_name) VALUES('$student_name','$project_id2','$project_name')";
					mysqli_query($con,$query);
					
					
						
				}
		
		    }
        }
	            		    echo "<br>";
            
							for($i=0;$i<26;$i++)
							{
								if($project_ids[$i]==$project_id2)
								{
                                   	$project_ids[$i]=0;							
							    }
							}

		
		echo "<br>";
		echo "<br>";

		
		$a2=array(0=>0);
		array_splice($student_avg,$index,1,$a2);
		$max=max(array_values($student_avg));
		echo "<br>the maximum average : ".$max ."<br>";
		$student_name = array_search($max, $student_avg);	
		echo "the student name of maximum average : ". $student_name ."<br>";
		$index = array_search($max, array_values($student_avg));	
		echo "the index of maximum average : ".$index ."<br>";
		for($row=0;$row<5;$row++)
		{
			if($row==$index)
			{
				if ($project_id1==$student_selection[$row][0] || $project_id2==$student_selection[$row][0])
				{
					if ($project_id1 == $student_selection[$row][1] || $project_id2==$student_selection[$row][1])
					{
						$project_id3 = $student_selection[$row][2];
					}
					else 
					{	
						$project_id3 = $student_selection[$row][1];}
					}
				else
				{	
					$project_id3 = $student_selection[$row][0];
				}
				echo "the project of student : ".array_search($max, $student_avg)." is : ".$project_id3 ;	
				$project_name = array_search($project_id3, $project_names);
				$sql = "select * from result where `stu_name` ='$student_name' or `pro_id` ='$project_id3' or `pro_name` ='$project_name'";
				$result  = mysqli_query($con , $sql);
				if (mysqli_num_rows($result)>0){}
				else
				{
				$query = "INSERT INTO result (stu_name,pro_id,pro_name) VALUES('$student_name','$project_id3','$project_name')";
				mysqli_query($con,$query);
				}
			}
		}	 
							echo "<br>";
            
							for($i=0;$i<26;$i++)
							{
								if($project_ids[$i]==$project_id3)
								{
                                   	$project_ids[$i]=0;							
							    }
							}
		echo "<br>";
		echo "<br>";
		
		
		$a2=array(0=>0);
		array_splice($student_avg,$index,1,$a2);
		$max=max(array_values($student_avg));
		echo "<br>the maximum average : ".$max ."<br>";
		$student_name = array_search($max, $student_avg);	
		echo "the student name of maximum average : ". $student_name ."<br>";
		$index = array_search($max, array_values($student_avg));	
		echo "the index of maximum average : ".$index ."<br>";
		for($row=0;$row<5;$row++)
		{
			if($row==$index)
			{
				if ($project_id1==$student_selection[$row][0] || $project_id2==$student_selection[$row][0] || $project_id3==$student_selection[$row][0])
				{
					if ($project_id1 == $student_selection[$row][1] || $project_id2==$student_selection[$row][1] || $project_id3==$student_selection[$row][1])
					{
						if ($project_id1 == $student_selection[$row][2] || $project_id2==$student_selection[$row][2] || $project_id3==$student_selection[$row][2])
						{
							$project_id4 = $student_selection[$row][3];
						}
						else
						{	
							$project_id4 = $student_selection[$row][2];
						}
					}

					else
					{	
						$project_id4 = $student_selection[$row][1];
					}
				}
				else
				{
					$project_id4 = $student_selection[$row][0];
				}

				echo "the project of student : ".array_search($max, $student_avg)." is : ".$project_id4 ;
				$project_name = array_search($project_id4, $project_names);
				$sql = "select * from result where `stu_name` ='$student_name' or `pro_id` ='$project_id4' or `pro_name` ='$project_name'";
				$result  = mysqli_query($con , $sql);
				if (mysqli_num_rows($result)>0){}
				else
				{
				$query = "INSERT INTO result (stu_name,pro_id,pro_name) VALUES('$student_name','$project_id4', '$project_name')";
				mysqli_query($con,$query);
				}

			}
	    }
							echo "<br>";
            
							for($i=0;$i<26;$i++)
							{
								if($project_ids[$i]==$project_id4)
								{
                                   	$project_ids[$i]=0;							
								}
							}
		
		echo "<br>";
		echo "<br>";
		
		
		$a2=array(0=>0);
		array_splice($student_avg,$index,1,$a2);
		$max=max(array_values($student_avg));
		echo "<br>the maximum average : ".$max ."<br>";
		$student_name = array_search($max, $student_avg);	
		echo "the student name of maximum average : ". $student_name ."<br>";
		$index = array_search($max, array_values($student_avg));	
		echo "the index of maximum average : ".$index ."<br>";
		for($row=0;$row<5;$row++)
		{
			if($row==$index)
			{
				if ($project_id1==$student_selection[$row][0] || $project_id2==$student_selection[$row][0] || $project_id3==$student_selection[$row][0] || $project_id4==$student_selection[$row][0])
				{
					if ($project_id1 == $student_selection[$row][1] || $project_id2==$student_selection[$row][1] || $project_id3==$student_selection[$row][1] || $project_id4==$student_selection[$row][1])
					{
						if ($project_id1 == $student_selection[$row][2] || $project_id2==$student_selection[$row][2] || $project_id3==$student_selection[$row][2] || $project_id4==$student_selection[$row][2])
						{
							if ($project_id1 == $student_selection[$row][3] || $project_id2==$student_selection[$row][3] || $project_id3==$student_selection[$row][3] || $project_id4==$student_selection[$row][3])
							{
								$project_id5 = $student_selection[$row][4];
							}
							else
							{	
								$project_id5 = $student_selection[$row][3];
							}
						}

						else
						{	
							$project_id5 = $student_selection[$row][2];
						}
				    }
					else
					{	
						$project_id5 = $student_selection[$row][1];
					}
				}
				else
				{	
					$project_id5 = $student_selection[$row][0];
				}

				echo "the project of student : ".array_search($max, $student_avg)." is : ".$project_id5;
				$project_name = array_search($project_id5, $project_names);
				$sql = "select * from result where `stu_name` ='$student_name' or `pro_id` ='$project_id5' or `pro_name` ='$project_name'";
				$result  = mysqli_query($con , $sql);
				if (mysqli_num_rows($result)>0){}
				else
				{
					$query = "INSERT INTO result (stu_name,pro_id,pro_name) VALUES('$student_name','$project_id5','$project_name')";
					mysqli_query($con,$query);
				}
			}
		}	   
							echo "<br>";
            
							for($i=0;$i<26;$i++)
							{
								if($project_ids[$i]==$project_id5)
								{
                                   	$project_ids[$i]=0;							
								}
							}
		echo "<br>";
		echo "<br>";
		
		
		$a2=array(0=>0);
		array_splice($student_avg,$index,1,$a2);
		$max=max(array_values($student_avg));
		echo "<br>the maximum average : ".$max ."<br>";
		$student_name = array_search($max, $student_avg);	
		echo "the student name of maximum average : ". $student_name ."<br>";
		$index = array_search($max, array_values($student_avg));	
		echo "the index of maximum average : ".$index ."<br>";
		for($row=0;$row<6;$row++)
		{
			if($row==$index)
			{
				if ($project_id1==$student_selection[$row][0] || $project_id2==$student_selection[$row][0] || $project_id3==$student_selection[$row][0] || $project_id4==$student_selection[$row][0] || $project_id5==$student_selection[$row][0])
				{
					if ($project_id1 == $student_selection[$row][1] || $project_id2==$student_selection[$row][1] || $project_id3==$student_selection[$row][1] || $project_id4==$student_selection[$row][1] || $project_id5==$student_selection[$row][1])
					{
						if ($project_id1 == $student_selection[$row][2] || $project_id2==$student_selection[$row][2] || $project_id3==$student_selection[$row][2] || $project_id4==$student_selection[$row][2] || $project_id5==$student_selection[$row][2])
						{
							if ($project_id1 == $student_selection[$row][3] || $project_id2==$student_selection[$row][3] || $project_id3==$student_selection[$row][3] || $project_id4==$student_selection[$row][3] || $project_id5==$student_selection[$row][3])
							{
								if ($project_id1 == $student_selection[$row][4] || $project_id2==$student_selection[$row][4] || $project_id3==$student_selection[$row][4] || $project_id4==$student_selection[$row][4] || $project_id5==$student_selection[$row][4])
                                {
									
									
									for($i=0;$i<count($project_ids);$i++)
									{
										if($project_ids[$i]!=0){
											$project_id6 = $project_ids[$i];
										}
									}
								}
								else
								{
									$project_id6 = $student_selection[$row][4];
								}
							}
							else
							{	
								$project_id6 = $student_selection[$row][3];
							}
						}

						else
						{	
							$project_id6 = $student_selection[$row][2];
						}
				    }
					else
					{	
						$project_id6 = $student_selection[$row][1];
					}
				}
				else
				{	
					$project_id6 = $student_selection[$row][0];
				}

				echo "the project of student : ".array_search($max, $student_avg)." is : ".$project_id6;
				$project_name = array_search($project_id6, $project_names);
				$sql = "select * from result where `stu_name` ='$student_name' or `pro_id` ='$project_id6' or `pro_name` ='$project_name'";
				$result  = mysqli_query($con , $sql);
				if (mysqli_num_rows($result)>0){}
				else
				{
					$query = "INSERT INTO result (stu_name,pro_id,pro_name) VALUES('$student_name','$project_id6','$project_name')";
					mysqli_query($con,$query);
				}
			}
		}
		
							echo "<br>";
            
							for($i=0;$i<26;$i++)
							{
								if($project_ids[$i]==$project_id6)
								{
                                   	$project_ids[$i]=0;							
								}
							}
mysqli_close($con);

?>   