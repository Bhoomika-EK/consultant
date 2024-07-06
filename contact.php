<?php
include("databaselink.php");
?>
<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>Feedback Form with map</title> 
	<link rel="stylesheet"
		href="contact.css"> 
	<link rel="stylesheet"
		href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
		integrity= 
"sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer" /> 
</head> 

<body> 
	<div class="ffbox"> 
		<div class="ffbox1"> 
			<h1 class="gfg"></h1> 
			<h2>Contact Us</h2> 
			<form> 
				<label for="fullName"> 
					<i class="fa fa-solid fa-user"
					style="margin: 2px;"> 
					</i> Full Name: 
				</label> 
				<input type="text"
					id="fullName"
					name="fullName" required> 

				<label for="email"> 
					<i class="fa fa-solid fa-envelope"
					style="margin: 2px;"> 
					</i> 
					Email Address: 

				</label> 
				<input type="email"
					id="email"
					name="email" required> 

				<label for="mobile"> 
					<i class=" fa fa-solid fa-phone"
					style="margin: 2px;"> 
					</i> 
					Contact No: 
				</label> 
				<input type="tel"
					id="mobile"
					name="mobile" required> 

				<label for="msg"> 
					<i class=" fa fa-solid fa-comment"
					style="margin: 2px;"> 
					</i> 
					Write Message: 
				</label> 
				<textarea id="msg"
						name="msg"
						rows="5" required> 
				</textarea> 

				<button type="submit"> 
					Submit 
				</button> 
			</form> 
		</div> 
		<div class="map-div"> 
			<iframe src= 
"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.1602802684192!2d77.39638073968018!3d28.504825075835775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce626851f7009%3A0x621185133cfd1ad1!2sGeeksforGeeks%20%7C%20Coding%20Classes!5e0!3m2!1sen!2sin!4v1702963476861!5m2!1sen!2sin"
					width="370"
					height="95%"
					allowfullscreen=""
					loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"> 
			</iframe> 
		</div> 
	</div> 
</body> 

</html>

<?php
if(isset($_REQUEST['submit']))
{
	$fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $msg = $_POST['msg'];
    

    $query = "INSERT INTO contact ( fullname,email,mobile,msg) VALUES('$fullname','$email','$mobile','$msg')";
    $data = mysqli_query($conn, $query);

    if($data)
    {
        echo "Successfully sent";
                        die;  
    }
    else
    {
        echo "Error: " ;
    }
}
?>