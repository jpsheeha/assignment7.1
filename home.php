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

<p>Welcome to the Pokemon Trainer website. This website is hopefully the start of a bigger one. In the future I want to integrate a battling system, so players can fight eachother and also computers. As it stands, this site lets you register and pick your pokemon. You have to be logged in at all times in order to view the site. All the trainers are listed in the trainers page along with the pokemon they chose. There is also currently nine gym leaders in the gym leader page. The admin interface lets an admin edit the database directly from this website. They can update, delete, and into tables. All of the pages that display information update automatically if new things are inserted, deleted, or updated into the database. </p>





</article>


<? include ("footer.php"); ?>

</section>
</body>
</html>
