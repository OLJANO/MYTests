<?php

function uploadImage($image) {

$extention = pathinfo($image['name'], 4);

$filename = uniqid().".".$extention;

move_uploaded_file($image['tmp_name'], "./uploads/".$filename);

return $filename;
}

function addPost($title, $content, $fikename) {
$pdo = new PDO("mysql:host=localhost;dbname=examplel", "root", "");

$sql = "INSERT INTO posts (title,content, image) VALUES (:title,:content, " . ":image)";

$statement = $pdo->prepare($sql);

$statement->bindParam(":title", $_POST['title']);

$statement->bindParam(":content", $_POST['content']);

$statement->bindParam(":image", $filename);

$statement->execute();

}

function getPost() {
 $pdo = new PDO("mysql:host=localhost;dbname=examplel", "root", "");
$sql = "SELECT * From posts";
$statement = $pdo->prepare($sql);
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
return $posts;
}
