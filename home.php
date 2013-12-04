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
<h1>Home</h1>
<article id="main1">

<p>Welcome to the Favorite Class website. Originally I was going to have the user upload some photos and have them displayed in some sort of table under the Data section of the site. But I spent around 7 hours trying figure out why uploading photos wasn't working and why I was getting tons of weird errors. In the end it seemed to be some sort of permissions issues and the UVM server did not like how I was going about uploading them. In the end I just decided to have the user enter in a bunch of information about themselves and their two favorite classes. There two favorite classes are displayed on the Data page. The site meets all requirements and it also passes w3c validation. It may not be the prettiest site but at least everything seems to be in working order. Without further ado, please go fill out the form! </p>





</article>


<? include ("footer.php"); ?>

</section>
</body>
</html>
