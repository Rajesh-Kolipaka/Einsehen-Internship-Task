<html>
<head>
    <title>Login</title>
</head>
<body>
    <center>
      <h1>Login Page</h1>
    <form action ="verifyDetails.php" method="post">
      <table cellspacing="25">

        <tr>
          <td>Name</td>
          <td><input type="text" name="name" ></td>
        </tr>

        <tr>
          <td>Email id </td>
          <td><input type="email" name="emailId" ></td>
        </tr>

        <tr>
          <td>Phone number</td>
          <td> <input type="number" name="phoneNumber" ></td>
        </tr>

     </table>
       <input type="submit" name="submit">
   </form>
   </center>
</body>
</html>
