
     
<!DOCTYPE html>
<html>
  <head>
    <title>Simple Marker</title>
    <!-- The callback parameter is required, so we use console.debug as a noop -->
    <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="/images/logo1.jpg" type="">
      <title>camploca</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
   

      <!-- CSS SOURCE -->

<link rel="stylesheet" type="text/css" href="{{asset('campa/css/import.css?u=20231911221521')}}">

<link rel="stylesheet" type="text/css" href="{{asset('campa/css/source.css?u=20231911221521')}}">



<!-- CSS MODIFY -->

<link rel="stylesheet" type="text/css" href="{{asset('campa/css/g-main.css?u=20231911221521')}}">

<link rel="stylesheet" type="text/css" href="{{asset('campa/css/g-responsive.css?u=20231911221521')}}">

<link rel="stylesheet" type="text/css" href="{{asset('campa/css/modify.css?u=20231911221521')}}">

<link rel="stylesheet" type="text/css" href="{{asset('campa/css/custom.css?u=20231911221521')}}">

<style>

.navbar-brand {
  font-family: 'Playfair Display', serif;
}

.navbar-brand span {
  font-weight: bold;
  font-size: 32px;
  color: #000000;
}

.custom_nav-container {
  padding: 0;
}

.custom_nav-container .navbar-nav {
  margin-left: auto;
}

.custom_nav-container .navbar-nav .nav-item .nav-link {
    padding: 5px 20px;
    color: #131313;
    text-align: center;
    text-transform: uppercase;
    border-radius: 5px;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    font-weight: 700;
}

.custom_nav-container .navbar-nav .nav-item .nav-link svg {
  width: 17px;
  height: auto;
  fill: #000000;
  margin-bottom: 2px;
}

.custom_nav-container .navbar-nav .nav-item:hover .nav-link, .custom_nav-container .navbar-nav .nav-item.active .nav-link {
  color: #F6B743;
}

.custom_nav-container .navbar-nav .nav-item:hover .nav-link svg, .custom_nav-container .navbar-nav .nav-item.active .nav-link svg {
  fill: #F6B743;
}

.custom_nav-container .nav_search-btn {
  width: 35px;
  height: 35px;
  padding: 0;
  border: none;
  color: #000000;
}

.custom_nav-container .nav_search-btn:hover {
  color: #f7444e;
}

.custom_nav-container .navbar-toggler {
  outline: none;
}

