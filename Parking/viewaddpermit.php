<!DOCTYPE html>
<html>
  <head>
    <title>View/Add Permit</title>
  </head>
  <body>
    <h1>View/Add Permit</h1>
    <h2>Current Permit Information:</h2>
    <p>Permit Type: Residential</p>
    <p>Permit Expiration Date: 12/31/2023</p>
    <form>
      <h2>Update Permit Information:</h2>
      <label for="permittype">Permit Type:</label>
      <select id="permittype" name="permittype">
        <option value="residential">Residential</option>
        <option value="commercial">Commercial</option>
        <option value="visitor">Visitor</option>
      </select>
      <br><br>
      <label for="expirationdate">Permit Expiration Date:</label>
      <input type="date" id="expirationdate" name="expirationdate" value="2023-12-31">
      <br><br>
      <input type="submit" value="Save">
    </form>
  </body>
</html>