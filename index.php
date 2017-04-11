<?php

$dsn = 'mysql:host=127.0.0.1;dbname=rickrossfanpage';
$username = 'Toxyc';
$password = 'Beowulf123';
$pdo = new PDO($dsn, $username, $password);

$query = "SELECT * FROM comments";

$statement = $pdo->prepare($query);

$ok = $statement->execute();

$results = $statement->fetchAll(PDO::FETCH_ASSOC);

function addComment($pdo, $name, $comment, $email) {    
    $query = 'INSERT INTO comments (name, comment, email) VALUES (:name, :comment, :email)';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':name', $name, PDO::PARAM_STR);
    $statement->bindValue(':comment', $comment, PDO::PARAM_STR);
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $ok = $statement->execute();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    addComment($pdo, $_POST['name'], $_POST['comment'], $_POST['email']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Rick Ross</title>
</head>
<body>
	
    <header class="header">
        <img class="header__logo" src="img/logo.png" id="pause">
        <h1 class="header__title title">Rick Ross</h1>
        <h2 class="header__sub-title title">fanpage</h2>
    </header>
	
	<div class="hero">
		<h1 class="hero__title title">William Leonard Roberts II</h1>
	</div>
	
	<section class="row nicknames">
		<h1 class="nicknames__title title">Nicknames</h1>
		<ul class="nicknames__list text">
			<li class="nicknames__item">Rick Ross</li>
			<li class="nicknames__item">Teflon Don</li>
			<li class="nicknames__item">Ricky Rozay</li>
			<li class="nicknames__item">Da Boss</li>
		</ul>
	</section>
	
	<section class="row bio">
		<a class="bio__link trigger title" id="bioTrigger" href="#">
			<h1 class="bio__title">Biography</h1>
		</a>
		<div class="bio__body toggle" id="bio">
			<h2 class="bio__subTitle title">Synopsis</h2>
			<p class="bio__text text">
				Born on January 28, 1976, in Coahoma County,
				Mississippi, Rick Ross was influenced by rappers such
				as Tupac Shakur and Notorious B.I.G. He blasted onto
				the music scene when his debut single, "Hustlin',"
				became something of a street anthem. The popularity
				of the song powered his 2006 debut album Port of
				Miami, which opened at No. 1 on Billboard's Top Albums
				Chart. Ross went on to release three more albums at
				the top of the charts, during a career peppered with
				controversy and issues with the law
			</p>
			<h2 class="bio__subTitle title">Early Life</h2>
			<p class="bio__text text">
				Rapper Rick Ross was born William Leonard Roberts II
				in Coahoma County, Mississippi, on January 28, 1976.
				Raised in Carol City, Florida—an impoverished area of
				north of Miami—Ross always gravitated to the music of
				street-oriented rappers like Notorious B.I.G., Luther
				Campbell, Ice Cube and Tupac Shakur. Although he
				attended Georgia's Albany State University on a
				football scholarship for a year, Ross started writing
				rap lyrics romanticizing the money gained from dealing
				drugs, an act that he saw as a child.
			</p>
			<p class="bio__text text">
				He lifted his performing name, Rick Ross, from hearing
				stories of a drug trafficker named "Freeway" Rick
				Ross. Ironically, Ross worked as a corrections officer
				in Florida for almost two years, but the lure of hip-hop
				music and the lavish lifestyle of the drug dealers he
				saw throughout his youth led him in another direction.
				He was eventually signed to a southern independent rap
				label, Suave House Records, which also released music
				by popular underground rap duo 8Ball &amp; MJG. Ross
				later signed a contract with Miami-based record label
				Slip-N-Slide, which released music by hip-hop favorites
				like Trick Daddy—whom Ross would later tour with
				—and female rapper Trina.
			</p>
			<h2 class="bio__subTitle title">Rap Career</h2>
			<p class="bio__text text">
				The first single from Ross, "Hustlin'," became a smash
				hit, due to the hypnotic line "Every day I'm hustling"
				repeated throughout the song. The single was
				eventually certified gold, an impressive feat for a
				brand new recording artist. The song sparked a bidding
				war between multiple rap labels looking for their next
				superstar. Def Jam Records, headed by executive 
				Jay-Z, won the battle, signing Ross to a highly
				publicized record deal.
			</p>
			<p class="bio__text text">
				Ross debuted at No. 1 on the Billboard Top Albums
				Chart with his premiere album, Port of Miami, in 2006.
				His sophomore album, Trilla (2008)—named as a tribute
				to his idol Michael Jackson’s popular album Thriller
				(1982)—also debuted at No. 1. With his success, Ross
				became more of a presence on the tour circuit and in
				the press. He began to write, perform and collaborate
				with a wide range of popular acts including Jay-Z, R.
				Kelly, Flo-Rida, Lil Wayne, Young Jeezy and several
				others.
			</p>
			<h2 class="bio__subTitle title">Questionable Background</h2>
			<p class="bio__text text">
				As Ross grew in popularity and notoriety from his music
				laced with lyrics promoting illegal activities, his past
				career in law enforcement began to gain the public's
				attention as well. The constant tales of drug dealing
				and hustling chronicled in his music were challenged in
				2008 when a website known as The Smoking Gun
				exposed Ross for having previously worked as a
				corrections officer in South Florida. Although his
				street credibility was questioned, Ross continued to
				tour and release music. He created his own record
				label, Maybach Music Group (distributed by Def Jam)
				and was later signed as the first artist to Sean "P.
				Diddy" Combs Ciroc Entertainment management
				company.
			</p>
			<h2 class="bio__subTitle title">Personal Life</h2>
			<p class="bio__text text">
				Having grown up in Miami, Ross is said to be heavily
				influenced by the '80s television show Miami Vice
				(1984-89). Two of his trademarks are the large, dark
				sunglasses and his slow, raspy voice, which marked his
				distinctive rapping style. Known for being overweight,
				Ross had a health scare in 2011 when news surfaced
				that he suffered from a seizure during an airline flight
				to Memphis.
			</p>
		</div>
	</section>
	
	<section class="row music-change">
	
		<a href="#" class="column column--whole music-change__trigger trigger title" id="musicTrigger">
			<h1 class="music-change__title">
				Music
			</h1>
		</a>
	
		<div class="toggle" id="musicDiv">
		
		
		<div class="column column--one-third music-change__wrap" id="devil">
			<figure class="music-change__img-wrap">
				<img class="music-change__img" src="img/thedevil.jpg">
				<figcaption class="music-change__info title">
					PLAY
				</figcaption>
			</figure>
		</div>
		
		<div class="column column--one-third music-change__wrap" id="iThink">
			<figure class="music-change__img-wrap">
				<img class="music-change__img" src="img/rick-ross-i-think-she-like-me.jpg">
				<figcaption class="music-change__info title">
					PLAY
				</figcaption>
			</figure>
		</div>
		
		<div class="column column--one-third column--omega music-change__wrap" id="hustlin">
			<figure class="music-change__img-wrap">
				<img class="music-change__img" src="img/hustlin.jpg">
				<figcaption class="music-change__info title">
					PLAY
				</figcaption>
			</figure>
		</div>
		
		<div class="column column--one-third music-change__wrap" id="trap">
			<figure class="music-change__img-wrap">
				<img class="music-change__img" src="img/traptraptrap.jpg">
				<figcaption class="music-change__info title">
					PLAY
				</figcaption>
			</figure>
		</div>
		
		<div class="column column--one-third music-change__wrap" id="block">
			<figure class="music-change__img-wrap">
				<img class="music-change__img" src="img/Rick-Ross_Buy-the-block-back.jpeg">
				<figcaption class="music-change__info title">
					PLAY
				</figcaption>
			</figure>
		</div>
		
		<div class="column column--one-third music-change__wrap" id="hold">
			<figure class="music-change__img-wrap">
				<img class="music-change__img" src="img/holdmeback.jpg">
				<figcaption class="music-change__info title">
					PLAY
				</figcaption>
			</figure>
		</div>
		
		</div>
	</section>
	
	<section class="row comment">
           <h1 class="title">Comments</h1>
       <?php
        
            foreach ($results as $row) {
                echo "<i>Posted by: ".$row['name']. "</i><br>";
                echo "<b>".$row['comment']."</b>";
                echo "<br>";
            } 
        
        ?>
           <h3 class="title">Leave a comment</h3>
            <form class="comment__form" method="post" action="index.php">
               <label>Email</label>
                <input type="email" name="email" placeholder="example@123.com"><br>               
                <label>Name</label>
                <input type="text" name="name" placeholder="Jane Doe"><br><br>
                <textarea style="width:220px; height:200px;" width="250px" height="300px" name="comment" maxlength="500"></textarea><br><br>
                <input type="submit" class="submit-button" value="Send Nudes"><br>
            </form>
	</section>
	
	<footer class="footer">
	    <nav class="footer__navigation">
	        <ul class="footer__navigation-list">
            <h3 class="footer__navigation-header">Contact</h3>
	            <li class="footer__navigation-item">M: <a class="footer__navigation-link" href="mailto:rhmdekort@noorderpoort.nl">rick@ross.com</a></li>
	            <li class="footer__navigation-item">T: <a class="footer__navigation-link" href="tel:+31624248321">+31 6 2424 8321</a></li>
	        </ul>
	    </nav>
	    <br>
	    <br>
	    <br>
	    <br>
	    <br>
        <span class="footer__copyright-text">Made by &copy; <span style="color:firebrick;">Sven Wiersema</span> and <span style="color:firebrick;">Thijs de Jonge</span></span>
	</footer>
	
	<audio class="music" id="music" loop>
	<script type="text/javascript" src="script/toggle.js"></script>
</body>
</html>