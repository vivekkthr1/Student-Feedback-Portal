<?php 
include('dbconfig.php');
extract($_POST);
if(isset($save))
{
mysqli_query($conn,"insert into contact values(NULL,'$n','$e','$m','$msg',now())");
echo mysqli_error($conn);
$err="<font color='green'>Admin Will Contact you soon</font>";	

}

?>

        <div class="container">

        <!-- Content Row -->
       <div class="row">
            <div class="col-md-8">
                <h3><font color="#00FF33">Contact us </font></h3>
                <form name="sentMessage" method="post" id="contactForm" novalidate>
                  <?php echo @$err; ?>
				    <div class="control-group form-group">
                        
						
						<div class="controls">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="n" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mobile Number:</label>
                            <input type="number" class="form-control" name="m" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="e" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" name="msg" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="save" class="btn btn-primary">Send Message</button>
					<h1></h1>
                </form>
            </div>
			<div class="col-md-4" style="margin-top:30px">
                <h3>Contact Details</h3>
                <p>
                    <br>Graphic Era hill university,<br>
					Dehradun-248008.<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Phone Numbers</abbr>: 080 66 186610/11</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">Website</abbr>: <a href="#">vivekkothari.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">Working Hours</abbr>: Monday - Sunday: 9:00 AM to 5:00 PM</p>
            </div>
        </div>

        </div>

    <br/><br/>
    
    </div>
