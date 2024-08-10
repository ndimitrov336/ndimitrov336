<?php
$conn = new MySQLi("localhost", "root", "", "db12z");

$query = $conn->query("SELECT * FROM promosale ORDER BY id");


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Promosale.bg</title>
    <link rel="stylesheet" href="styles/style.css" />
	<link rel="stylesheet" href="styles/style1.css" />
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="script.js" defer></script>
   <link rel="icon" href="images/logo5.png" type="image/x-icon">
   <style>
        th,
        td,
        tr {
            border: 1px solid white;
        }
    </style>
  </head>

   


<body>
<header>
    <nav class="nav">
      <i class="uil uil-bars navOpenBtn"></i>
      <a href="index.html" class="logo"><img src="images/logo3.png" ></a>
      <ul class="nav-links">
        <i class="uil uil-times navCloseBtn"></i>
        <li><a href="index.html">Начало</a></li>
        <li><a href="car.html">Автомобили</a></li>
        <li><a href="chasti.html">Авточасти</a></li>
        <li><a href="about.html"><span>За нас</span></a></li>
		<li><a href="cart.html"><i class="fa fa-shopping-basket" style="font-size:20px;color:white;"></i></a></li>
        <li><a href="contact.html">Контакти</a></li>
      </ul>
      <i class="uil uil-search search-icon" id="searchIcon"></i>
      <div class="search-box">
        <i class="uil uil-search search-icon"></i>
        <input type="text" placeholder="Търсете тук..." />
      </div>
    </nav>
	
	
	<script>
	const nav = document.querySelector(".nav"),
  searchIcon = document.querySelector("#searchIcon"),
  navOpenBtn = document.querySelector(".navOpenBtn"),
  navCloseBtn = document.querySelector(".navCloseBtn");
searchIcon.addEventListener("click", () => {
  nav.classList.toggle("openSearch");
  nav.classList.remove("openNav");
  if (nav.classList.contains("openSearch")) {
    return searchIcon.classList.replace("uil-search", "uil-times");
  }
  searchIcon.classList.replace("uil-times", "uil-search");
});
navOpenBtn.addEventListener("click", () => {
  nav.classList.add("openNav");
  nav.classList.remove("openSearch");
  searchIcon.classList.replace("uil-times", "uil-search");
});
navCloseBtn.addEventListener("click", () => {
  nav.classList.remove("openNav");
});
	</script>
	</header>

   

    <table style="width:80%;margin-top:10em;margin-bottom:9em;margin-left:10em;text-align:center">
        <tr>
            
            <th>Име</th>
            <th>Имейл</th>
            <th>Телефон</th>
            <th>Съобщение</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($query)) { ?>
            <tr>
                 
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['mobile'] ?></td>
                <td><?php echo $row['message'] ?></td>
            </tr>
        <?php } ?>
    </table>
<br>
    <footer class="footer-distributed">

      <div class="footer-left">

        <h3>Promosale autos <span><img src="images/logo3.png"  style="height:40px; width:250px;margin-left:1em;"></span></h3>

        <p class="footer-links">
          <a href="index.html" class="link-1">Начало</a>
          
          <a href="car.html">Автомобили</a>
        
          <a href="chasti.html">Авточасти</a>
        
          <a href="about.html">За нас</a>
          
          <a href="contact.html">Контакти</a>
          
        </p>

        <p class="footer-company-name">Promosale autos © 2023</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>ул. Георги Раковски № 107</span>София, България</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>0885 233 757</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:ndimitrov336@gmail.com">ndimitrov336@gmail.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>За нас</span>
          Promosale autos е водеща компания в продажбата на луксозни автомобили и тунинг авточасти за тях.
        </p>

        <div class="footer-icons">

          <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
          <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
          <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
		  <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>

        </div>

      </div>

    </footer>

</body>

</html>







