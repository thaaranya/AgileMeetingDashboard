<?php
  
 include('Adminheader.php');
include_once("config.php");
 error_reporting(0);
	$query = "select * from tab_user";
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

	<form action="AddMember.php" name="AddMember" id="AddMember"  method="post">

 <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
	
	<div class="section-title">
          <h2>New user Registeration Here</strong></h2>
        </div>

   <table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="300" height="250">
	
		<tr>
		<td class="col" style="color: #000000"><p><b>Name:</p></b></td>
		<td><input type="text" name="first_name"  value=""  style="color: #000000" /></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000"><p><b>User ID:</p></b></td>
		<td><input type="text" name="U_name" value=""  style="color: #000000" class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000"><p><b>Password:</p></b></td>
		<td><input type="password" name="password" value=""  style="color: #000000" class="required" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000"><p><b>Email:</p></b></td>
		<td><input type="text" name="email_id" value=""  style="color: #000000" class="required email"  /></td>
	</tr>
	
	
	<tr>
		<td class="col"  style="color: #000000"><p><b>Address:</p></b></td>
		<td> <input type="text" name="address" value=""  style="color: #000000" class="required"  /></td>
	</tr>

	<tr>
		<td class="col"  style="color: #000000"  ><p><b>Mobile:</p></b></td>
		<td><input type="text" class="required" onkeypress="return numbers(event);" name="mobile" value="" style="color: #000000" /></td>
	</tr>
	
	</table>
	<input class="btn btn-primary" type="submit" value="Submit" name="register">

	<div class="scrollmenu">
			<table border="2" cellspacing="6" class="displaycontent" width="900" style="border:8px solid Black;" align="center">  
			<tr>
			<th bgcolor=green><font color=white size=2>Full Name</font></th>
			<th bgcolor=green><font color=white size=2>User Id</font></th>
			<th bgcolor=green><font color=white size=2>Email id</font></th>
				<th bgcolor=green><font color=white size=2>Address</font></th>
			<th bgcolor=green><font color=white size=2>Mobile</font></th>
			<th bgcolor=green><font color=white size=2>Delete </font></th>
	</tr>
		<?php
    while($row=mysql_fetch_array($result))
	{

?>
			<tr>
		
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['fname']; ?></font></td><br>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Uid']; ?></font></td><br>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['email_id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['address']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['mobile']; ?></font></td>
		<td bgcolor=#008000><font color=#000000 size=2><a href="?delete=<?php echo $row['Uid'];?>">Delete</a></font></td>

	
 	</tr>
	
		<?php
		}	

?>	
</table> 
</div>
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
			
$query = "INSERT INTO `tab_user` VALUES ('".$_POST['first_name']."','".$_POST['U_name']."','".$_POST['password']."','".$_POST['email_id']."','".$_POST['address']."','".$_POST['mobile']."')";
     //  echo $query;
	if(mysql_query($query)){
		
	  echo '<script> alert("SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:AddMember.php");
	exit;
 
 }


 if(isset($_GET['delete']))
	{
	
	$query = "delete from tab_user where Uid='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';

		
header("location:AddMember.php");
	exit;
	}
 

include('footer.php');
?>
