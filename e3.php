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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="manifest" href="/manifest.json">
<link rel="image_src" href="/https://www.gravatar.com/avatar/5ce60652703ef30780a3cbb1c0eb0317?s=2000">
<link href='https://fonts.googleapis.com/css?family=Roboto:100,300' rel='stylesheet' type='text/css'>
<link href="https://design.jensz12.com/css/style.css" rel="stylesheet">
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
										<td><a href="">EA</a></td>
										<td>TBA</td>
										<td>TBA</td>
									</tr>
									<tr>
										<td><a href="">Microsoft</a></td>
										<td>TBA</td>
										<td>TBA</td>
									</tr>
									<tr>
										<td><a href="">Bethesda</a></td>
										<td>TBA</td>
										<td>TBA</td>
									</tr>
									<tr>
										<td><a href="">Square Enix</a></td>
										<td>TBA</td>
										<td>TBA</td>
									</tr>
									<tr>
										<td><a href="">Ubisoft</a></td>
										<td>TBA</td>
										<td>TBA</td>
									</tr>
									<tr>
										<td><a href="">PC Gamer Show</a></td>
										<td>TBA</td>
										<td>TBA</td>
									</tr>
									<tr>
										<td><a href="">Sony</a></td>
										<td>TBA</td>
										<td>TBA</td>
									</tr>
									<tr>
										<td><a href="">Nintendo</a></td>
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
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"crossorigin="anonymous"></script>
<script>
	var countDownDate = new Date("Jun 11, 2019 19:00:00").getTime();
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
