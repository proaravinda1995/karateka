<?php

$idValidationError = "";
$titleValidationError = "";
$descriptionValidationError ="";
$dateValidationError = "";
$message ="*Fill everything";



  $servername  = "localhost";
  $username = "root";
  $password = "";
  $dbname = "karateka";

  $con = new mysqli($servername,$username,$password,$dbname);


if(isset($_POST['submit'])){


  if(!empty($_POST['id'])){
    $idValidationError = "";
  }

  else{
    $idValidationError = "ID is required";

  }


  if(!empty($_POST['title'])){
    $titleValidationError = "";
  }

  else{
    $titleValidationError = "Title is required";

  }


  if(!empty($_POST['description'])){
    $descriptionValidationError = "";
  }

  else{
    $descriptionValidationError = "Description is required";

  }


  if(!empty($_POST['date'])){
    $dateValidationError = "";
  }

  else{
    $dateValidationError = "Date is required";

  }



  if( ($idValidationError == $titleValidationError)    &&($titleValidationError == $descriptionValidationError)  &&($descriptionValidationError==$dateValidationError) && ($dateValidationError==="")){

     $id= $_POST['id'];
     $title=$_POST['title'];
     $description=$_POST['description'];
     $date=$_POST['date'];
    

    $sql = "INSERT INTO events(id,title,description,start_date,end_date,created,status) values('$id','$title','$description','$date 00:00:00','$date 00:00:00','$date 00:00:00','1')";
    $con->query($sql);



    $message = "Event is publish";


  }


}









?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Karateka Dashboard</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <!--<a class="navbar-brand" href="index.html">--><b>Karateka</b>
                </div>

                
                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="../../index.php"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>
              

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            
                            <li>
                                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Karate News</a>
                            </li>
                            <li>
                                <a href="events.php"><i class="fa fa-table fa-fw"></i> Events</a>
                            </li>
                            <li>
                                <a href="eventscal.php"><i class="fa fa-table fa-fw"></i> Events Calender</a>
                            </li>
                            <li>
                                <a href="articles.php"><i class="fa fa-edit fa-fw"></i> Articles</a>
                            </li>
                            
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Events Calender</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    create event on calender
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            
                        <?php echo "$message"; ?>
                            <form  method = post enctype="multipart/form-data" >
                                <div class="form-group">
                                    <label>Event ID</label>
                                    <input type = "text" name = "id" class="form-control" placeholder="Enter event Id">
                                    <span class = "error_all"> <?php echo "$idValidationError"; ?></span>
                                    <!--<p class="help-block">Example block-level help text here.</p>-->
                                </div>

                                <div class="form-group">
                                    <label>Tilte</label>
                                    <input type = "text" name ="title" class="form-control" placeholder="Enter title here">
                                    <span class = "error_all"> <?php echo "$dateValidationError"; ?></span>
                                </div>

                                <div class="form-group">
                                    <label>Short description</label>
                                    <input type = "text" name ="description" class="form-control" placeholder="Enter short description">
                                    <span class = "error_all"> <?php echo "$descriptionValidationError"; ?></span>
                                </div>
                            
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type = "text" name ="date" class="form-control" placeholder="Enter date here *use this format(year-month-date)">
                                    <span class = "error_all"> <?php echo "$dateValidationError"; ?></span>
                                </div>
                                
                                <input type = "submit" value = "Publish event" name = "submit">
                                <button type="reset" class="btn btn-default">Clear All</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
