<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>CodeBuzz | Jimit Dholakia</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="styles/main.css">

        <!-- Favicon -->
        <link rel="icon" href="images/favicon.ico">

    </head>
    <body>



      <div class="wrapper">

          <!-- SIDEBAR Starts -->

          <nav id="sidebar">
              <div class="sidebar-header">
                  <h3><i class="fa fa-podcast"></i>&nbsp;CodeBuzz</h3>
                  <strong><i class="fa fa-podcast"></i></strong>
              </div>

              <ul class="list-unstyled components">

                  <li class="active">
                      <a href="index.html" aria-expanded="false">
                          <i class="fa fa-home"></i>
                          Home
                      </a>
                  </li>

                  <li>
                      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                          <i class="fa fa-clone"></i>
                          Categories
                      </a>
                      <ul class="collapse list-unstyled" id="pageSubmenu">
                          <li><a href="python.html">Python</a></li>
                          <li><a href="machine-learning.html">Machine Learning</a></li>
                          <li><a href="big-data.html">Big Data</a></li>
                      </ul>
                  </li>

                  <li>
                      <a href="contributors.html">
                          <i class="fa fa-users"></i>
                          Contributors
                      </a>
                  </li>

                  <li>
                      <a href="about.html">
                          <i class="fa fa-info-circle"></i>
                          About
                      </a>
                  </li>

                  <li>
                    <a href="chat-box.php">
                        <i class="fa fa-comments"></i>
                        Chat
                    </a>
                  </li>

              </ul>

              <ul class="list-unstyled CTAs">
                <li><a href="#" class="subscribe"><i class="fa fa-envelope"></i>Subscribe us</a></li>
                <li><a href="#" class="article"><i class="fa fa-share"></i>Share an article</a></li>
            </ul>
          </nav>

          <!-- SIDEBAR Ends -->


            <!-- PAGE CONTENT Holder Starts -->

            <div id="content">

                <!-- NAVBAR Starts -->

                <nav class="navbar navbar-expand">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="fa fa-align-justify"></i>
                                <span></span>
                            </button>
                        </div>

                        <div class="pageCategory">
                            RSS Articles
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item"><a href="#" class="nav-link">User</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- NAVBAR Ends -->

                <!-- PAGE CONTENTS Starts -->

                <?php
                $html = "";
                $url = "https://www.kdnuggets.com/feed";
                //https://www.sciencedaily.com/rss/matter_energy/engineering.xml
                $xml = simplexml_load_file($url);
                for($i = 0; $i < 10; $i++){
                    $title = $xml->channel->item[$i]->title;
                    $link = $xml->channel->item[$i]->link;
                    $description = $xml->channel->item[$i]->description;
                    $pubDate = $xml->channel->item[$i]->pubDate;

                    $html .= "<a href='$link'><h3 style='color: blue;'>$title</h3></a>";
                    $html .= "$description <br>";
                    $html .= "<br />$pubDate<hr />";
                }
                echo $html;
                ?>


                <!-- PAGE CONTENTS Ends -->

                <div class="line"></div>


                <!-- FOOTER Starts-->

                <footer>

                    <ul class="nav">

                        <li class="nav-item">
                            <a href="https://github.com/jimit105" target="_blank" class="nav-link"><i class="fa fa-github fa-2x" title="GitHub"></i></a>
                        </li>

                        <li class="nav-item">
                            <a href="https://in.linkedin.com/in/jimit105" target="_blank" class="nav-link"><i class="fa fa-linkedin fa-2x" title="LinkedIn"></i></a>
                        </li>

                        <li class="nav-item">
                            <a href="https://www.facebook.com/jimit105" target="_blank" class="nav-link"><i class="fa fa-facebook fa-2x" title="Facebook"></i></a>
                        </li>

                        <li class="nav-item">
                            <a href="https://plus.google.com/+JimitDholakia" target="_blank" class="nav-link"><i class="fa fa-google-plus fa-2x" title="Google Plus"></i></a>
                        </li>

                        <li class="nav-item">
                            <a href="https://twitter.com/jimit105" target="_blank" class="nav-link"><i class="fa fa-twitter fa-2x" title="Twitter"></i></a>
                        </li>

                        <li class="nav-item">
                            <a href="https://www.instagram.com/jimit105" target="_blank" class="nav-link"><i class="fa fa-instagram fa-2x" title="Instagram"></i></a>
                        </li>

                    </ul>

                </footer>

                <!-- FOOTER Ends -->

            </div>

          <!-- PAGE CONTENT Holder Ends -->

        </div>









        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>