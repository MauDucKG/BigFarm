<?php
  include_once('views/main/navbar.php');
  $id = $_GET['id'];
?>
<div class="container py-2 ">
    <?php         
        foreach ($products as $product) {
            if ($id == $product->id && $product->sale != 0){
                echo '

                <div class="row" style="height: 100px">
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-4 col-xl-4">
                        <div class="row mt-2"> 
                            <div class="card h-100">
                            <div class="badge bg-warning text-dark position-absolute" style="top: 0.5rem; right: 0.5rem">SALE ' . $product->sale . '%</div>
                            <img src="' . $product->img .'" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <img src="' . $product->img .'" class="img-thumbnail mt-2" alt="">
                            </div>
                            <div class="col">
                            <img src="' . $product->img .'" class="img-thumbnail mt-2" alt="">
                            </div>
                            <div class="col">
                            <img src="' . $product->img .'" class="img-thumbnail mt-2" alt="">
                            </div>
                            <div class="col">
                            <img src="' . $product->img .'" class="img-thumbnail mt-2" alt="">
                            </div>
                        </div>
                    </div>
        
                    
                    <div class="col-md-12 col-lg-8 col-xl-8 mt-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">' . $product->name . '</h5>
                            <span class="red">' . number_format($product->price*(100-$product->sale)/100, 0, ',', '.') . ' VNĐ</span></span> <span class="money-unit"></span> 
                            <span class="text-muted text-decoration-line-through">' . number_format($product->price, 0, ',', '.') . ' VNĐ</span>
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
                                <li class="mt-2">'. $product->description.'</li>
                                <li class="mt-2">'. $product->content .'</li>           
                            </ul>
                            </ul>        
                        </div>
                        <div class="mt-2 text-center mb-2 ">
                            <button class="btn btn-outline-danger" type="button">Mua ngay</button>
                        </div>
                    </div>';
            }
            else if ($id == $product->id && $product->sale == 0)
            echo '

            <div class="row" style="height: 100px">
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-4">
                    <div class="row mt-2"> 
                        <div class="card h-100">
                        <img src="' . $product->img .'" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <img src="' . $product->img .'" class="img-thumbnail mt-2" alt="">
                        </div>
                        <div class="col">
                        <img src="' . $product->img .'" class="img-thumbnail mt-2" alt="">
                        </div>
                        <div class="col">
                        <img src="' . $product->img .'" class="img-thumbnail mt-2" alt="">
                        </div>
                        <div class="col">
                        <img src="' . $product->img .'" class="img-thumbnail mt-2" alt="">
                        </div>
                    </div>
                </div>
    
                
                <div class="col-md-12 col-lg-8 col-xl-8 mt-4">
                    <div class="text-center">
                        <h5 class="fw-bolder">' . $product->name . '</h5>
                        <span class="red">' . number_format($product->price*(100-$product->sale)/100, 0, ',', '.') . ' VNĐ</span></span> <span class="money-unit"></span> 
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
                            <li class="mt-2">'. $product->description.'</li>
                            <li class="mt-2">'. $product->content .'</li>           
                        </ul>
                        </ul>        
                    </div>
                    <div class="mt-2 text-center mb-2 ">
                        <button class="btn btn-outline-danger" type="button">Mua ngay</button>
                    </div>
                </div>';
        }
    ?>
    <div class="row" style="height: 100px">
    </div>
    <div class="row">
        <h2 class="text-center fw-bold">SẢN PHẨM KHÁC</h2>
     <?php 
        $i = 0;
        
        foreach ($products as $product) {
            if ($id != $product->id && $i <= 2){
                $i ++;
                if ($product->sale)
                echo '
                
                        <div class="col mb-3 mt-3">
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
                                    <span class="text-muted text-decoration-line-through">' . number_format($product->price, 0, ',', '.') . ' VNĐ</span>
                                    </div>
                                    <!-- Rating -->
                                    <div class="star-block">
                                    <div class="stars">
                                            <input type="radio" id="five" name="rate" value="5">
                                            <label for="five"></label>
                                            <input type="radio" id="four" name="rate" value="4">
                                            <label for="four"></label>
                                            <input type="radio" id="three" name="rate" value="3">
                                            <label for="three"></label>
                                            <input type="radio" id="two" name="rate" value="2">
                                            <label for="two"></label>
                                            <input type="radio" id="one" name="rate" value="1">
                                            <label for="one"></label>
                                        <!-- <span class="have-bought">Đã bán ffsdaf</span> -->
                                    </div>
                                    </div>
                    
                                </div>
            
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="index.php?page=main&controller=detail&id='. $product->id .'&action=index">Xem thêm</a></div>
                                </div>
                        </div>
                        </div>';
                    else echo '                
                        <div class="col mb-3 mt-3">
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
                                    <div class="stars">
                                            <input type="radio" id="five" name="rate" value="5">
                                            <label for="five"></label>
                                            <input type="radio" id="four" name="rate" value="4">
                                            <label for="four"></label>
                                            <input type="radio" id="three" name="rate" value="3">
                                            <label for="three"></label>
                                            <input type="radio" id="two" name="rate" value="2">
                                            <label for="two"></label>
                                            <input type="radio" id="one" name="rate" value="1">
                                            <label for="one"></label>
                                        <!-- <span class="have-bought">Đã bán ffsdaf</span> -->
                                    </div>
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
    ?>
   </div>
   

</div>
   
<?php
  include_once('views/main/footer.php');
?>