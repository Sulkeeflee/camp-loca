<!DOCTYPE html>
<html lang="th">
<head>

<title>Camploca</title>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="shortcut icon" href="/images/logo1.jpg" type="">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<meta name="keywords" content="ลานกางเต็นท์ จุดกางเต็นท์">

<meta name="description" content="จองตำแหน่งจุดกางเต็นท์ ที่เลือกได้ตั้งแต่อยู่บ้านแบบ 360 องศา เพื่อตอบโจทย์การแคมป์ปิ้งแบบ new normal">

<meta name="author" content="">


<link rel="stylesheet" type="text/css" href="{{asset('campa/css/import.css?u=20231911221521')}}">

<link rel="stylesheet" type="text/css" href="{{asset('campa/css/source.css?u=20231911221521')}}">


<!-- CSS MODIFY -->

<link rel="stylesheet" type="text/css" href="{{asset('campa/css/g-main.css?u=20231911221521')}}">

<link rel="stylesheet" type="text/css" href="{{asset('campa/css/g-responsive.css?u=20231911221521')}}">

<link rel="stylesheet" type="text/css" href="{{asset('campa/css/modify.css?u=20231911221521')}}">

<link rel="stylesheet" type="text/css" href="{{asset('campa/css/custom.css?u=20231911221521')}}">



</head>
  <body data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0" style="position: relative; min-height: 100%; top: 0px;">
  <div class="global-container" data-mid="">
                                           
  <header class="site-header reset-header">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-auto">
				<a href="/home" class="link brand">
        <a  href="{{url('/')}}"><img width="100" src="/images/logo.png" alt="#" /></a>
				</a>
			</div>
           
        
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                 
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item ">
                           <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('campgrounds')}}">Campgrounds</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('products')}}">Shops</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('about')}}">About</a>
                        </li>
                       
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('contact')}}">Contact</a>
                        </li>
 
                  </div>
               </nav>


                  


			<div class="col d-flex justify-content-end">
                
				<div class="b-right">
                    
					<ul class="item-list">
						<li class="barlogin">
							<div class="rl-block">
                            @if (Route::has('login'))

@auth

<x-app-layout>

</x-app-layout>

@else
								<div>
									<a href="{{ route('login') }}" data-toggle="modal" class="link login-header">เข้าสู่ระบบ</a>
								</div>
								<div>
									<a href="{{ route('register') }}" data-toggle="modal" class="link signup">สมัครสมาชิก</a>
								</div>
                                <div>

@endauth

