<?php require 'components/header.php'; ?>
<?php require 'components/nav.php'; ?>


<body>

  <div class="loginsection templete clear">
     <h2> Login </h2>
        <div class="adminlogin">
          <form method="POST" action="/controller/admin-login-form.php">
            <table>
                <tr>
                    <td>User Name: </td>
                    <td><input type="text" name="name" placeholder="User Name"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="pass" placeholder="Password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit"  >Login </button></td>
                </tr>
            </table>
          </form>
        </div>
  </div>


</body>



<?php require 'components/footer.php'; ?>
