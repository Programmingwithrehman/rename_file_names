<?php
$folderPath = 'pdf_files_folder'; // Change this to your folder path

// Get the list of files in the directory
$files = scandir($folderPath);

// Remove '.' and '..' from the list
$files = array_diff($files, array('.', '..'));

$count = count($files) + 2;
echo  count($files);
echo "<hr>";

echo "<table width='100%' border=1>";
for($i=2; $i<$count; $i++){
	
	
	echo "<tr>";
		echo "<td>" . $i-1 . "</td>";
		echo "<td>Old : " . $files[$i] . "</td>";
		echo "<td>New : " . "2025-67-" . $i-1 . ".pdf" . "</td>";
	echo "</tr>";
}
echo "</table>";
?>
















