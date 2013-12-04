<nav>
	<ol>
<?php
if(basename($_SERVER['PHP_SELF'])=="http://www.uvm.edu/~jpsheeha/cs148/assignment7.1/home.php"){
	print '<li class="activePage">Home</li>';
} else {
	print '<li><a href="http://www.uvm.edu/~jpsheeha/cs148/assignment7.1/home.php">Home</a></li>';
}
if(basename($_SERVER['PHP_SELF'])=="http://www.uvm.edu/~jpsheeha/cs148/assignment7.1/trainers.php"){
	print '<li class="activePage">Trainers</li>';
} else {
	print '<li><a href="http://www.uvm.edu/~jpsheeha/cs148/assignment7.1/trainers.php">Trainers</a></li>';
}
if(basename($_SERVER['PHP_SELF'])=="http://www.uvm.edu/~jpsheeha/cs148/assignment7.1/gymLeaders.php"){
	print '<li class="activePage">Gym Leaders</li>';
} else {
	print '<li><a href="http://www.uvm.edu/~jpsheeha/cs148/assignment7.1/gymLeaders.php">Gym Leaders</a></li>';
}

if(basename($_SERVER['PHP_SELF'])=="https://www.uvm.edu/~jpsheeha/cs148/assignment7.1/adminGUI/adminEdit.php"){
	print '<li class="activePage">Admin Interface</li>';
} else {
	print '<li><a href="https://www.uvm.edu/~jpsheeha/cs148/assignment7.1/adminGUI/adminEdit.php">Admin Interface</a></li>';
}


?>

	</ol>
</nav>
