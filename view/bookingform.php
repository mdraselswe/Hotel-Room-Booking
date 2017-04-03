
<?php require 'components/header.php'; ?>
<?php require 'components/nav.php'; ?>

<body>
  <div class="formsection  templete clear">
    <h2 >Guest Information</h2>
      <table class="guestinfo">
            <tr >
                <td>First Name: </td>
                <td> <input type="text" name="fname" placeholder="First Name"></td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td> <input type="text" name="lname" placeholder="Last Name"></td>
            </tr>
            <tr>
                <td>Email Address: </td>
                <td> <input type="text" name="email" placeholder="Email"></td>
            </tr>
            <tr>
                <td>Phone Number: </td>
                <td> <input type="text" name="phone" placeholder="Phone Number"></td>
            </tr>
            <tr>
                <td>Address: </td>
                <td > <textarea placeholder="Address.."></textarea> </td>
            </tr>
            <tr>
                <td>Payment type: </td>
                <td > <ul> <li> Cash </li> </ul></td>
            </tr>
            <tr>
                <td></td>
                <td > <a href="bookingconfirmation.php"> <button type="submit"> Confirm </button> </a></td>
            </tr>

      </table>

</div>
</body>
<?php require 'components/footer.php'; ?>
