<?php
// Exit if accessed directly
if(!defined('ABSPATH')) {
  exit;
}

$class = 'search';
$title = 'ISWeek Search';
$keywords = 'ISWeek';
$description = 'ISWeek';

include 'header.php';
?>

  <div id="main">
    <div class="wrapper">
      <div class="w-fly-mr">
        <div class="w-fly-cnt">
          <div class="position"><a href="/">Home</a> <i>|</i> Search Results for <span class="highlight">tablet pc(1888 products)</span></div>
          <div class="proshow">
            <div class="proshow-hd clearfix">
              <form class="sort" action="#" method="get">showing <input type="text" name="num" size="4" maxlength="4" value="60" /> per page <button type="submit">Update</button></form>
              <div class="pager-wrap">
                <div class="w-pager">
                  <!-- <a class="prev" href="page="><i>&lt;</i> PREV</a> -->
                  <a class="current" href="page=1">1</a>
                  <a href="page=2">2</a>
                  <a href="page=2">3</a>
                  <span class="ellipsis">…</span>
                  <a href="page=54">54</a>
                  <a href="page=55">55</a>
                  <a href="page=56">56</a>
                  <a class="next" href="page=57">NEXT <i>&gt;</i></a>
                </div>
              </div>
            </div>
            <ul class="proshow-bd prolist clearfix">
              <?php for ($i = 1; $i <= 15; $i++) { ?>
              <li class="prolist-item"><div class="wrap">
                <a href="#" class="thumb"><img src="http://image.made-in-china.com/43f34j00heuQWvOsEJrp/Newest-9W-E27-LED-Bulb-Replace-70-90W-Incandescent-Bulb-GABL-9WG60-.jpg" alt="" width="200" height="200" /></a>
                <h3 class="title"><a href="#">Newest 9W E27 LED Bulb Replace 70-90W</a></h3>
                <p class="description">Widely used in products such as club, hotel, hall, chamber, villa and other slap-up locations to illuminate and decorate.Store revelation, showcase, restaurant and other indoor decorations and lighting; Revelation hall, art hall, museum, office, reading room and local lighting; Groggery, karaoke and other entertainment places atmosphere lighting; Jewelry, gold and silver jewelry and fashion lighting. Directly replace the 70-90w incandescent bulb.</p>
              </div></li>
              <li class="prolist-item"><div class="wrap">
                <a href="#" class="thumb"><img src="http://image.made-in-china.com/43f34j00kMoazqycEBfs/300W-LED-Flood-Lights.jpg" alt="" width="200" height="200" /></a>
                <h3 class="title"><a href="#">300W LED Flood Lights</a></h3>
                <p class="description">Widely used in products such as club, hotel, hall, chamber, villayears from the EXW date. Within the warranty period, GA lighting limited bears the shipping cost back and forth for replacing the defective goods.</p>
              </div></li>
              <li class="prolist-item"><div class="wrap">
                <a href="#" class="thumb"><img src="http://img.alibaba.com/images/cms/upload/groupdeals/3C/1863933818.jpg" alt="" width="200" height="200" /></a>
                <h3 class="title"><a href="#">Xiaomi Hongmi 1S Red Rice 1S Hongmi 4.7 inch Screen Qualcomm Mobile Phone Android MIUI V5</a></h3>
                <p class="description">4.7 inch IPS Capacitive Touch Screen,1280*720 CPU:Qualcomm MSM8228,Quad Core,1.6Ghz 1GB RAM;8GB ROM</p>
              </div></li>
              <li class="prolist-item"><div class="wrap">
                <a href="#" class="thumb"><img src="http://www.dhresource.com/albu_708340557_00-1.0x0/hot-fashion-colorful-soft-led-touch-watch.jpg" alt="" width="200" height="200" /></a>
                <h3 class="title"><a href="#">Wholesale - Hot fashion colorful soft LED touch watch Square Jelly Watch Unisex Quartz Sports Silicone Wrist Watches Candy free shipping 10pcs lot</a></h3>
                <p class="description">Short Description: Hot fashion colorful soft LED touch watch Square Jelly Watch Unisex Quartz Sports Silicone Wrist Watches Candy free shipping&Wholes5pcs lotww</p>
              </div></li>
              <?php } ?>
            </ul>
            <div class="proshow-ft clearfix">
              <div class="pager-wrap">
                <div class="w-pager">
                  <!-- <a class="prev" href="page="><i>&lt;</i> PREV</a> -->
                  <a class="current" href="page=1">1</a>
                  <a href="page=2">2</a>
                  <a href="page=2">3</a>
                  <span class="ellipsis">…</span>
                  <a href="page=54">54</a>
                  <a href="page=55">55</a>
                  <a href="page=56">56</a>
                  <a class="next" href="page=57">NEXT <i>&gt;</i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include 'sidebar-search.php'; ?>
    </div>
  </div>

<?php include 'footer.php'; ?>