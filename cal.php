<?php
        $conn = mysqli_init();
            mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070244', 'BIWfyw86', 'it63070244_phat', 3306);
            if (mysqli_connect_errno($conn))
            {
                die('Failed to connect to MySQL: '.mysqli_connect_error());
            }


        $A = $_GET['A'];
        $B = $_GET['B'];
        $C = $_GET['C'];
        $D = $C*$B;
        $sql = "INSERT INTO finalabs (A , B , C , D) VALUES ('$A' , '$B', '$C' , '$D')";
   
        if (mysqli_query($conn, $sql)) {
    header("location:show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
        
  
        mysqli_close($conn);
        
?>
