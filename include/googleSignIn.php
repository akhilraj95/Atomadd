<!--
	Todo :
		1) update the URL for the XMLHTTPrequest 

-->
<!-- Google Platform Library -->    
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="">

<script type="text/javascript">
		function onSignIn(googleUser) {
		  var profile = googleUser.getBasicProfile();
		  console.log('ID: ' + profile.getId());	 // Do not send to your backend! Use an ID token instead.
		  console.log('Name: ' + profile.getName());
		  console.log('Image URL: ' + profile.getImageUrl());
		  console.log('Email: ' + profile.getEmail());
		
			var xhr = new XMLHttpRequest();
			xhr.open('POST', 'https://li2.in/atomadd.com/signin.php');
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.onload = function() {
			  console.log('Signed in as: ' + xhr.responseText);
			};
			xhr.send('idtoken=' + id_token);
		}	


	   function signOut() {
	    var auth2 = gapi.auth2.getAuthInstance();
	    auth2.signOut().then(function () {
	      console.log('User signed out.');
	    });


	  }
</script>
