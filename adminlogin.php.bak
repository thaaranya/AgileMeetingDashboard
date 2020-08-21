<?php
 
 if(isset($_POST['login']))
	 {
	
	if($_POST['email_id']=="admin" && $_POST['password']=="admin")
	 {
		$_SESSION['loggedIn']='admin';
		header("location:adminhome.php");

	 }
	 else
	 {
	 	 	echo '<script> alert("Login Failed");</script>';
	 }


	
 }
 
include_once("header.php"); 
?>
<script type="text/javascript">	
  $(document).ready(function(){
    $("#login_form").validate();
  });
</script>
<div align="center">
	<form action="" name="login_form" id="login_form"  method="post">

 <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
	<div class="section-title">
          <h2>Admin Login</strong></h2>
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