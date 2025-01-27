<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEATHER PREDICTION WEB</title>
    <link rel="stylesheet" href="weather.css">
	<link rel="icon" href="weathericon.png" type="image/x-icon">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

</head>
<body>
    <div>
        <header class="Header">

            <section class="Middle">
                <div class="topnav">
                    <a class="active"></a>
                    <ul>
						
						<p class="Weather"><a href="Simple alert Weather.html">Weather<span class="arrow">&#9660;</span></a></p>
					<p class="Alerts"><a href="alert.php">Alerts<span class="circle">&#9679;</span></a>
                         <class="News"><a href="market.html">News</a></p>
                        <p class="About"><a href="aindex.html">About</a></p>
                        <p class="Contact"><a href="contact.php">Contact</a></p>
                    <!--    <p class="Contact"><a href="register.php">Register</a></p>-->
                        <p class="Contact"><a href="login.php">Login</a></p>
                    
                </div>
                    
            </section>
            <!----------Weather section---------->
        <section id="Weather-body" class="Weather-body">
            <div class="container">
                <div class="section-title">
                </div>
            </div>
        </section>
        <!----------Alert section---------->
        <section id="Alert" class="Alert">
            <div class="container">
                <div class="section-title">
                </div>
            </div>
        </section>
        <!----------News section---------->
        <section id="News" class="News">
            <div class="container">
                <div class="section-title">
                </div>
            </div>
        </section>
       
        <!----------About us section---------->
        <section id="About" class="About">
            <div class="container">
                <div class="section-title">
                </div>
            </div>
        </section>
    
        <!----------Contacts section---------->
        <section id="Contact" class="Contact">
            <div class="container">
                <div class="section-title">
                </div>
            </div>
			</section>
			 <!----------Registration section---------->
        <section id="Registration" class="Registration">
            <div class="container">
                <div class="section-title">
                </div>
            </div>
        
        </section>
    </div>
    <div class="header">
        <h1>WEATHER</h1>
        <div>
            <input type="text" name="" id="input" placeholder="Enter city name">
            <button id="search" onclick="searchByCity()">Search</button></input>
        </div>
    </div>

    <main>        
        <div class="weather">
            <h2 id="city">Delhi,IN</h2>
            <div class="temp-box">
                <img src="/weathericon.png" alt="" id="img">
                <p id="temperature">26 °C</p>
            </div>
            <span id="clouds">Broken Clouds</span>
        </div>
        <div class="divider1"></div>

        <div class="forecstH">
            <p class="cast-header">Upcoming forecast</p>
            <div class="templist">

                <div class="next">
                    <div>
                        <p class="time">8:30 PM</p>
                        <p>29 °C / 29 °C</p>
                    </div>
                    <p class="desc">Light Rain</p>
                </div>

                <div class="next">
                    <div>
                        <p class="time">8:30 PM</p>
                        <p>29 °C / 29 °C</p>
                    </div>
                    <p class="desc">Light Rain</p>
                </div>

                <div class="next">
                    <div>
                        <p class="time">8:30 PM</p>
                        <p>29 °C / 29 °C</p>
                    </div>
                    <p class="desc">Light Rain</p>
                </div>

                <div class="next">
                    <div>
                        <p class="time">8:30 PM</p>
                        <p>29 °C / 29 °C</p>
                    </div>
                    <p class="desc">Light Rain</p>
                </div>

                <div class="next">
                    <div>
                        <p class="time">8:30 PM</p>
                        <p>29 °C / 29 °C</p>
                    </div>
                    <p class="desc">Light Rain</p>
                </div>

            </div>
        </div>
    </main>

    <div class="forecstD">
        <div class="divider2"></div>
        <p class="cast-header"> Next 4 days forecast</p>
        <div class="weekF">

            <div class="dayF">
                <p class="date">Sun Jul 03 2022</p>
                <p>31 °C / 31 °C</p>
                <p class="desc">Overcast Clouds</p>
            </div>

            <div class="dayF">
                <p class="date">Sun Jul 03 2022</p>
                <p>31 °C / 31 °C</p>
                <p class="desc">Overcast Clouds</p>
            </div>

            <div class="dayF">
                <p class="date">Sun Jul 03 2022</p>
                <p>31 °C / 31 °C</p>
                <p class="desc">Overcast Clouds</p>
            </div>

            <div class="dayF">
                <p class="date">Sun Jul 03 2022</p>
                <p>31 °C / 31 °C</p>
                <p class="desc">Overcast Clouds</p>
            </div>
        </div>
    </div>
    <script src="/weather.js"></script>
</body>
</html>