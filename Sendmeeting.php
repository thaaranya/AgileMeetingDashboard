<?php
  
 include('Adminheader.php');
include_once("config.php");
 error_reporting(0);
	$query = "select * from Meetingtbl";
		$result = mysql_query($query) or die(mysql_error());
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

	<form action="" name="AddMember" id="AddMember"  method="post">

 <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
	
	<div class="section-title">
          <h2>Send Meeting</strong></h2>
        </div>

   <table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="400" height="250">
	
		<tr>
		<td class="col" style="color: #000000"><p><b>Meeting Id:</p></b></td>
		<td><input type="text" name="first_name"  value=""  style="color: #000000" /></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000"><p><b>Meeting Pwd:</p></b></td>
		<td><input type="text" name="U_name" value=""  style="color: #000000" class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000"><p><b>Date:</p></b></td>
		<td><input type="date" id="birthday" name="password"></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000"><p><b>Time:</p></b></td>
		<td><input type="text" name="email_id" value=""  style="color: #000000" class="required email"  /></td>
	</tr>
	
	
	
	</table>
	

 </div>

<input class="btn btn-primary" type="submit" value="Submit" name="register">
<br>
<br>
<div class="scrollmenu">
			<table border="2" cellspacing="6" class="displaycontent" width="900" style="border:8px solid Black;" align="center">  
			<tr>
			<th bgcolor=green><font color=white size=2>Id</font></th>
			<th bgcolor=green><font color=white size=2>Meeting Id</font></th>
			<th bgcolor=green><font color=white size=2>Meeting Pwd</font></th>
				<th bgcolor=green><font color=white size=2>Date</font></th>
			<th bgcolor=green><font color=white size=2>Time</font></th>
			<th bgcolor=green><font color=white size=2>Delete </font></th>
	</tr>
		<?php
    while($row=mysql_fetch_array($result))
	{

?>
			<tr>
		
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['id']; ?></font></td><br>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Meetingid']; ?></font></td><br>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Meetingpwd']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Mdate']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Mtime']; ?></font></td>
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



	 


<br>


	 <?php


	if(isset($_POST['register']))
	 {
			
$query = "INSERT INTO `Meetingtbl` VALUES (null,'".$_POST['first_name']."','".$_POST['U_name']."','".$_POST['password']."','".$_POST['email_id']."')";
     //  echo $query;
	if(mysql_query($query)){
		
	  echo '<script> alert("SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:Sendmeeting.php");
	//exit;
 
 }


 if(isset($_GET['delete']))
	{
	
	$query = "delete from Meetingtbl where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';

		
header("location:Sendmeeting.php");
	exit;
	}
 

include('footer.php');
?>
