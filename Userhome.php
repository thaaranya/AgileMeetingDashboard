<?php
error_reporting(0);
include('Userheader.php');

?>

<?php
session_start();

?>


<center>

<form action="" name="Userhome" id="Userhome"  method="post">

	
<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
	<div class="section-title">
          <h2>Welcome</strong></h2>
		  <td><b><font color=#FF5733 size=4><?php echo $_SESSION['loggedIn'];?></font></b></td>
        </div>

      </div>
    </section><!-- End About Us Section -->

  </main><!-- End #main -->

	</form>
</center>

<?php

include('footer.php');

?>


