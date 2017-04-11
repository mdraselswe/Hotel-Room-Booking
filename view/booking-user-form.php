
<?php require 'components/header.php'; ?>
<?php require 'components/nav.php'; ?>

<body>

  <div class="formsection  templete clear">
    <h2 >Guest Information</h2>
      <form method="post" action="booking-confirmmation">
        <table>
          <tr>
    	      <td>Category</td>
    	      <td>Price/Room</td>
    	      <td>Total Room</td>
    	      <td>Total Price</td>
    	    </tr>
    	    <tr>
    	      <td><?= $roomCategory; ?></td>
            <input type="hidden" name="roomCategory" value="<?= $roomCategory ?>">
    	      <td><?= $price; ?></td>
            <input type="hidden" name="price" value="<?= $price ?>">
    	      <td><?= $totalRoom; ?></td>
            <input type="hidden" name="totalRoom" value="<?= $totalRoom ?>">
    	      <td><?= $totalPrice; ?></td>
            <input type="hidden" name="totalPrice" value="<?= $totalPrice ?>">
    	    </tr>
    	  </table>
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
