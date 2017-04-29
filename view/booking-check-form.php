
<?php require 'components/header.php'; ?>
<?php require 'components/nav.php'; ?>



  <div class="roomBookingSection  templete clear">

    <h2 >Availabe Room</h2>
    <form method="get" action="/booking-check-form">
      <table class="roomAvailableSection">
            <tr>
                <td>Check In: </td>
                <td>
                    <input type="text" name="checkin" placeholder="Check In Date">
                </td>
            </tr>
            <tr>
                <td>Check Out: </td>
                <td>  <input type="text" name="checkout" placeholder="Check Out Date"></td>

            </tr>
            <tr>
                <td></td>
                <td ><button type="submit"> Next </button> </td>
            </tr>

      </table>
    </form>



  <h2 >Room Information</h2>
  <form action="/booking-user-form" method="post">
    <table class="roomInfoSection">

          <tr>
              <th>Room Type: </td>
              <td>
                <?= $roomCategory[0]['roomType'] ?>
                <input type="hidden" name="roomCategory" value="<?= $roomCategory[0]['roomType'] ?>">
              </td>
          </tr>
          <tr>
            <th> Price Per Room: </th>
              <td>
                <?= $roomCategory[0]['price'] ?> BDT
                <input type="hidden" name="price" value="<?= $roomCategory[0]['price'] ?>">
              </td>
          </tr>
          <tr>
            <th> No. of Room: </th>
              <td>
                <select name="roomQuantity">
                  <?php $count = 1; ?>
                  <?php while ($count <= $totalRoom): ?>
                      <option value="<?= $count ?>"><?= $count ?></option>
                      <?php $count ++ ?>
                  <?php endwhile ?>
                </select>
              </td>
          </tr>


          <tr>
              <td></td>
              <td> <button type="submit"> Submit </button> </td>
          </tr>

    </table>
  </form>

</div>

<?php require 'components/footer.php'; ?>
