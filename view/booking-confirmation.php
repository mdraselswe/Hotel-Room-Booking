<?php require 'components/header.php'; ?>
<?php require 'components/nav.php'; ?>

<body>

  <div class="registered templete clear">
      <img src="/assets/images/registered">
      <h2> Your booking is pre-registered! </h2>
      <h3>Your booking has been pre-registered and requires a payment within 12 hours. Please note that no availability is guaranteed until we receive the payment. </h3>
      <h4>Booking number: 3xb2a6 </h4>
      <form method="GET" action="/view/booking-summery.php">
        <button type="submit"> Booking Summery </button>
      </form>
  </div>

</body>

<?php require 'components/footer.php'; ?>
