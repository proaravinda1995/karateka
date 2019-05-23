
  <?php
        $servername  = "localhost";
        $username = "root";
        $password = "";
        $dbname = "karateka";

    $con = new mysqli($servername,$username,$password,$dbname);

    // Getting uploaded file
    $file = $_FILES["file"];
    $filename=$_POST['name1'];
    $date=$_POST['date'];
    $fnm = $_FILES["file"]["name"];
    $dst = "./uploads/".$fnm;

    // Uploading in "uplaods" folder
    move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);

    $query = "INSERT INTO demo(filename,date,name,path) values('$filename','$date','$fnm','$dst')";
    $con->query($query);
    // Redirecting back
    echo "<script type='text/javascript'> document.location = 'reg.php'; </script>";
    
?>   