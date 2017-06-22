<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet"> 
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
    <script type="text/javascript">
        var productsAppModule = angular.module('productsApp', []);
        productsAppModule.factory('productsFactory', function(){
            var products = [];
            var factory = {};
            
            factory.getProducts = function(callback){
                callback(products);
                //console.log('in factory');
                //console.log(products);
            }
            factory.createProduct = function(product){
                products.push(product);
            }
            factory.removeProduct = function($index){
                products.splice($index, 1);
            }
            factory.purchaseProduct = function(product){
                for(item in products){
                    if(products[item].name == product.name){
                        products[item].quantity -= 1;
                    };
                };
            };
            return factory;
        });
        productsAppModule.controller('productsController', function($scope, productsFactory){
            $scope.products = [];
            productsFactory.getProducts(function(data){
                $scope.products = data
                //console.log('in controller');
                //console.log(data);
            });
                //make sure that you are using the same syntax consistently!
                //controller syntax and $scope syntax do not mix!
            $scope.addProduct = function(data){
                //console.log($scope.newProduct);
                productsFactory.createProduct($scope.newProduct);
                $scope.newProduct = {};
            };
            $scope.deleteProduct = function(data){
                productsFactory.removeProduct($scope.deleteProduct);
            };
        });
        productsAppModule.controller('ordersController', function($scope, productsFactory){
            $scope.products = [];
            productsFactory.getProducts(function(data){
                $scope.products = data;
            });
            $scope.buyProduct = function(product){
                productsFactory.purchaseProduct(product);
            };
        });
    </script>

