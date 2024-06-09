<div id ="main">
            <?php
                include("sidebar/sidebar.php")
            ?>
            <div class = "maincontent">
                <?php
                    if(isset($_GET['quanly'])){
                        $tam =$_GET['quanly'];
                    
                    }
                    else{
                        $tam ='';
                    }
                    if($tam=='danhmucsanpham'){
                        include("main/danhmuc.php");
                    }elseif($tam=='giohang'){
                        include("main/giohang.php");
                    }
                    elseif($tam=='tintuc'){
                        include("main/tintuc.php");
                    }
                    elseif($tam=='lienhe'){
                        include("main/lienhe.php");
                    }else{
                        include("main/index.php");
                    }
                    
                ?>
            </div>
        </div>