<?php
 include_once("config.php");  
 include_once("header.php"); 
 

  if(isset($_POST['login']))
	  {

	date_default_timezone_set('Asia/Kolkata');
	$dtt=date('d-m-y h:i:s:a');

	$query ="select * from  tab_user where Uid='".$_POST['email_id']."'  and	password ='".$_POST['password']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result))
		{
		$row = mysql_fetch_assoc($result);
				$_SESSION['loggedIn'] = $row['Uid'];
				$query="insert into Useraccess (Uid,login) VALUES('".$_SESSION['loggedIn']."','".$dtt."')";
				$result=mysql_query($query);
				$row=mysql_fetch_array($result);


		echo '<script> alert("Login success"); window.location.href = "userhome.php" </script>';
		}
 else
	 {
		echo '<script> alert("Login failed");</script>';
	 }
 }
 

?>

<div align="center">
	<form action="" name="Memberlogin" id="Memberlogin"  method="post">

 <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
	<div class="section-title">
          <h2>Member Login</strong></h2>
        </div>
        <table border="0" width="200" Height="150">
			<tr>
		<td class="col"><p><b>User ID:</b><p></td>
		<td><input type="text" name="email_id" value="" /></td>
	</tr>
	<tr>
		<td  class="col"><p><b>Password:</b><p></td>
		<td><input type="password" name="password" value="" class="required"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="login" value="Login" />
		     	
			
		</td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr>
	<td>
		
		</td>
	</tr>
	</table>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
        


          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            


           
           
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    

  

    

  </main><!-- End #main -->


	


	</form>
<?php include_once("footer.php");?>