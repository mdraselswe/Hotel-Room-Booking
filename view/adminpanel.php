<?php require 'components/header.php'; ?>
<?php require 'components/nav.php'; ?>

<body>
  <div class="viewguestsection templete clear">
    <h2> Guest View </h2>
    <div class="buttonsection"
    <table>
      <tr>
        <td><button type="submit" name="add">ADD</button></td>
        <td><button type="submit" name="delete">DELETE</button></td>
        <td><button type="submit" name="update">UPDATE</button></td>

      </tr>
    </table>
  </div>
  <div class="searchsection">
    <table>
      <tr>
        <td><input type="text" name="search" placeholder="search"></td>
        <td><button type="submit" >Search</button></td>

      </tr>
    </table>
  </div>

  </div>

</body>
<?php require 'components/footer.php'; ?>
