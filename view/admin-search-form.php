<?php require 'components/header.php'; ?>
<?php require 'components/nav.php'; ?>


<body>

  <div class="searchCustomer templete clear">
     <h2> Search </h2>
        <div class="search">
          <form method="GET" action="/view/admin-payment-form.php">
            <table>
                <tr>
                    <td><input type="text" name="search" placeholder="Search by Mobile Number"></td>
                </tr>
                <tr>
                    <td><button type="submit" >Search </button></td>
                </tr>
            </table>
          </form>
        </div>
  </div>

</body>
<?php require 'components/footer.php'; ?>
