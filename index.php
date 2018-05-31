<form action="search.php" method="post">
Name: <input type="text" name="prod_search" id="prod_search" placeholder="Enter product name">
<input type="submit">
</form>

<table border="1">
<?php
$xml = simplexml_load_file('books.xml');
//print_r($xml);
foreach($xml->children() as $books) {
	echo '<tr>';
	echo '<td>' . $books['id'] . '</td>';
	echo '<td>' . $books->author . '</td>'; 
    echo '<td>' . $books->title . '</td>';
    echo '<td>' . $books->genre . '</td>'; 
    echo '<td>' . $books->price . '</td>';
    echo '</tr>';
} 

?>