@endif
<div>
<li class="nav-item">
<a  href="{{url('show_cart')}}"><img width="35" src="/images/cart.png" alt="#" /></a>
            </a>
        </li>

								</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>                                              
  <section class="site-container">

    <div class="home-page">

        <div class="topgraphic">

            <div class="topgraphic-list">

                <div class="slider">

                


                        <div class="item">



                            <a  href="javascript:void(0)" style="pointer-events: none;"   class="link" >



                            <figure class="cover"><img src="https://campa.co.th//upload/tgp/real/pic-20220904-1649469562-288.jpg" alt=""></figure>



                            


                            </a>



                        </div>



                


                        <div class="item">



                            <a  href="javascript:void(0)" style="pointer-events: none;"   class="link" >



                            <figure class="cover"><img src="https://campa.co.th//upload/tgp/real/pic-20220904-1649469626-849.jpg" alt=""></figure>



                            


                            </a>



                        </div>



                


                        <div class="item">



                            <a  href="javascript:void(0)" style="pointer-events: none;"   class="link" >



                            <figure class="cover"><img src="https://campa.co.th//upload/tgp/real/pic-20220904-1649469595-259.jpg" alt=""></figure>



                            


                            </a>



                        </div>



                
                </div>

            </div>

            <div class="wg-search">

                <h1 class="h-title" data-aos="fade-up">ครั้งแรกของระบบจองพื้นที่<br>กางเต็นท์ในไทย</h1>

                <div class="desc" data-aos="fade-up" data-aos-delay="100">มีให้เลือกจองได้แล้วกว่า 23 แห่ง</div>


            </div>

            <div class="arrows-scroll">

                <a href="javascript:void(0);" class="link"><span class="feather icon-chevron-down"></span></a>

            </div>

        </div>

            

        
        <!-- popular -->

        <div class="wg-popular">

            <div class="container">

                <h2 class="h-title text-secondary text-center" data-aos="fade-up">ลานกางเต็นท์ยอดฮิต</h2>

                <div class="popular-list item-center" data-aos="fade-up">

                    <div class="slider">

                        
                        
                        
                    </div>

                </div>

                
            </div>

        </div>



        <!-- banner -->

        <div class="wg-banner">

            <div class="container">

                <div class="banner-list" data-aos="fade-up">

                    <div class="slider">

                        
                        
                            <div class="item">

                                <a  href="https://campa.co.th/news-events/detail/132"   class="link"  target="_blank" >

                                    <figure class="cover"><img src="https://campa.co.th//upload/banner/real/pic-16-20210510-1633388963-685.jpg" alt="Become a host"></figure>

                                </a>

                            </div>

                        
                            <div class="item">

                                <a  href="http://www.outdoorsrental.com/"   class="link"  target="_blank" >

                                    <figure class="cover"><img src="https://campa.co.th//upload/banner/real/pic-20211210-1634024135-572.png" alt="Outdoors rental"></figure>

                                </a>

                            </div>

                        
                            <div class="item">

                                <a  href="https://campa.co.th/news-events/detail/317"   class="link"  target="_blank" >

                                    <figure class="cover"><img src="https://campa.co.th//upload/banner/real/pic-20223101-1643607378-273.jpg" alt="Campa X OutdoorsRental"></figure>

                                </a>

                            </div>

                        
                        
                    </div>

                </div>

            </div>

        </div>

        
      
        <!-- news -->

        <div class="wg-news">

            <h2 class="h-title text-secondary text-center" data-aos="fade-up">ข่าวสารและอีเวนท์</h2>

            <div class="news-list" data-aos="fade-up">

                <div class="slider">

                    
                    
                    <div class="item">

                        <div class="wrapper-news">

                            <div class="content">

                                <div class="title text-limit">รับ 500 บาท! ทันที</div>

                                <div class="desc text-limit">

                                    เมื่อชวนลานกางเต็นท์ให้เข้าร่วมกับ Campa
รับ 500 บาท / 1 ลาน

                                </div>

                                <div class="action">

                                    <a href="/news-events/detail/566" class="btn btn-secondary btn-round-40">อ่านเพิ่มเติม</a>

                                </div>

                            </div>

                            <div class="image">

                                <figure class="cover">

                                    <img src="https://campa.co.th//upload/news/real/pic-20220612-1670329136-387-566.png" alt="img 1">

                                </figure>

                            </div>

                        </div>

                    </div>

                    
                    <div class="item">

                        <div class="wrapper-news">

                            <div class="content">

                                <div class="title text-limit">The Camper Market 2022</div>

                                <div class="desc text-limit">

                                    ภาพบรรยากาศงาน The Camper Market 2022 by Campa

                                </div>

                                <div class="action">

                                    <a href="/news-events/detail/564" class="btn btn-secondary btn-round-40">อ่านเพิ่มเติม</a>

                                </div>

                            </div>

                            <div class="image">

                                <figure class="cover">

                                    <img src="https://campa.co.th//upload/news/real/pic-20220612-1670314794-425-564.jpg" alt="img 1">

                                </figure>

                            </div>

                        </div>

                    </div>

                    
                    <div class="item">

                        <div class="wrapper-news">

                            <div class="content">

                                <div class="title text-limit">Become a Host ระบบจ่ายรายหัว</div>

                                <div class="desc text-limit">

                                    Become a Host of Campa Shared Space
