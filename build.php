<?php
include ('conn3.php');



for ($x = 0; $x < 5; $x++) {
    $file = file_get_contents('https://loripsum.net/api/3/short', true);
    $uTime = time();
    $file = mysqli_real_escape_string($link, $file);
    $query = "INSERT INTO `bposts` (`content`, `date`) VALUES ('$file', '$uTime')";
    $result = mysqli_query($link, $query);
    
    #echo $query;
    
    if (!$result) {
        // Handle the error, for example, print the MySQL error message
        die("Error in SQL query: " . mysqli_error($link));
    }

    echo "Query executed successfully: $query\n";

}

#for($x = 0; $x<5; $x++)
#{
#$file = file_get_contents('https://loripsum.net/api/3/short',true);
#echo $file;
#$uTime = time();
#$query = "INSERT INTO `bposts`(`content`,`date`)VALUES($file,$uTime)";
#$result = mysqli_query($link,$query);
#echo $link
#echo $query;
#}


#$file2 = file_get_contents('https://loripsum.net/api/3/short',true);
#echo file2;


// Escape and quote the content value
#$escapedContent = mysqli_real_escape_string($link, $file);

// Use prepared statement to prevent SQL injection
#$query = "INSERT INTO `bposts`(`content`, `date`) VALUES ('$escapedContent', $uTime)";
    
#$result = mysqli_query($link, $query);

// Check for errors and display the query for debugging
#if (!$result) 
    
        #die("Error: " . mysqli_error($link));
    

    #echo $query;



