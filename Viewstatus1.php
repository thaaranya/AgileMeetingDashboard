<?php
 include_once("config.php");  

 include_once("Adminheader.php"); 
 error_reporting(0);

 $query = "select * from status";
		$result = mysql_query($query) or die(mysql_error());
?>
<?php
session_start();

?>

<?php



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
          <h2>Status Details</strong></h2>
        </div>


	</div>

	<div class="scrollmenu">
	<table border="2" cellspacing="6" class="displaycontent" width="900" style="border:8px solid Black;" align="center">  
			<tr>
			<th bgcolor=green><font color=white size=2>Status id</font></th>
			<th bgcolor=green><font color=white size=2>Task id</font></th>
			<th bgcolor=green><font color=white size=2>Project Name</font></th>
			<th bgcolor=green><font color=white size=2>Task</font></th>
			<th bgcolor=green><font color=white size=2>User Id</font></th>
			<th bgcolor=green><font color=white size=2>Status</font></th>
			<th bgcolor=green><font color=white size=2>Status Date</font></th>
			<th bgcolor=green><font color=white size=2>Delete </font></th>
	</tr>
		<?php
    while($row=mysql_fetch_array($result))
	{

?>
			<tr>
		
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['id']; ?></font></td><br>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Tid']; ?></font></td><br>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Proname']; ?></font></td><br>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Taskname']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Uid']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Tstatus']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Sdate']; ?></font></td>
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

</div>	 
<?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from status where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';

		
header("location:Viewstatus1.php");
	exit;
	}
 

include_once("footer.php")?>	
</div>	<!-- End row -->	
</div>

</div>




