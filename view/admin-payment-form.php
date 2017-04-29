
<?php require 'components/header.php'; ?>
<?php require 'components/nav.php'; ?>

<body>

  <div class="formsection  templete clear">
    <h2 >Guest Information</h2>
      <form method="post" action="#">
        <table class="guestinfo">
              <tr >
                  <td>First Name: </td>
                  <td> </td>
              </tr>
              <tr>
                  <td>Last Name: </td>
                  <td> </td>
              </tr>
              <tr>
                  <td>Email Address: </td>
                  <td> </td>
              </tr>
              <tr>
                  <td>Phone Number: </td>
                  <td> </td>
              </tr>
              <tr>
                  <td>Address: </td>
                  <td >  </td>
              </tr>
              <tr>
                  <td>Total Payment : </td>
                  <td >  </td>
              </tr>
              <tr>
                  <td>Pay : </td>
                  <td> <input type="text" name="pay" placeholder="pay"></td>

              </tr>
              <tr>
                  <td></td>
                  <td ><button type="submit"> Confirm </button></td>
              </tr>
        </table>
      </form>
    </div>
</body>
<?php require 'components/footer.php'; ?>
