<?php
$folderPath = 'pdf_files_folder'; // Change this to your folder path

// Get the list of files in the directory
$files = scandir($folderPath);

// Remove '.' and '..' from the list
$files = array_diff($files, array('.', '..'));

$count = count($files) + 2;
//echo  count($files);
$digit = 0;
// Use a for loop to rename files
for($i=2; $i<$count; $i++){
    $file = $files[$i]; // Get the current file name
	
	$oldFilePath = $folderPath . '/' . $file;
	//$countr = $i - 1;
    $newFileName = '2013-65-' . $i-1+$digit . '.pdf'; // Change 'new_prefix_' as needed
	//echo $newFileName . "<br>";
    $newFilePath = $folderPath . '/' . $newFileName;

    // Rename the file
    if (rename($oldFilePath, $newFilePath)) {
        echo "Renamed '$file' to '$newFileName' Nos '$files[$i]'<br>";
    } else {
        echo "Failed to rename '$file' Nos '$files[$i]'<br>";
    } 
}

?>