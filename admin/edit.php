
<?php
    $Id=$_GET["id"];
    $Pname=$_GET["name"];
    $Price=$_GET["price"];
    $Quantity = $_GET['quantity'];
    $Category = $_GET['category'];
    $Description = $_GET['description'];
    $Arrivedate = $_GET['arrivedate']; 
    $Image = $_GET['image1'];
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="container">

        <div>
            <h2>Add a Product:</h2>
            <form class="form-horizontal" role="form" enctype="multipart/form-data"  Action="editproduct.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="number" name="id" value="<?php echo $Id; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                  <input type="text" name="name" value="<?php echo $Pname; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="price">Price:</label>
                <div class="col-sm-10">
                  <input type="number" name="price" value="<?php echo $Price; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="price">Quantity:</label>
                <div class="col-sm-10">
                  <input type="number" name="quantity" value="<?php echo $Quantity; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="price">Description:</label>
                <div class="col-sm-10">
                  <textarea name="description" cols="22" rows="3" value="<?php echo $Description; ?>"></textarea>
                </div>
            </div>

              

            <div class="form-group">
                <label class="control-label col-sm-2" for="price">Category:</label>
                <div class="col-sm-10">
                    <select name="category" value="<?php echo $Category; ?>" style="width: 180px; height: 25px">
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
                
                  <input type="date" name="arrivedate" value="<?php echo $Arrivedate; ?>" style="width: 180px; height: 25px">

                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="price">Image:</label>
                <div class="col-sm-10">
                  <input type="file" name="image" value="<?php echo $Image; ?>">
                </div>
            </div>
            

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" name="updateProduct" class="btn btn-success">Update Product</button>
                </div>
              </div>
            </form>
        </div>
        </div>
        </body>
        </html>
