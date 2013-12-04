<?
session_start();


if (!isset($_SESSION['user']))
{
header("location:loginHome.php"); 
exit();
}
?>

<? include ("top.php"); ?>

<body id="home">


<? 
include ("header.php");
?>
<?
include ("nav.php");
?>
<section id="mainBody">
<h1>Gym Leaders</h1>
<article id="main1">

<p>Welcome to the Favorite Class website. Originally I was going to have the user upload some photos and have them displayed in some sort of table under the Data section of the site. But I spent around 7 hours trying figure out why uploading photos wasn't working and why I was getting tons of weird errors. In the end it seemed to be some sort of permissions issues and the UVM server did not like how I was going about uploading them. In the end I just decided to have the user enter in a bunch of information about themselves and their two favorite classes. There two favorite classes are displayed on the Data page. The site meets all requirements and it also passes w3c validation. It may not be the prettiest site but at least everything seems to be in working order. Without further ado, please go fill out the form! </p>





</article>

<!-- %%%%%%%%%%%%GYM LEADER IMAGE SOURCES%%%%%%%%%% -->
<!--
http://cdn.bulbagarden.net/upload/1/11/VSBrock.png
http://cdn.bulbagarden.net/upload/2/20/VSMisty.png
http://cdn.bulbagarden.net/upload/4/46/VSLt_Surge.png
http://cdn.bulbagarden.net/upload/5/5a/VSFalkner.png
http://cdn.bulbagarden.net/upload/2/2a/VSBugsy.png
http://cdn.bulbagarden.net/upload/2/27/VSWhitney.png
http://cdn.bulbagarden.net/upload/2/22/VSValerie.png
http://cdn.bulbagarden.net/upload/7/7f/VSOlympia.png
http://cdn.bulbagarden.net/upload/f/f0/VSWulfric.png
-->


<? include ("footer.php"); ?>

</section>
</body>
</html>
