<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>New Work</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
     <!--header start-->
     <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Prince Edwarht <span class="lite">Report</span></a>
      <!--logo end-->
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="./newwork.php" class="">
                         
                          <span>New Work</span>

                      </a>
           
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                         
                          <span>Submit Assignments</span>

                      </a>
           
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          
                          <span>Logout</span>
                         
                      </a>
           
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Basic Table</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
         <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Responsive tables
              </header>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Subject</th>
                      <th>Assignment</th>
                      <th>Assignment Instruction</th>
                      <th>Date Assigned</th>
                      <th>Date Due</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
<?php 

include('../database/dbcon.php');

$query=mysqli_query($con,"SELECT * FROM `subject` WHERE `class`='7' GROUP BY `sub_assigned`");
while($result=mysqli_fetch_assoc($query)){


?>
                    <tr>
                      <td><?php echo $result['sub_id']; ?></td>
                      <td><?php echo $result['subject_name']; ?></td>
                      <td>
                        <?php if($result['sub_assigned']==="Assignment is a word document")
                        {
                                echo $result['ass_doc'];
                        }elseif($result['ass_doc']==="assignment was typed")
                        {
                                echo $result['sub_assigned'];
                        } 
                        ?>
                      </td>
                      <td><?php echo $result['ass_instruction']; ?></td>
                      <td><?php echo $result['date_ass']; ?></td>
                      <td><?php echo $result['date_due']; ?></td>
                      <td>Download</td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>

            </section>
          </div>
        </div>
        
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
  
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
