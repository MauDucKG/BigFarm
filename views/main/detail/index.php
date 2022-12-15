<?php
  include_once('views/main/navbar.php');
  $id = $_GET['id'];
?>
<div class="container py-2 ">
    <?php         
        foreach ($products as $product) {
            if ($id == $product->id && $product->sale != 0){
                ?>
                <div class="row" style="height: 100px">
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-4 col-xl-4">
                        <div class="row mt-2"> 
                            <div class="card h-100">
                            <div class="badge bg-warning text-dark position-absolute" style="top: 0.5rem; right: 0.5rem">SALE <?php echo $product->sale;?> %</div>
                            <img src="<?php echo $product->img;?>" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <img src="<?php echo $product->img;?>" class="img-thumbnail mt-2" alt="">
                            </div>
                            <div class="col">
                            <img src="<?php echo $product->img;?>" class="img-thumbnail mt-2" alt="">
                            </div>
                            <div class="col">
                            <img src="<?php echo $product->img;?>" class="img-thumbnail mt-2" alt="">
                            </div>
                            <div class="col">
                            <img src="<?php echo $product->img;?>" class="img-thumbnail mt-2" alt="">
                            </div>
                        </div>
                    </div>
        
                    
                    <div class="col-md-12 col-lg-8 col-xl-8 mt-4">
                        <div class="text-center">
                            <h5 class="fw-bolder"><?php echo $product->name; ?></h5>
                            
                            <span class="red"><?php echo  number_format($product->price*(100-$product->sale)/100, 0, '', '.');?> VNĐ</span></span> <span class="money-unit"></span> 
                            <span class="text-muted text-decoration-line-through"><?php echo number_format($product->price, 0, ',', '.');?>VNĐ</span>
                        </div>
                        
                        <div class="text-left">  
                            <ul>
                            <li class="mt-2 fw-bold">Tình trạng: <span class="text-danger fw-bold">Còn hàng</span></li>
                            <li class="mt-2 fw-bold">Ưu đãi:</li>
                            <ul>
                                <li class="mt-2 text-primary fw-bold ">MIỄN PHÍ VẬN CHUYỂN VỚI ĐƠN HÀNG TỪ 500.000Đ</li>
                                <li class="mt-2 text-warning fw-bold">ĐỔI TRẢ MIỄN PHÍ TRONG VÒNG 7 NGÀY</li>
                                <li class="mt-2 text-info fw-bold">CAM KẾT 100% CHÍNH HÃNG</li>
                            </ul>
                            <li class="mt-2 fw-bold">Mô tả:</li>
                            <ul>
                                <li class="mt-2"><?php echo $product->description; ?></li>
                                <li class="mt-2"><?php echo str_replace(array("\r\n","\n\n","\n\r","\r\r", "\n", "\r"),'<br><br>',$product->content); ?></li>           
                            </ul>
                            </ul>        
                        </div>
                        <div class="mt-2 text-center mb-2 ">
                            <button class="btn btn-outline-danger" type="button">Mua ngay</button>
                        </div>
                    </div>
            <?php
            }
            else if ($id == $product->id && $product->sale == 0){
            ?>

            <div class="row" style="height: 100px">
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-4">
                    <div class="row mt-2"> 
                        <div class="card h-100">
                        <img src="<?php echo $product->img ?>" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <img src="<?php echo $product->img ?>" class="img-thumbnail mt-2" alt="">
                        </div>
                        <div class="col">
                        <img src="<?php echo $product->img ?>" class="img-thumbnail mt-2" alt="">
                        </div>
                        <div class="col">
                        <img src="<?php echo $product->img ?>" class="img-thumbnail mt-2" alt="">
                        </div>
                        <div class="col">
                        <img src="<?php echo $product->img ?>" class="img-thumbnail mt-2" alt="">
                        </div>
                    </div>
                </div>
    
                
                <div class="col-md-12 col-lg-8 col-xl-8 mt-4">
                    <div class="text-center">
                        <h5 class="fw-bolder"><?php echo $product->name; ?></h5>
                        <span class="red"><?php echo  number_format($product->price*(100-$product->sale)/100, 0, '', '.');?> VNĐ </span></span> <span class="money-unit"></span> 
                    </div>
                    
                    <div class="text-left">  
                        <ul>
                        <li class="mt-2 fw-bold">Tình trạng: <span class="text-danger fw-bold">Còn hàng</span></li>
                        <li class="mt-2 fw-bold">Ưu đãi:</li>
                        <ul>
                            <li class="mt-2 text-primary fw-bold ">MIỄN PHÍ VẬN CHUYỂN VỚI ĐƠN HÀNG TỪ 500.000Đ</li>
                            <li class="mt-2 text-warning fw-bold">ĐỔI TRẢ MIỄN PHÍ TRONG VÒNG 7 NGÀY</li>
                            <li class="mt-2 text-info fw-bold">CAM KẾT 100% CHÍNH HÃNG</li>
                        </ul>
                        <li class="mt-2 fw-bold">Mô tả:</li>
                        <ul>
                            <li class="mt-2"><?php echo $product->description ?></li>
                            <li class="mt-2"><div><?php echo str_replace(array("\r\n","\n\n","\n\r","\r\r", "\n", "\r"),'<br><br>',$product->content); ?></div></li>           
                        </ul>
                        </ul>        
                    </div>
                    <div class="mt-2 text-center mb-2 ">
                        <button class="btn btn-outline-danger" type="button">Mua ngay</button>
                    </div>
                </div>';
            <?php
            }
        }
    ?>
    <div class="row" style="height: 100px">
    </div>
    <div class="row">
        <h2 class="text-center fw-bold">SẢN PHẨM KHÁC</h2>
     <?php 
        $max = 0;
        foreach($products as $product){
            $max += 1;
        }
        $arr = array();
        for($s = 0; $s < 4; $s++){
            $temp = rand(1, $max);
            while(in_array($temp, $arr)){
                $temp = rand(1, $max);;
            }
            array_push($arr,$temp);
        }
        $count= 0;
        foreach ($products as $product) {
            $count += 1;
            foreach($arr as $i){
            if ($id != $product->id && $i == $count){
                if ($product->sale)
                echo '
                
                        <div class="col-12 col-lg-3 col-md-6 mb-3 mt-3">
                        <div class="card h-100">
                            <div class="badge bg-warning text-dark position-absolute" style="top: 0.5rem; right: 0.5rem">SALE '. $product->sale .'%</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="' . $product->img .'" alt="...">
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="product-name fw-bolder">' .$product->name . '</h5>
                                    <!-- Product price-->
                                    <span class="red">' . number_format($product->price*(100-$product->sale)/100, 0, ',', '.') . ' VNĐ</span></span> <span class="money-unit"></span> 
                                    <br>
                                    <span class="text-muted text-decoration-line-through">' . number_format($product->price, 0, ',', '.') . ' VNĐ</span>
                                    </div>
                                    <!-- Rating -->
                                    <div class="star-block">
                                    </div>
                    
                                </div>
            
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="index.php?page=main&controller=detail&id='. $product->id .'&action=index">Xem thêm</a></div>
                                </div>
                        </div>
                        </div>';
                    else echo '                
                        <div class="col-12 col-lg-3 col-md-6 mb-3 mt-3">
                        <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="' . $product->img .'" alt="...">
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="product-name fw-bolder">' .$product->name . '</h5>
                                    <!-- Product price-->
                                    <span class="red">' . number_format($product->price, 0, ',', '.') . ' VNĐ</span></span> <span class="money-unit"></span> 
                                    </div>
                                    <!-- Rating -->
                                    <div class="star-block">
                                    </div>
                    
                                </div>
             
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="index.php?page=main&controller=detail&id='. $product->id .'&action=index">Xem thêm</a></div>
                                </div>
                        </div>
                        </div>';
            }
        }
    }
    ?>
   </div>
   

</div>
    </div>
   
<?php
   include_once('views/main/footer.php');
?>
