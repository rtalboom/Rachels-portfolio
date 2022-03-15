<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Rachel's rekenmachine</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../public/CSS/style2.css" id="theme" />
</head>
<body>
  <div class="buttons">
    <div class="container">
      <h1>Rekenmachine</h1>

      <div class="first-row">
        <input type="text" name="result" class="result" id="result" value="" placeholder="Result" readonly />
        <input type="button" value="C" onclick="clearScreen()" id="clear" />
      </div>
      <div class="second-row">
        <button class="btn btn-block btn-outline-primary n">1</button>
        <button class="btn btn-block btn-outline-primary n">2</button>
        <button class="btn btn-block btn-outline-primary n">3</button>
        <button class="btn btn-block btn-success operator +">+</button>
      </div>
      <div class="third-row">
        <button class="btn btn-block btn-outline-primary n">4</button>
        <button class="btn btn-block btn-outline-primary n">5</button>
        <button class="btn btn-block btn-outline-primary n">6</button>
        <button class="btn btn-block btn-success operator -">-</button>
      </div>
      <div class="fourth-row">
        <button class="btn btn-block btn-outline-primary n">7</button>
        <button class="btn btn-block btn-outline-primary n">8</button>
        <button class="btn btn-block btn-outline-primary n">9</button>
        <button class="btn btn-block btn-success operator X">x</button>
      </div>
      <div class="fifth-row">
        <button class="btn btn-block btn-success operator :">/</button>
        <button class="btn btn-block btn-outline-primary n">0</button>
        <button class="btn btn-block btn-outline-primary dot">.</button>
        <button class="btn btn-fluid btn-primary equals">=</button>
      </div>
      <div class="bottom-buttons">
        <button onclick="changeTheme()" id="dark-mode">
          Dark Mode
        </button>
      </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/f28b055962.js" crossorigin="anonymous"></script>
  <script src="../public/JS/javascript.js"></script>
</body>
</html>