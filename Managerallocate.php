<?php
 include_once("config.php");  

 include_once("Adminheader.php"); 
 error_reporting(0);

 $query = "select * from task";
		$result = mysql_query($query) or die(mysql_error());
?>
<?php
session_start();

?>

<?php



?>


<?php 

if(isset($_GET['SelectUser'])){
	 $query ="select * from tab_user where U_name='".$_GET['SelectUser']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result)){
		$row = mysql_fetch_assoc($result);
		
	}
 }
 
?>

<style>
div.scrollmenu {
  background-color: white;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #777;
}
</style>

<div align="center">
<div class="row mt-5 justify-content-center" data-aos="fade-up">
<div class="col-lg-10">

<form action="" name="Managerallocate" id="Managerallocate"  method="post">

 <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
	
	<div class="section-title">
          <h2>Project Allocation to Team Members</strong></h2>
        </div>

<table border="0" cellspacing="4" cellspadding="4"   class="displaycontent"  width="500" height="300">
	<caption></caption>
	
	<tr>
		<td class="col">Project Name:</td>
		<td><input type="text" name="pname" value="" /></td>
	</tr>

	<tr>
		<td class="col">Task:</td>
		<td><input type="text" name="tsk" value="" class="required" /></td>
	</tr>

	<tr>
		<td class="col">Ending Date:</td>
		<td><input type="date" id="birthday" name="birthday"></td>
	</tr>
	<tr>
		<td class="col">User Id:</td>
		<td>

 <select name="goods_id" onchange="getUserInfo(this.value)" > 
	<!-- <select name="goods_id" > -->
	<option><strong>--SELECT--</strong></option> 

<?php $a = array() ;
	  $a['Uid'] = '';
	  	 

$goods_query=mysql_query("select * from tab_user") or die(mysql_error());
                                while($fetch_goods_id=mysql_fetch_array($goods_query))
                                {
                                  echo '<option value="'.$fetch_goods_id['Uid'].'">';;
                                    echo $fetch_goods_id['Uid'].'<br/>'; 
                                    echo ' </option>';
									if(isset($_GET['Uid']) && $_GET['Uid']==$fetch_goods_id['Uid']){
									  $a = $fetch_goods_id;
									  
									
									}
								}

?> 

</select>


</td>
	</tr>
		
	<tr>
		<td>&nbsp;</td>
		<td >
			
		     <input class="btn btn-primary" type="submit" value="Submit" name="register">
		</td>
	</tr>

	
		
	
	</table>

	</div>

	<div class="scrollmenu">
	<table border="2" cellspacing="6" class="displaycontent" width="900" style="border:8px solid Black;" align="center">  
			<tr>
			<th bgcolor=green><font color=white size=2>id</font></th>
			<th bgcolor=green><font color=white size=2>Project Name</font></th>
			<th bgcolor=green><font color=white size=2>Task</font></th>
				<th bgcolor=green><font color=white size=2>Ending Date</font></th>
			<th bgcolor=green><font color=white size=2>User Id</font></th>
			<th bgcolor=green><font color=white size=2>Delete </font></th>
	</tr>
		<?php
    while($row=mysql_fetch_array($result))
	{

?>
			<tr>
		
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['id']; ?></font></td><br>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Proname']; ?></font></td><br>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Taskname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Edate']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Uid']; ?></font></td>
		<td bgcolor=#008000><font color=#000000 size=2><a href="?delete=<?php echo $row['id'];?>">Delete</a></font></td>

	
 	</tr>
	
		<?php
		}	

?>	
</table> 

</div>
	</section><!-- End About Us Section -->

    
 </main><!-- End #main -->




	</form>




</div>

</div>
</div>
<?php

if(isset($_POST['register'])){
	 if($_POST['pname']=="" || $_POST['tsk']=="" )
	 {
		 echo '<script> alert("PLEASE FILL THE DETAILS");</script>';
	 }
	 else
	 {
	$query = "INSERT INTO `Task` (`Proname`, `Taskname`, `Edate`, `Uid`)"; 		
	$query .= " VALUES ('".$_POST['pname']."', '".$_POST['tsk']."', '".$_POST['birthday']."', '".$_POST['goods_id']."')";
        echo '<script> alert("REGISTERD SUCCESSFULLY");</script>';
//	echo $query;exit;
   
	if(mysql_query($query)){
		echo 'REGISTERD SUCCESSFULLY';

	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:Managerallocate.php");
	exit;

 }
 }

?>
</div>	 
<?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from Task where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';

		
header("location:Managerallocate.php");
	exit;
	}

include_once("footer.php")?>	
</div>	<!-- End row -->	
</div>

</div>




