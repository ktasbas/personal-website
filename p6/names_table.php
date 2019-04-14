<?php
require_once './php/db_connect.php';

// Create table that will hold names
// 	Name, Sex, Count
$createStmt = 'CREATE TABLE names (' . PHP_EOL
            . '  name varchar(50) NOT NULL,' . PHP_EOL
			. '  sex char(1),' . PHP_EOL
			. '  count int,' . PHP_EOL
            . '  PRIMARY KEY (name, sex)' . PHP_EOL
			. ') ENGINE=MyISAM DEFAULT CHARSET=latin1;';

if(!$db->query($createStmt)) {
	echo 'Table creation failed: (' . $db->errno . ') ' . $db->error . PHP_EOL;
	exit(); // Prevents the rest of the file from running
}

// Open yob2016.txt
$file = fopen('./yob2016.txt', 'r');

// Insert into table until file done
while($data = fgetcsv($file, $lineLength = 0, $delimiter = ','))
{
	$insertStmt = 'INSERT INTO names (name, sex, count)' . PHP_EOL
			. '  VALUES (\''.$data[0].'\', \''.$data[1].'\', \''.$data[2].'\');';

	if(!$db->query($insertStmt)) {
		echo 'Table insertion failed: (' . $db->errno . ') ' . $db->error . PHP_EOL;
		echo '<br>' . $insertStmt . '<br>';
		exit(); // Prevents the rest of the file from running
	}
}

// Display table
$getStmt = 'SELECT * FROM names;';
$result = $db->query($getStmt);
echo 	' <table>
		<tr>
		<th>Name</th>
		<th>Sex</th>
		<th>Count</th>
		</tr>';

while($row = mysqli_fetch_array($result))
{
	echo	'<tr>
			<td>' .$row['name'].  '</td>
			<td>' .$row['sex'].   '</td>
			<td>' .$row['count']. '</td>
			</tr>';
}

echo '</table';

$db->close();
?>