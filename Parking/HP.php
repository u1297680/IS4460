<!DOCTYPE html>
<html>
  <head>
    <title>Parking Permit Website</title>
<?php
// Check login form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Chec if the username and password are correct
  if ($username === 'admin' && $password === 'password123') {
    // If the user is authenticated, set their role to admin
    $role = 'admin';
  } else if ($username === 'user' && $password === 'password123') {
    // If the user is authenticated, set their role to user
    $role = 'user';
  } else {
    // If the username or password is incorrect, display an error message
    $error = 'Invalid username or password';
  }
}

// Check if the user is authenticated and authorized
if ($role === 'admin') {
  // If the user is an admin, show the admin links
  echo '
    <li><a href="vehicleinfo.html">Vehicle Information</a></li>
    <li><a href="viewaddpermit.html">View/Add Permit</a></li>
    <li><a href="paypermit.html">Pay Permit</a></li>
    <li><a href="violationpayment.html">Violation Payment</a></li>
    <li><a href="personalinfo.html">Update Personal Info</a></li>
    <li><a href="admin.html">Admin Page</a></li>
  ';
} else if ($role === 'user') {
  // If the user is a regular user, show the user links
  echo '
    <li><a href="vehicleinfo.html">Vehicle Information</a></li>
    <li><a href="viewaddpermit.html">View/Add Permit</a></li>
    <li><a href="paypermit.html">Pay Permit</a></li>
    <li><a href="violationpayment.html">Violation Payment</a></li>
    <li><a href="personalinfo.html">Update Personal Info</a></li>
  ';
} else {
  // If the user is not authenticated or authorized, show the login link
  echo '<li><a href="login.html">Login</a></li>';
}
?>

    <style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
		h1 {
			margin: 0;
		}
		nav {
			background-color: #f44336;
			color: #fff;
			padding: 10px;
		}
		nav ul {
			margin: 0;
			padding: 0;
			list-style-type: none;
			display: flex;
			justify-content: space-around;
			align-items: center;
		}
		nav li {
			margin: 0;
			padding: 0;
			display: inline-block;
		}
		nav a {
			color: #fff;
			text-decoration: none;
			padding: 10px;
			border-radius: 5px;
			transition: background-color 0.2s ease-in-out;
		}
		nav a:hover {
			background-color: #b71c1c;
		}
		main {
			margin: 50px auto;
			max-width: 400px;
		}
		h2 {
			text-align: center;
		}
		form {
			border: 1px solid #ccc;
			padding: 20px;
			margin-top: 20px;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="password"], input[type="submit"] {
			padding: 10px;
			margin-bottom: 20px;
			width: 100%;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
    </style>
  </head>
  <body>
    <header id="header">
      <h1>Parking Permit Website</h1>
    </header>
    <nav id="nav">
      <ul id="links">
        <li><a href="login.html">Login</a></li>
      </ul>
    </nav>

    <script>
      const isLoggedIn = true; // Set to true if user is logged in, false otherwise

      if (isLoggedIn) {
        const links = document.getElementById("links");

        links.innerHTML = `
          <li><a href="vehicleinfo.html">Vehicle Information</a></li>
          <li><a href="viewaddpermit.html">View/Add Permit</a></li>
          <li><a href="paypermit.html">Pay Permit</a></li>
          <li><a href="violationpayment.html">Violation Payment</a></li>
          <li><a href="personalinfo.html">Update Personal Info</a></li>
        `;
      }
    </script>
  </body>
</html>
