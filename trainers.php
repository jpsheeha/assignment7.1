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
<h1>Trainers</h1>
<article id="main1">

<p>This is a list of all the current trainers and the pokemon that they have chosen upon registering.


<?
require("connect.php");


$sql  = 'SELECT * ';
$sql .= 'FROM tblUser';


if ($debug) print "<p>sql ". $sql;

$stmt = $db->prepare($sql);
            
$stmt->execute(); 

$users = $stmt->fetchAll(); 
if($debug){ print "<pre>"; print_r($users); print "</pre>";}









foreach ($users as $user) {
	//foreach($courses as $course){}
    print nl2br("<table border='1'><tr><td>Trainer Name</td><td>Gender</td><td>Pokemon</td></tr><tr><td>" . $user['fldTrainerName'] . "</td><td>" . $user['fldGender'] . "</td><td><img src=" . $user['fldSpecies'] . ".png" . " " . "alt=" . $user['fldSpecies'] . "></td></tr></table>");
}






?>





</article>


<? include ("footer.php"); ?>

</section>
</body>
</html>