สมัครเข้าร่วมเป็นผู้ประกอบการลานกางเต็นท์ ระบบจ่ายรายหัว กับ Campa!

                                </div>

                                <div class="action">

                                    <a href="/news-events/detail/563" class="btn btn-secondary btn-round-40">อ่านเพิ่มเติม</a>

                                </div>

                            </div>

                            <div class="image">

                                <figure class="cover">

                                    <img src="https://campa.co.th//upload/news/real/pic-20222311-1669213983-933-563.png" alt="img 1">

                                </figure>

                            </div>

                        </div>

                    </div>

                    
                    <div class="item">

                        <div class="wrapper-news">

                            <div class="content">

                                <div class="title text-limit">The Camper Market 2022</div>

                                <div class="desc text-limit">

                                    พบกับตลาดซื้อขายแลกเปลี่ยนสินค้าแคมป์ปิ้งมือสอง 27 พ.ย. นี้!

                                </div>

                                <div class="action">

                                    <a href="/news-events/detail/561" class="btn btn-secondary btn-round-40">อ่านเพิ่มเติม</a>

                                </div>

                            </div>

                            <div class="image">

                                <figure class="cover">

                                    <img src="https://campa.co.th//upload/news/real/pic-20222810-1666961135-520.JPG" alt="img 1">

                                </figure>

                            </div>

                        </div>

                    </div>

                    
                    <div class="item">

                        <div class="wrapper-news">

                            <div class="content">

                                <div class="title text-limit">หากคุณเป็นผู้ประกอบการ</div>

                                <div class="desc text-limit">

                                    สนใจนำลานกางเต็นท์เข้าร่วมกับ Campa

                                </div>

                                <div class="action">

                                    <a href="/news-events/detail/132" class="btn btn-secondary btn-round-40">อ่านเพิ่มเติม</a>

                                </div>

                            </div>

                            <div class="image">

                                <figure class="cover">

                                    <img src="https://campa.co.th//upload/news/real/pic-20210110-1633073371-505.jpg" alt="img 1">

                                </figure>

                            </div>

                        </div>

                    </div>

                    
                    <div class="item">

                        <div class="wrapper-news">

                            <div class="content">

                                <div class="title text-limit">ลานกางเต็นท์ทั้งหมด</div>

                                <div class="desc text-limit">

                                    คุณสามารถดูรายการลานกางเต็นท์ทั้งหมดที่เข้าร่วมกับ Campa ได้ที่นี่

                                </div>

                                <div class="action">

                                    <a href="/news-events/detail/168" class="btn btn-secondary btn-round-40">อ่านเพิ่มเติม</a>

                                </div>

                            </div>

                            <div class="image">

                                <figure class="cover">

                                    <img src="https://campa.co.th//upload/news/real/pic-20212910-1635484440-734.png" alt="img 1">

                                </figure>

                            </div>

                        </div>

                    </div>

                    
                    
                </div>

            </div>

            <div class="action">

                <a href="/news-events" class="btn btn-primary btn-round-40">ดูทั้งหมด</a>

            </div>

        </div>



        
    </div>