</head>
<body>
    <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo"><span>Administrator</span></a>
            <!--logo end-->


            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form" action="form_component.php?action=search" method="post">
                            <input class="form-control" name="txtsearch" type="text">
                            <input class="btn btn-default" type="submit" value="Search" name="but_search" />
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="">
                            </span>
                            <span class="username">CHIM Serey</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="login.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Product</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.php">Add New Product</a></li>
                          <li><a class="" href="form_validation.php">Special Offer</a></li>
                      </ul>
                  </li>                   
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
              <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Dashboard</li>                          
                    </ol>
                </div>
            </div>       
            
      </section>
      <!--main content end-->
  </section>
    <div class="container">

        <div>
            <h2>Add a Product:</h2>
            <form class="form-horizontal" role="form" enctype="multipart/form-data"  Action="process_upload.php" method="post">
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="text" name="name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="price">Price:</label>
                <div class="col-sm-10">
                  <input type="number" name="price">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="price">Quantity:</label>
                <div class="col-sm-10">
                  <input type="number" name="quantity">
                </div>
              </div>

              <input type="hidden" ng-model="newProduct.quantity" ng-value="newProduct.quantity = newProduct.quantity">
              <div class="form-group">
                <label class="control-label col-sm-2" for="price">Description:</label>
                <div class="col-sm-10">
                  <textarea name="description" cols="22" rows="3"></textarea>
                </div>
            </div>

              

            <div class="form-group">
                <label class="control-label col-sm-2" for="price">Category:</label>
                <div class="col-sm-10">
                    <select name="category" style="width: 180px; height: 25px">
                    <optgroup label="Baby">
                        <optgroup label="Bath & Care">
                            <option value="baby_wipes">Baby Wipes</option>
                            <option value="baby_soaps">Baby Soaps</option>
                            <option value="Lotion_and_oils">Lotion and Oils</option>
                            <option value="powder">Powder</option>
                            <option value="shampoos">Shampoos</option>
                        </optgroup>
                        <optgroup label="Baby Clothes">
                            <option value="frocks">Frocks</option>
                            <option value="socks&tights">Shocks & Tights</option>
                            <option value="sweaters&caps">Sweaters & Caps</option>
                            <option value="nightwear">Night Wear</option>
                            <option value="blankets">Blankets</option>
                        </optgroup>
                        <optgroup label="Baby Gear">
                            <option value="babywalker">Baby Walkers</option>
                            <option value="stroller">Stroller</option>
                            <option value="pram&toy">Pram & Toy</option>
                            <option value="cribs&cradle">Cribs & Cradle</option>
                            <option value="booster&seat">Booster & Seat</option>
                        </optgroup>
                    </optgroup>
                    <optgroup label="Kids">
                        <optgroup label="New Arrival">
                            <option value="topwear">Topwear</option>
                            <option value="bottomwear">Bottomwear</option>
                            <option value="innerwear">Innerwear</option>
                            <option value="nightwear">NightWear</option>
                            <option value="swimwear">Swimwear</option>
                        </optgroup>
                        <optgroup label="Boys">
                            <option value="jeans">Jeans</option>
                            <option value="shirt">Shirt</option>
                            <option value="t-shirt">T-Shirt</option>
                            <option value="winterwear">Winter Wear</option>
                            <option value="partywear">Party Wear</option>
                        </optgroup>
                        <optgroup label="Girls">
                            <option value="tops">Tops</option>
                            <option value="leggings">Leggings</option>
                            <option value="dresses">Dresses</option>
                            <option value="skirts">Skirts</option>
                            <option value="casualdress">Casual Dress</option>
                        </optgroup>
                    </optgroup>
                    <optgroup label="Assessories">
                        <option value="jewellery">Jewellery</option>
                        <option value="hairbrand&clips">Hair Brand and Clips</option>
                        <option value="bangles">Bangles</option>
                        <option value="caps&belts">Caps & Belts</option>
                        <option value="bags">Bags</option>
                    </optgroup>
                    <optgroup label="Toys">
                        <optgroup label="Baby">
                            <option value="rocker">Rockers</option>
                            <option value="ratlle">Rattles</option>
                            <option value="strollertoy">Stroller Toy</option>
                            <option value="dollhouses">Doll Houses</option>
                            <option value="playset">Play Set</option>
                        </optgroup>
                        <optgroup label="Pretend Play">
                            <option value="videogame">Video Game</option>
                            <option value="kitchenset">Kitchen Set</option>
                            <option value="sandtoy">Sand Toy</option>
                            <option value="toolset">Tool Set</option>
                            <option value="bathtoy">Bath Toy</option>
                        </optgroup>
                        <optgroup label="Outdoor">
                            <option value="swimming">Swimming</option>
                            <option value="rideons">Rideons</option>
                            <option value="scooters">Scooters</option>
                            <option value="remotecontrol">Remote Control</option>
                            <option value="animals">Animals</option>
                        </optgroup>
                    </optgroup>
                </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="price">ArriveDate:</label>
                <div class="col-sm-10">
                
                  <input type="date" name="arrivedate" style="width: 180px; height: 25px">

                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="price">Image:</label>
                <div class="col-sm-10">
                  <input type="file" name="image" >
                </div>
            </div>
            

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" name="addProduct" class="btn btn-success">Add Product</button>
                </div>
              </div>
            </form>
            <br>

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>ArriveDate</th>
                    <th>Image</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php            
                    require_once('../controller/dbconfig.php');
                    $condition= "";

                    if(isset($_GET['action']) && $_GET['action']=="search"){
                        $searchtxt=$_POST['txtsearch'];
                        $condition= "where pname like '%$searchtxt%'";
                    }

                    $sql = "SELECT * FROM products $condition";
                    $record = $conn->query($sql);
                    while ($products=mysqli_fetch_assoc($record)) {                

                    echo "<tr>";
                         echo "<td>".$products['pid']."</td>";
                         echo "<td>".$products['pname']."</td>";
                         echo "<td>".$products['price']."</td>";
                         echo "<td>".$products['quantity']."</td>";
                         echo "<td>".$products['description']."</td>";
                         echo "<td>".$products['category']."</td>";
                         echo "<td>".$products['arrived_date']."</td>";
                         echo "<td>".$products['image1']."</td>";
                         echo "<td><a href='edit.php?id=$products[pid]&name=$products[pname]&price=$products[price]&quantity=$products[quantity]&description=$products[description]&category=$products[category]&arrivedate=$products[arrived_date]&image1=$products[image1]'>Edit</a>
                                <a href='deleteproduct.php?id=".$products['pid']."'>Delete</a>
                         </td>";                        
                    echo "</tr>";
                    }
                ?>
                </tbody>
             </table>
        </div>

</div>

</body>

</html>
