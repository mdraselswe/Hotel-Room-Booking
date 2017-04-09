
<?php require 'components/header.php'; ?>
<?php require 'components/nav.php'; ?>

<body>
  <div class="formsection  templete clear">

    <h2 >Check in/out Information</h2>
    <form method="get" action="/view/booking-check-form.php">
      <table class="guestinfo">
            <tr >
                <td>Check In: </td>
                <td>
                    <input type="text" name="checkin" placeholder="Chack In Date">
                </td>
            </tr>
            <tr>
                <td>Check Out: </td>
                <td>  <input type="text" name="checkin" placeholder="Chack Out Date"></td>

            </tr>
            <tr>
                <td></td>
                <td > <a href="bookingconfirmation.php"> <button type="submit"> Submit </button> </a></td>
            </tr>

      </table>
    </form>





  <h2 >Room Information</h2>
  <form>
    <table class="guestinfo">
          <tr >
              <td>Room Type: </td>
              <td>Delux</td>

              <td>
                <select class="" name="room_quantity">
                  <<option value="">1</option>
                  <<option value="">2</option>
                  <<option value="">3</option>
                </select>
              </td>

              <td>Price 500/room</td>
          </tr>



          <tr>
              <td></td>
              <td > <a href="bookingconfirmation.php"> <button type="submit"> Submit </button> </a></td>
          </tr>

    </table>
  </form>

</div>
</body>
<?php require 'components/footer.php'; ?>
