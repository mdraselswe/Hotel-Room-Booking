<?php require 'components/header.php'; ?>
<?php require 'components/nav.php'; ?>

<body>
  <div class="loginsection templete clear">
    <h2> Login </h2>
    <div class="adminlogin">
      <table>
          <tr>
              <td>User Name: </td>
              <td><input type="text" name="username" placeholder="User Name"></td>
          </tr>
          <tr>
              <td>Password: </td>
              <td><input type="password" name="password" placeholder="Password"></td>
          </tr>
          <tr>
              <td></td>
              <td><a href="adminpanel.php"><button type="submit" >Login </button></a></td>
          </tr>
      </table>
    </div>

  </div>

</body>
<?php require 'components/footer.php'; ?>
