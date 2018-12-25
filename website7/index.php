<?php
    $path = '/dir0/dir1/myfile.php';
    $file = 'file1.txt';  

    /*
    // Return filename
    echo basename($path);

    // Return filename without extension
    echo basename($path, '.php');

    // Return the directory name from the path
    echo dirname($path);

    // Check if file exists
    echo file_exists($file);     // Also works with directories

    // Get absolute path
    // echo realpath($file);

    // Checks to see if file 
    echo is_file('test');       // Only works with files

    // Check if writeable
    echo is_writable($file);

    // Check if readable
    echo is_readable($file);

    // Get the file size
    echo filesize($file);

    // Create a directory
    mkdir('testing');

    // Remove directory if empty
    rmdir('testing');

    // Copy file
    echo copy('file1.txt', 'file2.txt');

    // Rename a file
    rename('file2.txt', 'myfile.txt');

    // Delete a file
    unlink('myfile.txt');

    // Write from file to string
    echo file_get_contents($file);
    
    // Write string to file
    echo file_put_contents($file, 'Goodbye World');
 
    $current = file_get_contents($file);

    $current .= ' Goodbye World';

    file_put_contents($file, $current);

    // Open File for reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data;
    fclose($handle);
    */
    // Open file for writing
    $handle = fopen('file2.txt', 'w');      // Creates an file and writes to it
    $text = "John Doe\n";
    fwrite($handle, $text);
    $text = "Steve Smith\n";
    fwrite($handle, $text);
    fclose($handle);


?>