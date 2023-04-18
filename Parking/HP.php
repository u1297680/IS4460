<!DOCTYPE html>
<html>
  <head>
    <title>Parking Permit Website</title>
  </head>
  <body>
    <h1>Welcome to the Parking Permit Website</h1>
    <ul id="links">
      <li><a href="login.html">Login</a></li>
    </ul>

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