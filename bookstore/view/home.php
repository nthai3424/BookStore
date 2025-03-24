
<div class="mainall" >
<div class="content">
    <h4>Free Delivery</h4>
    <p>Applies to orders of 500.000₫ or more.<a href="">View details</a></p>
</div>
<div class="banner">
    <img src="images/sale.jpg" alt="" >
</div>
<div class="content2">
    <h1>GIFTS THAT MOVE YOU</h1>
    <p>This year's gift. Next year's greatness.</p>
    <div class="nextt">
    <button class="button1">Shop</button>
    <button class="button1">Explore</button>
    </div>
</div>
<main>
    <h3>BỘ SƯU TẬP</h3>
    <div class="dacsac">
        <div class="boxa">
            <a href="ctsp.html"><img src="images/meomay.webp" alt=""></a>
            <div class="boxname">
            <h4>
               Hoạt hình
            </h4>
            </div>
        </div>
        <div class="boxa">
            <img src="images/tieuthuyet.jpg" alt="">
            <div class="boxname">
            <h4>
               Tiểu thuyết
            </h4>
            </div>
        </div>
        <div class="boxa">
            <img src="images/dochoi.jpg" alt="">
            <div class="boxname">
            <h4>
               Đồ cho bé
            </h4>
            </div>
        </div>
       
    </div>
</main>

<main>
  <div class="new">
<h3>XU HƯỚNG</h3>
<div class="trending">
    
         <?php
            foreach ($dstop10 as $sp) {
                extract($sp);
                 // Sử dụng number_format để thêm dấu phẩy cho giá tiền
    $formatted_price = number_format($price) . '₫';
    
    // Chỉ hiển thị giá cũ khi nó lớn hơn 0
    $formatted_priceold = ($priceold > 0) ? number_format($priceold) . '₫' : '';
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $img=$img_path.$img;
                echo' <div class="col1">
                <a  href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                  <h4 class="name_ a"><a href="'.$linksp.'">'.$name.'</a></h4>
                <div class="price">
                    <p>' . $formatted_price;
                    
    if ($priceold > 0) {
        echo '<del>' . $formatted_priceold . '</del>';
    }
    
    echo '</p>
               
            </div>
          </div>';}
            ?>
            <script>   
var trendingContainer = document.querySelector('.trending');
trendingContainer.addEventListener('scroll', function () {
    if (trendingContainer.scrollLeft > 0) {
        trendingContainer.classList.add('show-scrollbar');
    } else {
        trendingContainer.classList.remove('show-scrollbar');
    }
});

// Thêm dòng sau để ẩn thanh cuộn lúc ban đầu
trendingContainer.classList.remove('show-scrollbar');</script>
        <!-- <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div> -->
         <!--  <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
        <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
          <div class="col1">
            <img src="images\disuwww5uxkqulu2aivh.webp" alt="">
            <h4>Nike Air Max Plus </h4>
            <p>Giày nam</p>
            <div class="price">
            <p>1.369.000đ <del>999.000đ</del></p>
            </div>
          </div>
      </div> -->
      
      
</main>
<main>
    <h3>MUA SẮM THEO THỂ LOẠI</h3>
    <div class="chuy">
        <div class="boxb hight400">
            <img src="images/sach1.jpg" alt="">
            <div class="boxname">
           <button class="btn_danhmuc">SÁCH</button>
            </div>
        </div>
        <div class="boxb hight400">
            <img src="images/truyen.webp" alt="">
            <div class="boxname">
                <button class="btn_danhmuc">TRUYỆN</button>
            </div>
        </div>
        <div class="boxb hight400">
            <img src="images/phukien.png" alt="">
            <div class="boxname">
                <button class="btn_danhmuc">PHỤ KIỆN</button>
            </div>
        </div>
       
    </div>
</main>

</div>
