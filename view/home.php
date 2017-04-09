<?php require 'components/header.php'; ?>
<?php require 'components/nav.php'; ?>

<body>

  <div class="slidersection templete clear">
      <?php require 'components/slider.php'; ?>
  </div>

  <div class="contentsection templete clear">
      <div class="contentheading">
        <ul>
          <li>Room Type</li>
          <li>Condition</li>
          <li>Maximum Occupancy</li>
          <li> Total price </li>
          <li> Confirmation</li>
        </ul>
      </div>

      <?php foreach ($roomCategory as $room) : ?>
        <div class="mainsection">
            <div class="room-type">
                <img src="/assets/images/room-type">
                <h2><?= $room['roomType']; ?></h2>
            </div>

            <div class="condition">
                <ul>
                    <li>1 Queen-Size Bad</li>
                    <li>Breakfast included</li>
                    <li>Cancellation policies</li>
                </ul>
            </div>

            <div class="maximum-occupancy">
                <p>2 Adult </p>
            </div>

            <div class="total-price">
                <p>Price</p>
                <p><?= $room['price']; ?></p>
            </div>

            <div class="nr-rooms">
                <a href="/view/booking-check-form.php"><button type="submit">Confirm</button></a>
            </div>
        </div>
      <?php endforeach ?>

  </div>

</body>

<?php require 'components/footer.php'; ?>
