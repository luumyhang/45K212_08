<!-- header -->
<?php
require "public/header.php"
?>
<!-- slider -->
<body>
    <section class="slider">
        <div class="aspect-ratio-169">
            <img src="./img/slide1.png">
            <img src="./img/slide2.png">
            <img src="./img/slide3.png">
            <img src="./img/slide4.png">
            <img src="./img/slide5.png">
        </div>
        <div class="dot-content">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section>

<!-- Body -->
    <section class="content">
        <div id="wrapper">
            <div class="headline">
                <h3>Công thức ngon trong tuần</h3>
            </div>
            <ul class="products">
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="./img/B1.png" alt="">
                            </a>
                            <a href="" class="more">Xem chi tiết</a>
                            <div class="product-info">
                                <a href="" class="product-cat">Món Bắc</a>
                                <a href="" class="product-name">Canh riêu cua</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="./img/B1.png" alt="">
                            </a>
                            <a href="" class="more">Xem chi tiết</a>
                            <div class="product-info">
                                <a href="" class="product-cat">Món Bắc</a>
                                <a href="" class="product-name">Canh riêu cua</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="./img/B1.png" alt="">
                            </a>
                            <a href="" class="more">Xem chi tiết</a>
                            <div class="product-info">
                                <a href="" class="product-cat">Món Bắc</a>
                                <a href="" class="product-name">Canh riêu cua</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="./img/B1.png" alt="">
                            </a>
                            <a href="" class="more">Xem chi tiết</a>
                            <div class="product-info">
                                <a href="" class="product-cat">Món Bắc</a>
                                <a href="" class="product-name">Canh riêu cua</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="./img/B1.png" alt="">
                            </a>
                            <a href="" class="more">Xem chi tiết</a>
                            <div class="product-info">
                                <a href="" class="product-cat">Món Bắc</a>
                                <a href="" class="product-name">Canh riêu cua</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="./img/B1.png" alt="">
                            </a>
                            <a href="" class="more">Xem chi tiết</a>
                            <div class="product-info">
                                <a href="" class="product-cat">Món Bắc</a>
                                <a href="" class="product-name">Canh riêu cua</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="./img/B1.png" alt="">
                            </a>
                            <a href="" class="more">Xem chi tiết</a>
                            <div class="product-info">
                                <a href="" class="product-cat">Món Bắc</a>
                                <a href="" class="product-name">Canh riêu cua</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="./img/B1.png" alt="">
                            </a>
                            <a href="" class="more">Xem chi tiết</a>
                            <div class="product-info">
                                <a href="" class="product-cat">Món Bắc</a>
                                <a href="" class="product-name">Canh riêu cua</a>
                            </div>
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>
    </section>
    
<!-- footer -->
    <?php
    require "public/footer.php";
    ?>
</body>
<script>

// slide
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector(".aspect-ratio-169")
    const dotItem = document.querySelectorAll(".dot")
    let imgNumber = imgPosition.length
    let index = 0;
    // console.log(imgPosition) bỏ
    imgPosition.forEach(function(image,index){
        image.style.left = index*100+"%"
        dotItem[index].addEventListener("click",function(){
        slider(index)
        })
    })
    function imgSlide(){
        index++;
        console.log(index)
        if(index >= imgNumber){index=0}
        slider(index)
    }
    function slider(index) {
        imgContainer.style.left = "-" + index*100 + "%"
        const dotActive = document.querySelector('.active')
        dotActive.classList.remove("active")
        dotItem[index].classList.add("active")
    }
    setInterval(imgSlide,5000)
</script>
