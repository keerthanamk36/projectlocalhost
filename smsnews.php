

<!DOCTYPE html>
<html>
   
 <html>
<!<head>
   
	  <title>Welcome</title>
	

</head>
<body>
	  <header>
	        

      </header>
	  <body style='background-color:pink'>
              <div class="forum">
              <center><h2 class="contain">Send MAIL</h2></center>
					<h4 class="sent-notification"></h4>
<form id="myForm">
		<center>
			<label>Name</label>
			<input id="name" type="text" placeholder="Enter Name">
			<br><br>

			<label>Email</label>
			<input id="email" type="text" placeholder="Enter Email">
			<br><br>

			<label>Subject</label>
			<input id="subject" type="text" placeholder=" Enter Subject"> 
			<br><br>

			<p>Message</p>
			<textarea id="body" rows="5" cols="40" placeholder="Type Message"></textarea></center>
			<br><br>

			<center><button type="button" onclick="sendEmail()" value="Send An Email">Submit</button> </center>
		</form>
	
	</div>
	
    </body>
	

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>
</html>