<html>
<head>
  <link rel="stylesheet" href="css/style.css"/>
  <script src="js/index.js"></script>
</head>
<nav class="navbar">
  <div class="navbar__brand">
    <img
      src="https://www.freepnglogos.com/uploads/netflix-logo-0.png"
      alt="logo" class="brand__logo" />
  </div>

  <div class="navbar__nav__items">
    <div class="nav__item">
      <div class="dropdown__container">
        <i class="fas fa-globe"></i>
        <select
          name="languages"
          id="languagesSelect"
          class="language__drop__down"
        >
          <option value="english" selected>English</option>
          <option value="hindi">Hindi</option>
        </select>
      </div>
    </div>

    <div class="nav__item">
      <button class="signin__button" onclick="myfunction()" href="signin.php">Sign in</button>
    </div>
  </div>
</nav>
<script>
  function myfunction(){
    var="Hello";
    <?php echo $var ?>
  }
</script>
</html>