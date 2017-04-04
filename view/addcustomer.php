<?php require 'components/header.php'; ?>
<?php require 'components/nav.php'; ?>

<body>
  <div class="adminformsection  templete clear">
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
                <td>Room Type:</td>
                <td> <input type="radio" name="standard" value="standard" />Standard <br>
            		<input type="radio" name="delux"  value="delux" /> Delux <br>
                <input type="radio" name="luxury"  value="luxury" /> Luxury
            		</td>
            </tr>
            <tr>
                <td>No. of Room: </td>
                <td >  </td>
            </tr>
            <tr>
                <td>Total Payment: </td>
                <td > <input type="text" name="totalPayment" placeholder="Total payment"> </td>
            </tr>
            <tr>
                <td>Due: </td>
                <td > <input type="text" name="due" placeholder="Due"> </td>
            </tr>
            <tr>
                <td></td>
                <td > <a href="/view/adminpanel.php"> <button type="submit"> Confirm </button> </a></td>
            </tr>

      </table>

</div>
</body>
<?php require 'components/footer.php'; ?>