.custom_nav-container .navbar-toggler {
  padding: 0;
  width: 37px;
  height: 42px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.custom_nav-container .navbar-toggler span {
  display: block;
  width: 35px;
  height: 4px;
  background-color: #000000;
  margin: 7px 0;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  position: relative;
  border-radius: 5px;
  transition: all 0.3s;
}

.custom_nav-container .navbar-toggler span::before, .custom_nav-container .navbar-toggler span::after {
  content: "";
  position: absolute;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: #000000;
  top: -10px;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.custom_nav-container .navbar-toggler span::after {
  top: 10px;
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] {
  -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] span {
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] span::before, .custom_nav-container .navbar-toggler[aria-expanded="true"] span::after {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
  top: 0;
}

</style>
     





  
    
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

    <div class="camp-detail-page  search-page  ">
        <div class="container pt-5">

            <div class="row boxsearch_camp camlistpage">
                <form name="boxsearch_date" action="/camp" method="GET" class="search-form my-3 m-sm-0 col-auto">
                                                                                <div class="txt-key">
                        <ul class="item-list d-flex flex-column flex-sm-row col-11 col-sm-12 ">
                            <li class="w-100 sm-w-auto">
                                <div class="d-flex  justify-content-center  align-items-center">
                                    <i class="feather icon-map iconbarsearch"></i>
                                    <!-- <input type="text" id="searchlacation" class="form-control" placeholder="Location"> -->
                                    <input type="text" id="keyword" name="keyword" value="" class="form-control searchlocation ifocus ui-autocomplete-input" placeholder="สถานที่" autocomplete="off">
                                </div>
                            </li>
                            <li class="w-100 sm-w-auto">
                                <div class="d-flex  justify-content-center  align-items-center">
                                    <i class="feather icon-calendar iconbarsearch"></i>

                                    <input type="text" id="datefilter" name="datefilterSearch" class="form-control text-center ifocus" value="22-11-2023 - 23-11-2023" required="" placeholder="เช็คอิน  -  เช็คเอาท์" autocomplete="off">
                                </div>
                            </li>
                            <li class="w-100 sm-w-auto dropdown">
                                <div class="form-control w-100 add-guest">

                                    <div class="d-flex justify-content-center align-items-center h-100  ">
                                        <i class="feather icon-user-check mr-2 iconbarsearch "></i>

                                        
                                            <div class="num-g ifocus d-flex"><span class=" d-none d-sm-block">ผู้เข้าพัก</span> 2 คน</div>
                                                                            </div>
                                    <div class="dropdown-guest">
                                        <div class="guest">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-4">
                                                    <button type="button" class="btn sub">-</button>
                                                </div>
                                                <div class="col-4">
                                                    <input type="number" name="people" class="form-control number" value="2">
                                                </div>
                                                <div class="col-4">
                                                    <button type="button" class="btn add">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                                                    </ul>
                        <button type="button" class="btn-search click_search"><img src="https://campa.co.th/front/template/default/assets/img/icon/search-icon.svg" alt="search icon"></button>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-12 control_list">



                    <input type="checkbox" class="btn-check" id="private_controll" value="private" autocomplete="off">
                    <label class=" btn btn-outline-primary" for="private_controll">Private Space</label>

                    <input type="checkbox" class="btn-check " id="share_controll" value="share" autocomplete="off">
                    <label class=" btn btn-outline-primary btn-sharespace" for="share_controll">Shared Space</label>


                    <a href="#" class="openmapsearch">ค้นหาบนแผนที่</a>
                    
                                        
                </div>

                <div class="col-12 col-md-3 boxfiltter">
                    <div class="inner ">

                        <div class="bar_fillter">

                            <a href="javascript:void(0)" class="btn btn-light btn-md btn-round-40 ">
                                <span>
                                    <img src="https://campa.co.th/front/template/default/assets/img/icon/icon-filter.svg">
                                </span>
                                ตัวกรองอื่นๆ

                                <div class="boxclose"><i class="feather icon-x"></i></div>
                            </a>

                        </div>

                        <form action="" metthod="GET" name="formsearch">

                            <input type="hidden" name="page" class="form-control" value="1">

                            <input type="hidden" name="order" class="form-control" value="">

                            <input type="hidden" name="datefilterSearch" class="form-control" value="22-11-2023 - 23-11-2023">

                            <input type="hidden" name="people" class="form-control" value="2">

                            <input type="hidden" name="keyword" class="form-control" value="">

                            <input type="hidden" name="onsub" class="form-control" value="1">

                            
                            <div class="row">

                            <div class="col-12">

                                    <div class="form-group">

                                        <label for="event">ราคา </label>
                                        <div class="boxpriceset">
                                            <div class="wrapper">


                                                <div class="slider">
                                                    <div class="progress"></div>
                                                </div>
                                                <div class="range-input">
                                                    <input type="range" class="range-min" min="0" max="5000" value="0" step="1">
                                                    <input type="range" class="range-max" min="0" max="5000" value="5000" step="1">
                                                </div>

                                                <div class="price-input">
                                                    <div class="field">

                                                        <input name="input-min" type="number" class="input-min" value="0">
                                                    </div>
                                                    <div class="separator">-</div>
                                                    <div class="field">

                                                        <input name="input-max" type="number" class="input-max" value="5000">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="form-group">

                                        <label for="facility">สิ่งอำนวยความสะดวก</label>

                                        <div class="checkbox-control">

                                            <input type="checkbox" name="facilities[]" value="1">

                                            <div class="icon"></div>

                                            <div class="title">จุดน้ำดื่ม</div>

                                        </div>

                                        <div class="checkbox-control">

                                            <input type="checkbox" name="facilities[]" value="2">

                                            <div class="icon"></div>

                                            <div class="title">สุขา</div>

                                        </div>

                                        <div class="checkbox-control">

                                            <input type="checkbox" name="facilities[]" value="3">

                                            <div class="icon"></div>

                                            <div class="title">ห้องอาบน้ำ</div>

                                        </div>

                                        <div class="checkbox-control">

                                            <input type="checkbox" name="facilities[]" value="4">

                                            <div class="icon"></div>

                                            <div class="title">จุดทิ้งขยะ</div>

                                        </div>

                                        <div class="checkbox-control">

                                            <input type="checkbox" name="facilities[]" value="5">

                                            <div class="icon"></div>

                                            <div class="title">ที่จอดรถบ้านภายในลาน</div>

                                        </div>

                                        <div class="checkbox-control">

                                            <input type="checkbox" name="facilities[]" value="6">

                                            <div class="icon"></div>

                                            <div class="title">ส่วนสำหรับปรุงอาหารหรืออุปกรณ์ปรุงอาหาร</div>

                                        </div>

                                        <div class="checkbox-control">

                                            <input type="checkbox" name="facilities[]" value="7">

                                            <div class="icon"></div>

                                            <div class="title">ไฟฟ้า</div>

                                        </div>

                                        <div class="checkbox-control">

                                            <input type="checkbox" name="facilities[]" value="8">

                                            <div class="icon"></div>

                                            <div class="title">สัญญาณโทรศัพท์</div>

                                        </div>

                                        <div class="checkbox-control">

                                            <input type="checkbox" name="facilities[]" value="9">

                                            <div class="icon"></div>

                                            <div class="title">Wifi</div>

                                        </div>

                                        <div class="checkbox-control">

                                            <input type="checkbox" name="facilities[]" value="10">

                                            <div class="icon"></div>

                                            <div class="title">พื้นที่สำหรับก่อกองไฟ</div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="form-group">

                                        <a for="event" data-toggle="collapse" data-target="#collapse_activity" aria-expanded="false" aria-controls="collapse_activity">
                                            กิจกรรม <small>(13)</small> <i class="feather icon-chevron-down"></i></a>
                                        <div class="collapse" id="collapse_activity">
                                                                                            <div class="checkbox-control">
                                                    <input type="checkbox" name="detail2[]" value="121">

                                                    <div class="icon"></div>

                                                    <div class="title">เก็บผักผลไม้</div>

                                                </div>
                                                                                            <div class="checkbox-control">
                                                    <input type="checkbox" name="detail2[]" value="56">

                                                    <div class="icon"></div>

                                                    <div class="title">แพดเดิลบอร์ด</div>

                                                </div>
                                                                                            <div class="checkbox-control">
                                                    <input type="checkbox" name="detail2[]" value="55">

                                                    <div class="icon"></div>

                                                    <div class="title">ขี่จักรยาน</div>

                                                </div>
                                                                                            <div class="checkbox-control">
                                                    <input type="checkbox" name="detail2[]" value="11">

                                                    <div class="icon"></div>

                                                    <div class="title">ว่ายน้ำ</div>

                                                </div>
                                                                                            <div class="checkbox-control">
                                                    <input type="checkbox" name="detail2[]" value="12">

                                                    <div class="icon"></div>

                                                    <div class="title">เดินป่า</div>

                                                </div>
                                                                                            <div class="checkbox-control">
                                                    <input type="checkbox" name="detail2[]" value="13">

                                                    <div class="icon"></div>

                                                    <div class="title">ตกปลา</div>

                                                </div>
                                                                                            <div class="checkbox-control">
                                                    <input type="checkbox" name="detail2[]" value="16">

                                                    <div class="icon"></div>

                                                    <div class="title">พายเรือ</div>

                                                </div>
                                                                                            <div class="checkbox-control">
                                                    <input type="checkbox" name="detail2[]" value="14">

                                                    <div class="icon"></div>

                                                    <div class="title">ส่องสัตว์</div>

                                                </div>
                                                                                            <div class="checkbox-control">
                                                    <input type="checkbox" name="detail2[]" value="15">

                                                    <div class="icon"></div>

                                                    <div class="title">ปีนเขา</div>

                                                </div>
                                                                                            <div class="checkbox-control">
                                                    <input type="checkbox" name="detail2[]" value="17">

                                                    <div class="icon"></div>

                                                    <div class="title">เล่นเซิร์ฟ</div>

                                                </div>
                                                                                            <div class="checkbox-control">
                                                    <input type="checkbox" name="detail2[]" value="18">

                                                    <div class="icon"></div>

                                                    <div class="title">ขี่ช้าง</div>

                                                </div>
                                                                                            <div class="checkbox-control">
                                                    <input type="checkbox" name="detail2[]" value="19">

                                                    <div class="icon"></div>

                                                    <div class="title">ให้อาหารสัตว์</div>

                                                </div>
                                                                                            <div class="checkbox-control">
                                                    <input type="checkbox" name="detail2[]" value="20">

                                                    <div class="icon"></div>

                                                    <div class="title">งานฝีมือ</div>

                                                </div>
                                                                                    </div>

                                    </div>

                                </div>


                                <div class="col-12">

                                    <div class="form-group">

                                        <a for="event" data-toggle="collapse" data-target="#collapse_landscape" aria-expanded="false" aria-controls="collapse_landscape">
                                            ลักษณะภูมิทัศน์ <small>(4)</small> <i class="feather icon-chevron-down"></i></a>
                                        <div class="collapse" id="collapse_landscape">
                                            
                                                <div class="checkbox-control">

                                                    <input type="checkbox" name="detail1[]" value="106">

                                                    <div class="icon"></div>

                                                    <div class="title">ลานใหม่ พร้อมให้คุณไปแคมป์ได้แล้ว วันนี้!</div>

                                                </div>

                                            
                                                <div class="checkbox-control">

                                                    <input type="checkbox" name="detail1[]" value="103">

                                                    <div class="icon"></div>

                                                    <div class="title">เย็นสบาย</div>

                                                </div>

                                            
                                                <div class="checkbox-control">

                                                    <input type="checkbox" name="detail1[]" value="104">

                                                    <div class="icon"></div>

                                                    <div class="title">ใกล้ลำธารน้ำ</div>

                                                </div>

                                            
                                                <div class="checkbox-control">

                                                    <input type="checkbox" name="detail1[]" value="105">

                                                    <div class="icon"></div>

                                                    <div class="title">Car Camping</div>

                                                </div>

                                            
                                        </div>

                                    </div>

                                </div>


                                <div class="col-12">

                                    <div class="form-group">

                                        <a for="event" data-toggle="collapse" data-target="#collapse_type" aria-expanded="false" aria-controls="collapse_type">
                                            รูปแบบที่พัก <small>(5)</small> <i class="feather icon-chevron-down"></i></a>
                                        <div class="collapse" id="collapse_type">

                                            <div class="checkbox-control">

                                                <input type="checkbox" name="detail3[]" value="1">

                                                <div class="icon"></div>

                                                <div class="title">ลานกางเต็นท์</div>

                                            </div>

                                            <div class="checkbox-control">

                                                <input type="checkbox" name="detail3[]" value="2">

                                                <div class="icon"></div>

                                                <div class="title">แกลมป์ปื้ง</div>

                                            </div>

                                            <div class="checkbox-control">

                                                <input type="checkbox" name="detail3[]" value="3">

                                                <div class="icon"></div>

                                                <div class="title">ที่จอดรถบ้าน/camper van/roof tent</div>

                                            </div>

                                            <div class="checkbox-control">

                                                <input type="checkbox" name="detail3[]" value="4">

                                                <div class="icon"></div>

                                                <div class="title">ห้องพักในรถบ้าน</div>

                                            </div>

                                            <div class="checkbox-control">

                                                <input type="checkbox" name="detail3[]" value="5">

                                                <div class="icon"></div>

                                                <div class="title">บังกะโล/โฮมสเตย์</div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </form>

                    </div>
                </div>



                <div class="col-md-9 containerload">
                    <div class="row">
                        <div class="col-12 boxload" style="position: relative;">

                            <div class="datashow">
       <div class="card nodetail">
    <h2>ขออภัย</h2><br>
    - ไม่พบข้อมูลที่คุณต้องการ -</div>

</div>
                        </div>
                    </div>
                </div>





            </div>

        </div>
    </div>

</section>
</div>

<footer class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-lg-3">
            <a  href="{{url('/')}}"><img width="130" src="/images/logo1.png" alt="#" /></a>
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
										Copyright © 2021 Campa TH Co., Ltd. All right reserved.
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

<script src="campa/js/main.js?u=20231911221521"></script>

<script src="campa/js/topgraphic.js?u=20231911221521"></script>

<script src="campa/js/wg-slide.js?u=20231911221521"></script>

<script src="campa/js/g-script.js?u=20231911221521"></script>

<script src="campa/js/dev.js?u=20231911221521"></script>

</body>

 
</html>
         
