<!DOCTYPE html>
<html lang="en"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="S.M. Shahed Ruhi">
    <link rel="icon" href="image/link_Logo.jpg">


    <title>GORZON SOLUTIONS PVT. LTD</title>

    <!-- Bootstrap core CSS -->
    <link href="common_features/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="common_features/css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="common_features/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="common_features/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="header">

    <?php include 'common_features/header.php' ?>

</div>

<div class="container">
    
    <div id="banner">

        <?php include 'common_features/banner_setter.php' ?>

    </div>
    
    <br>
    <br>
    <br>

    <!--panel-->
    <div class="panel panel-primary">
        <!-- Default panel contents -->
        <div class="panel-heading"><h4>LIST OF COURSES</h4></div>
        <div class="panel-body">
            <?php

            mysql_connect('localhost','c9shahedruhi','tintin08');

            mysql_select_db('c9shahedruhi1');

            $qury = mysql_query("SELECT *
                    from courses
                    Order by id");

            echo "<table class='table table-condensed'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>COURSE TITLE</th>";
            echo "<th>COURSE CODE</th>";
            echo "</tr>";
            echo "</thead>";
            while ($data = mysql_fetch_object($qury)) {
                echo "<tr>";
                echo "<td>".$data->id."</td>";
                echo "<td>".$data->title."</td>";
                echo "<td>".$data->code."</td>";
                echo "</tr>";
            }
            echo "</table>";



            ?>



        </div>
    </div>
    <!--end of panel-->


</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="common_features/js/jquery.js"></script>
<script src="common_features/js/bootstrap.js"></script>

<br>
<br>
<br>

<div class="footer">

    <?php include 'common_features/footer.php' ?>

</div>

</body>
</html>
