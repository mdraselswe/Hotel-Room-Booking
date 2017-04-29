
<?php require 'components/header.php'; ?>
<?php require 'components/nav.php'; ?>

<body>

  <div class="formsection  templete clear">
      <form method="post" action="booking-confirmmation">
        <h2 >Booking Information</h2>
        <table class="bookinfo">
          <tr>
    	      <th>Room Type</th>
    	      <th>Price per Room</th>
    	      <th>No. of Room</th>
    	      <th>Total Price</th>
    	    </tr>
    	    <tr>
    	      <td><?= $roomCategory; ?></td>
            <input type="hidden" name="roomCategory" value="<?= $roomCategory ?>">
    	      <td><?= $price; ?> BDT</td>
            <input type="hidden" name="price" value="<?= $price ?>">
    	      <td><?= $totalRoom; ?></td>
            <input type="hidden" name="totalRoom" value="<?= $totalRoom ?>">
    	      <td><?= $totalPrice; ?> BDT</td>
            <input type="hidden" name="totalPrice" value="<?= $totalPrice ?>">
    	    </tr>
    	  </table>
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
                  <td > <textarea placeholder="Address.." name="address"></textarea> </td>
              </tr>
              <tr>
                  <td>Payment type: </td>
                  <td >
                    <ul>
                      <li> Cash </li>
                    </ul>
                  </td>
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
