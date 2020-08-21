<?php
 include_once("config.php");  

 include_once("Userheader.php"); 
 //error_reporting(0);

//if(isset($_GET['select'])){ 
$query2 = "select * from task where id='".$_GET['select']."'";
		//	echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
		}	

$t=time();
$dt=date("Y-m-d",$t);
$time=date("h:i:sa");
$set=$dt.':'.$time;
if(isset($_POST['submit']))
	{	
		$query = "INSERT INTO `Status` (`Tid`,`Proname`, `Taskname`, `Uid`, `Tstatus`, `Sdate`)"; 		
	$query .= " VALUES ('".$_POST['Sno']."','".$_POST['pname']."', '".$_POST['tsk']."', '".$_POST['Userid']."', '".$_POST['descrip']."', '".$_POST['Sdate']."')";
        echo '<script> alert("REGISTERD SUCCESSFULLY");</script>';
//	echo $query;exit;
   
	if(mysql_query($query)){
		echo 'REGISTERD SUCCESSFULLY';

	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:Viewtask.php");
	
					exit;
			}

?>
<div   align="center">
<form action="" name="login_form" id="login_form"  method="post">
<br/>
<br/>
<br/>
<table border="0" cellspacing="4" cellspadding="4" class="displaycontent"  width="500" height="400">
	<tr>
            <td class="style1">
              Id</td>
            <td class="style2">
                <input type="text" style="width:250px;" value="<?php echo $row['id'] ?>" name="Sno" />
			</td>         
		</tr>
	 <tr>
            <td class="style1">
              project Name</td>
            <td class="style2">
                <input type="text" style="width:250px;" value="<?php echo $row['Proname'] ?>" name="pname" />
			</td>         
		</tr>

		<tr>
            <td class="style1">
              Task</td>
            <td class="style2">
               <input type="text" style="width:250px;" value="<?php echo $row['Taskname'] ?>" name="tsk" />
			</td>         
		</tr>
						
		<tr>
            <td class="style1">
               Userid</td>
            <td class="style2">
                <input type="text" style="width:250px;" value="<?php echo $row['Uid'] ?>" name="Userid" />
			</td>         
		</tr>
		<tr>
            <td class="style1">
              Status </td>
            <td class="style2">
			<textarea name="descrip" rows="5" cols="40"></textarea>
            </td>         
		</tr>

		<tr>
            <td class="style1">
              Date </td>
            <td class="style2">
			  <input type="text" style="width:250px;" value="<?php echo date("d/m/yy"); ?>" name="Sdate" />
            </td>         
		</tr>
		<tr>
            <td class="style1">
               </td>
            <td class="style2">
			</br>
               <input type="submit" name="submit" value="submit" id="submit" />
			</td>         
		</tr>
		
</table>
 </div>
</div>
</form>
<br/>
</div>
<?php include_once("footer.php")?>	
</div>	<!-- End row -->	
</div>