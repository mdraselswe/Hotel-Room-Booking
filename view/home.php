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
          <li> Selection</li>
        </ul>
      </div>

      <?php $count = 0; ?>

      <?php foreach ($roomCategory as $room) : ?>
        <div class="mainsection">
            <div class="room-type">
                <img src="/assets/images/room-type">
                <h2><?= $room['roomType']; ?></h2>
            </div>

            <div class="condition">
                <ul>
                    <?php if ($count == 0) : ?>
                      <li>1 Queen-Size Bed</li>
                      <li>Breakfast included</li>
                      <li>Cancellation policies</li>
                    <?php elseif ($count == 1) : ?>
                      <li>1 King-Size Bed</li>
                      <li>Breakfast included</li>
                      <li>Cancellation policies</li>
                    <?php elseif ($count == 2) : ?>
                      <li>2 King-Size Bed</li>
                      <li>Breakfast included</li>
                      <li>Cancellation policies</li>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="maximum-occupancy">
              <?php if ($count == 0) : ?>
                <p>2 Adult </p>
              <?php elseif ($count == 1) : ?>
                <p>2 Adults + 1 Child </p>
              <?php elseif ($count == 2) : ?>
                <p> 4 Adults + 2 Child </p>
              <?php endif; ?>


            </div>

            <div class="total-price">
                <p><?= $room['price']; ?> BDT</p>
            </div>

            <form class="nr-rooms" action="/booking-check-form" method="post">
                <input type="hidden" value="<?= $room['id']; ?>" name="categoryId">
                <button type="submit">Select</button>
            </form>
        </div>
        <?php $count ++; ?>
      <?php endforeach ?>

  </div>

</body>

<?php require 'components/footer.php'; ?>