</section>    </div>
                <footer class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-lg-3">
				<a href="#" class="link"><img class="brand" src="https://campa.co.th/front/template/default/assets/img/static/campa_logo_w.png" alt="campa logo"></a>
			</div>
			<div class="col-6 col-sm-4 col-lg-3">
				<div class="link-list">
					<h2 class="h-title">เกี่ยวกับเรา</h2>
					<ul class="item-list">
						<li><a href="/about" class="link">เรื่องราวของเรา</a></li>
						<li><a href="/news-events" class="link">ข่าวสารและอีเวนท์</a></li>
						<li><a href="/faq" class="link">Camper คำถามที่พบบ่อย</a></li>
						<li><a href="/help" class="link">ติดต่อเรา</a></li>
					</ul>
				</div>
			</div>
			<div class="col-6 col-sm-4 col-lg-3">
				<div class="link-list" style="display:none;">
					<h2 class="h-title">สำหรับโฮส</h2>
					<ul class="item-list">
						<li><a href="/join" class="link">เข้าร่วมเป็นโฮส</a></li>
						<li><a href="/faq" class="link">Host คำถามที่พบบ่อย</a></li>
											</ul>
				</div>
			</div>
			<div class="col-md-12 col-lg-3">
				<div class="social-list">
					<ul class="item-list">
						<li><a href="https://www.facebook.com/campathailand/" target="_blank" class="link" title="Facebook"><img src="https://campa.co.th/front/template/default/assets/img/icon/fb-icon.svg" alt="facebook"></a></li>
						<li><a href="https://www.instagram.com/campathailand/" target="_blank" class="link" title="Instragram"><img src="https://campa.co.th/front/template/default/assets/img/icon/ig-icon.svg" alt="instragram"></a></li>
						<li><a href="https://www.spotify.com/th-th/" target="_blank" class="link" title="Spotify"><img src="https://campa.co.th/front/template/default/assets/img/icon/sp-icon.svg" alt="spotify"></a></li>
						<li><a href="https://twitter.com/" target="_blank" class="link" title="Twitter"><img src="https://campa.co.th/front/template/default/assets/img/icon/tw-icon.svg" alt="twitter"></a></li>
						<li><a href="https://www.youtube.com/channel/UCPDx1SHd9t8Vog3HieLH0nA" target="_blank" class="link" title="Youtube"><img src="https://campa.co.th/front/template/default/assets/img/icon/yt-icon.svg" alt="youtube"></a></li>
					</ul>
				</div>
				<div class="bg-img sun-ft"><img src="https://campa.co.th/front/template/default/assets/img/background/sun-footer.svg" alt="sun"></div>
				<div class="bg-img mountain-ft"><img src="https://campa.co.th/front/template/default/assets/img/background/mountain-footer.svg" alt="mountain"></div>
			</div>
		</div>
		<div class="row ft-bt">
			<div class="col-12 col-sm order-2 order-sm-1">
				<div class="copyright">
										Copyright &#169; 2021 Campa TH Co., Ltd. All right reserved.
				</div>
			</div>
			<div class="col-12 col-sm-auto order-1 order-sm-2">
				<div class="policy">
					<ul class="item-list">
						<li><a href="/terms/129" class="link">ข้อกำหนดและเงื่อนไขการให้บริการ</a></li>
						<li><a href="/terms/135" class="link">นโยบายความเป็นส่วนตัว</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
   <!-- JS SOURCE -->

<script src="campa/js/jquery-2.1.4.min.js?u=20232011003254"></script>

<script src="campa/js/popper.min.js?u=20232011003254"></script>

<script src="campa/js/jquery-ui.min.js?u=20232011003254"></script>

<script src="campa/js/jquery.ui.touch-punch.min.js?u=20232011003254"></script>

<script src="campa/js/jquery.easing-1.3.min.js?u=20232011003254"></script>

<script src="campa/js/modernizr-3.6.0.min.js?u=20232011003254"></script>

<script src="campa/js/bootstrap.min.js?u=20232011003254"></script>

<script src="campa/js/validator.min.js?u=20232011003254"></script>

<script src="campa/js/select2.min.js?u=20232011003254"></script>

<script src="campa/js/slick.js?u=20232011003254"></script>

<script src="campa/js/slick-limitdot.js?u=20232011003254"></script>

<script src="campa/js/lazyload.min.js?u=20232011003254"></script>

<script src="campa/js/trunk8.min.js?u=20232011003254"></script>


<script src="campa/js/jquery.sticky-sidebar.min.js?u=20232011003254"></script>

<script src="campa/js/sticky-sidebar.min.js?u=20232011003254"></script>

<script src="campa/js/resizesensor.js?u=20232011003254"></script>

<script src="campa/js/jquery.fancybox.min.js?u=20232011003254"></script>


<!-- PLUGIN -->

<script src="campa/js/daterangepicker/moment.min.js?u=20232011003254"></script>

<script src="campa/js/daterangepicker/daterangepicker.js?u=20232011003254"></script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<!-- JS MAIN -->

<script src="campa/js/main.js?u=20232011003254"></script>

<script src="campa/js/topgraphic.js?u=20232011003254"></script>

<script src="campa/js/wg-slide.js?u=20232011003254"></script>

<script src="campa/js/g-script.js?u=20232011003254"></script>

<script src="campa/js/dev.js?u=20232011003254"></script>








  


        </body>
</html>