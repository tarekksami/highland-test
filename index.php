<?php
session_start();
if (!isset($_SESSION['user_id'])){
header('Location: login.php');
}

include 'include/header.php';
include 'include/db_connect.php';
include 'ListService.php';

$listService = new ListService($connection, $_SESSION['user_id']);

if (isset($_POST['submit'])){
	
	$item = $_POST['item'];
	$content = $_POST['content'];
	// echo $item;
	$listService->addToList($item, $content);
	//echo "<script>$scope.postdata.arr.push({title: $scope.pendingTitle, content: $scope.pendingContent}</script>";
}

if (isset($_GET['item_id'])){
	$id = $_GET['item_id'];
	$listService->removeFromList($id);
}

//$test = var_dump($_POST);
//echo $test;

$list = $listService->getList();

?>
<body>

<div id = "wrapper">
	<div id = "header">
		<h1>Tarek's Shopping List Tool</h1>
		<div id = 'actions'>
		<a href ="createPDF.php">Save PDF</a>
		<br/>
		<a href ="logout.php">Log Out</a>
		</div>
		<br/>
	</div>
<br/>
	<div id = 'content'>
<!--	<ul>		<div ng-repeat = 'post in postdata.arr'><li>
		    <h3> {{ post.title }} </h3>
			<p>{{ post.content }}</p>
		</li></div>
</ul>
-->
<ul>
<?php 
	while($item = $list->fetch_assoc()){
		echo '<li>';
		echo '<h2>' . $item['name'] . '</h2>';
		echo "<a href = 'index.php?item_id={$item['id']}' class = 'del' id = {$item['id']}>[X]</a><br/>";
		echo $item['content'];
		echo '</li>';
		echo "<br/>";
	}
	?>
			<br/>
        <form action = 'index.php' method = 'POST'>
		<input type='text' name='item'/>
		<br/>
		<textarea name='content'></textarea>
		<br/>
		<input type='submit' name='submit'/>
		</form>
	</div>
<div id = "footer">
		All code is the original work of Tarek Sami
</div>

</div>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
    <script src="javascript/controller.js"></script>
</div>
</body>
