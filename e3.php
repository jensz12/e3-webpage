<!DOCTYPE html>
<html lang="da-DK">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>E3 2018 - Jens Møller</title>
<link rel="icon" href="https://design.jensz12.com/images/e3.png">
<meta name="description" content="Electronic Entertainment Expo, E3 eller E³ er en årlig underholdningsmesse primært tiltænkt præsentation af fremtidige udgivelser indenfor computerspil og konsolspil">
<meta name="theme-color" content="#A81010">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@jensz12">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="E3 2018 - Jens Møller">
<meta name="twitter:description" content="Electronic Entertainment Expo, E3 eller E³ er en årlig underholdningsmesse primært tiltænkt præsentation af fremtidige udgivelser indenfor computerspil og konsolspil">
<meta name="twitter:image:src" content="https://design.jensz12.com/images/e3-back.png">>
<?php require_once 'inc/header.php';?>
<style>
body {
	background-image: url(https://design.jensz12.com/images/e3-back.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	background-attachment: fixed;
	height: 100%;
	font-family: 'Roboto', sans-serif;
	padding-top: 70px;
}
h1 {
  text-align: center;
  margin-top:0px;
}
</style>
</head>
<body>
<header>
</header>
<main role="main" id="content" class="container">
<div class="row">
				<article class="col-lg-12 col-md-12">
					<div class="jumbotron">
						<h1> E3 starter om:</h1>
						<h1 id="countdown"></h1>
					</div>
					<div class="jumbotron">
						<div class="table-responsive">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>Publisher</th>
										<th>Dato</th>
										<th>Klokkeslæt</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="https://www.twitch.tv/events/G0lwrcvfTySTry-jkPhl_g">EA</a></td>
										<td>Lørdag d. 9 juni </td>
										<td>20:00</td>
									</tr>
									<tr>
										<td><a href="https://www.twitch.tv/events/G0lwrcvfTySTry-jkPhl_g">Microsoft</a></td>
										<td>Søndag d. 10 juni</td>
										<td>22:00</td>
									</tr>
									<tr>
										<td><a href="https://www.twitch.tv/events/G0lwrcvfTySTry-jkPhl_g">Bethesda</a></td>
										<td>Mandag d. 11. juni</td>
										<td>03:30</td>
									</tr>
									<tr>
										<td><a href="https://www.twitch.tv/events/G0lwrcvfTySTry-jkPhl_g">Ubisoft</a></td>
										<td>Mandag d. 11. juni</td>
										<td>22:00</td>
									</tr>
									<tr>
										<td><a href="https://www.twitch.tv/events/G0lwrcvfTySTry-jkPhl_g">Nintendo</a></td>
										<td>Tirsdag d. 12 juni</td>
										<td>18:00</td>
									</tr>
									<tr>
										<td><a href="https://www.twitch.tv/events/G0lwrcvfTySTry-jkPhl_g">Sony</a></td>
										<td>TBA</td>
										<td>TBA</td>
									</tr>
									
									<tr>
										<td><a href="https://www.twitch.tv/events/G0lwrcvfTySTry-jkPhl_g">PC Gamer Show</a></td>
										<td>TBA</td>
										<td>TBA</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="jumbotron">
						 <div id="twitch-embed"></div>
						 <script src="https://embed.twitch.tv/embed/v1.js"></script>
					    <script type="text/javascript">
							new Twitch.Embed("twitch-embed", {
							width: "100%",
							height: 500,
							theme: "dark",
							channel: "jensz123"
							});
						</script>
					</div>
				</article>
			</div>
<?php require_once 'inc/footer.php';?>
<script>
	var countDownDate = new Date("Jun 9, 2018 19:00:00").getTime();
	var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s "; 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "E3 er i gang";
    }
}, 1000);
</script>
</body>
</html>
