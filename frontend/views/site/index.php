<?php
namespace frontend\views\site;

use Yii;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = '100 Roxas Avenue';

$this->registerMetaTag(['name' => 'description', 'content' => '100 Roxas Avenue - ' . Yii::$app->params['description'] . '.']);
?>
<main class="b-site_index">
    <section class="b-site_index__section b-site_index__section_isolated b-location">
        <div class="container">
            <h3 class="b-site_index__heading">Location</h3>

            <ul class="nav nav-tabs b-location__tabs" role="tablist">
                <li role="presentation" class="active"><?= Html::a(
                    'Map',
                    '#b-location-map',
                    array(
                        'aria-controls' => 'b-location-map',
                        'role' => 'tab',
                        'data-toggle' => 'tab',
                    )
                ) ?></li>
                <?php /*
                <li role="presentation"><?= Html::a(
                    'Nearby',
                    '#b-location-nearby',
                    array(
                        'aria-controls' => 'b-location-dearby',
                        'role' => 'tab',
                        'data-toggle' => 'tab',
                    )
                ) ?></li>
                <li role="presentation"><?= Html::a(
                    'Directions',
                    '#b-location-directions',
                    array(
                        'aria-controls' => 'b-location-directions',
                        'role' => 'tab',
                        'data-toggle' => 'tab',
                    )
                ) ?></li>
                */ ?>
            </ul>

            <div class="tab-content b-location__tab-content">
                <div role="tabpanel" class="tab-pane active b-location__tab-pane" id="b-location-map">
                    <ul class="list-group b-location__tab-pane-info">
                        <li class="list-group-item"><i class="fa fa-map-marker b-location__tab-pane-info-icon"></i>100 Roxas Avenue, Davao City</li>
                    </ul>

                    <div class="b-map b-map--100roxasavenue">
                        <div class="b-map__before"></div>

                        <i class="fa fa-map-marker b-map__marker"></i>
                    </div>
                </div>

                <?php /*
                <div role="tabpanel" class="tab-pane b-location__tab-pane" id="b-location-nearby">
                    <h4 class="b-location__tab-pane-title">Nearby</h4>

                    <p>...</p>
                </div>

                <div role="tabpanel" class="tab-pane b-location__tab-pane" id="b-location-directions">
                    <h4 class="b-location__tab-pane-title">Directions</h4>

                    <p>...</p>
                </div>
                */ ?>
            </div>
        </div>
    </section>

    <section class="b-site_index__section b-site_index__section_isolated">
        <p>Get checklist of requirements and templates for Dormitory Reservations, Lease and Parking Arrangements by clicking on the link below.</p>
        <p><a href="https://drive.google.com/drive/folders/1hfnsFRnwxU3S8QSu605VgwFC3KbI3hTr?usp=sharing" rel="nofollow" target="_blank">https://drive.google.com/drive/folders/1hfnsFRnwxU3S8QSu605VgwFC3KbI3hTr?usp=sharing</a></p>
        <p>Kindly coordinate all applications and direct queries to our Administration Office.  You may call (082) 299 2325 or 0933 812 6535.  You may also send an email to lcicorporation.0312@gmail.com.</p>
    </section>

    <section class="b-site_index__section b-site_index__section_isolated b-photos">
        <div class="js-photos__scrollPane js-photos__scrollPane b-photos__scrollPane"><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/facade-1.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/facade-1.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--23p83lf---/c_fill,h_360,q_jpegmini,w_360/v1445288759/100roxasavenue.com/photos/facade-1.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/entrance-1.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/entrance-1.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--3Ag3_A1L--/c_fill,h_360,q_jpegmini,w_360/v1445289619/100roxasavenue.com/photos/entrance-1.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/entrance-2.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/entrance-2.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--dsFSGC16--/c_fill,h_360,q_jpegmini,w_360/v1445289614/100roxasavenue.com/photos/entrance-2.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/reception-1.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/reception-1.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--Bhy_DcMQ--/c_fill,h_360,q_jpegmini,w_360/v1445289818/100roxasavenue.com/photos/reception-1.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/cctv-1.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/cctv-1.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s---JAr1wn5--/c_fill,h_360,q_jpegmini,w_360/v1445289834/100roxasavenue.com/photos/cctv-1.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/elevator-1.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/elevator-1.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--ur0oMr7I--/c_fill,h_360,q_jpegmini,w_360/v1445289916/100roxasavenue.com/photos/elevator-1.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/elevator-2.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/elevator-2.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--vMZL5L9f--/c_fill,h_360,q_jpegmini,w_360/v1445289914/100roxasavenue.com/photos/elevator-2.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/elevator-3.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/elevator-3.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--OY_h4D-H--/c_fill,h_360,q_jpegmini,w_360/v1445289912/100roxasavenue.com/photos/elevator-3.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/hallway-1.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/hallway-1.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--0bj2MLLz--/c_fill,h_360,q_jpegmini,w_360/v1445290048/100roxasavenue.com/photos/hallway-1.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/hallway-2.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/hallway-2.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--JPBwpCab--/c_fill,h_360,q_jpegmini,w_360/v1445290043/100roxasavenue.com/photos/hallway-2.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-2/1.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-2/1.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--42BNzAVk--/c_fill,h_360,q_jpegmini,w_360/v1445290322/100roxasavenue.com/photos/room-2/1.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-2/2.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-2/2.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--coqFBrVd--/c_fill,h_360,q_jpegmini,w_360/v1445290335/100roxasavenue.com/photos/room-2/2.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-2/3.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-2/3.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--sahFIR76--/c_fill,h_360,q_jpegmini,w_360/v1445290334/100roxasavenue.com/photos/room-2/3.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-2/4.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-2/4.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--PeihFJpZ--/c_fill,h_360,q_jpegmini,w_360/v1445290348/100roxasavenue.com/photos/room-2/4.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-2/5.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-2/5.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--cwg9pEFK--/c_fill,h_360,q_jpegmini,w_360/v1445290351/100roxasavenue.com/photos/room-2/5.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-2/6.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-2/6.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--48DNg4AA--/c_fill,h_360,q_jpegmini,w_360/v1445290351/100roxasavenue.com/photos/room-2/6.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-2/7.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-2/7.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--ih4eBUgH--/c_fill,h_360,q_jpegmini,w_360/v1445290321/100roxasavenue.com/photos/room-2/7.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-2/8.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-2/8.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--L2fyz574--/c_fill,h_360,q_jpegmini,w_360/v1445290324/100roxasavenue.com/photos/room-2/8.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-2/9.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-2/9.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--sfXJqlBq--/c_fill,h_360,q_jpegmini,w_360/v1445290332/100roxasavenue.com/photos/room-2/9.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-1/1.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-1/1.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--J070kkzP--/c_fill,h_360,q_jpegmini,w_360/v1445290718/100roxasavenue.com/photos/room-1/1.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-1/2.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-1/2.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--mxHvOehY--/c_fill,h_360,q_jpegmini,w_360/v1445290715/100roxasavenue.com/photos/room-1/2.jpg);"></a>
            </div><?php /*
            * ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-1/3.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-1/3.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--z55n0b_7--/c_fill,h_360,q_jpegmini,w_360/v1445290705/100roxasavenue.com/photos/room-1/3.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-1/4.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-1/4.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--0D223TgA--/c_fill,h_360,q_jpegmini,w_360/v1445290755/100roxasavenue.com/photos/room-1/4.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-1/5.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-1/5.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--O0jE_MMq--/c_fill,h_360,q_jpegmini,w_360/v1445290734/100roxasavenue.com/photos/room-1/5.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-1/6.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-1/6.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s---RFLRnDB--/c_fill,h_360,q_jpegmini,w_360/v1445290728/100roxasavenue.com/photos/room-1/6.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-1/7.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-1/7.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--yIVXQwPM--/c_fill,h_360,q_jpegmini,w_360/v1445290710/100roxasavenue.com/photos/room-1/7.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-1/8.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-1/8.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--152pcAAY--/c_fill,h_360,q_jpegmini,w_360/v1445290707/100roxasavenue.com/photos/room-1/8.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-1/9.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-1/9.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--8PLfyKSP--/c_fill,h_360,q_jpegmini,w_360/v1445290722/100roxasavenue.com/photos/room-1/9.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-1/10.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-1/10.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--LRcmznLW--/c_fill,h_360,q_jpegmini,w_360/v1445290757/100roxasavenue.com/photos/room-1/10.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-1/11.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-1/11.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--tJrZpx05--/c_fill,h_360,q_jpegmini,w_360/v1445290759/100roxasavenue.com/photos/room-1/11.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-1/12.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-1/12.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--fg2vx_vZ--/c_fill,h_360,q_jpegmini,w_360/v1445290746/100roxasavenue.com/photos/room-1/12.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/room-1/13.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/room-1/13.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--k9zk388h--/c_fill,h_360,q_jpegmini,w_360/v1445290751/100roxasavenue.com/photos/room-1/13.jpg);"></a>
            </div><?php /*
            */ ?><div class="b-photos__photo-container">
                <a class="js-photos__photo b-photos__photo" href="/img/vendor/slir/w1024-h1024/img/photos/parking-1.jpg" style="background-image: url(<?php // /img/vendor/slir/w360-h360-c360x360/img/photos/parking-1.jpg ?>http://res.cloudinary.com/pajaroncreative/image/upload/s--kjrPSmif--/c_fill,h_360,q_jpegmini,w_360/v1445290228/100roxasavenue.com/photos/parking-1.jpg);"></a>
            </div>
        </div>
    </section>

    <sidebar class="b-site_index__sidebar">
        <section class="b-site_index__section b-site_index__section_isolated b-facilities">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="b-site_index__heading">Facilities</h3>

                        <h4 class="b-facilities__subheading">Experience an excellently located high-end dormitory, with first class facilities and amenities, at affordable monthly rates</h4>

                        <ul class="b-facilities__points">
                            <li class="b-facilities__point"><span class="fa fa-sort b-facilities__point-icon"></span>Elevator service at all floor levels</li>
                            <li class="b-facilities__point"><span class="fa fa-bed b-facilities__point-icon"></span>Spacious semi-furnished airconditioned rooms and bathrooms</li>
                            <li class="b-facilities__point"><span class="fa fa-car b-facilities__point-icon"></span>Basement parking</li>

                        </ul>
                    </div>

                    <div class="col-sm-6">
                        <ul class="b-facilities__points">
                            <li class="b-facilities__point"><span class="fa fa-video-camera b-facilities__point-icon"></span>CCTV, cable ready and intercom connections</li>
                            <li class="b-facilities__point"><span class="fa fa-shield b-facilities__point-icon"></span>24-hour round the clock security service personnel</li>
                            <li class="b-facilities__point"><span class="fa fa-fire b-facilities__point-icon"></span>Built-in automatic fire protection and sprinkler systems</li>
                            <li class="b-facilities__point"><span class="fa fa-bolt b-facilities__point-icon"></span>Stand-by generator set (ATS)</li>
                            <li class="b-facilities__point"><span class="fa fa-tint b-facilities__point-icon"></span>Hot and cold water facility</li>
                        </ul>

                        <p class="b-facilities__footnote">For rent or lease high ceiling commercial spaces at the ground floor</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="b-site_index__section b-site_index__section_isolated b-rates">
            <div class="container">
                <h3 class="b-site_index__heading">Dorm Rates</h3>

                <div class="b-rates__items">
                    <div class="b-rates__item b-rates__item--odd">
                        <h4 class="b-rates__item-title">Long term (12 months or more)</h4>

                        <table class="b-rates__item-table">
                            <tr>
                                <th>
                                    Room for 1
                                </th>
                                <td>
                                    <ul>
                                        <li>Double bed</li>
                                        <li>P12,000 / month</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Room for 2
                                </th>
                                <td>
                                    <ul>
                                        <li>Twin bed</li>
                                        <li>P6,000 / month / head</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                        <ul>
                            <li>2 months' security deposit</li>
                            <li>1-month advance</li>
                            <li>Electricity and water not included</li>
                            <li>No visitors allowed inside room after 9pm</li>
                            <li>No cooking and laundry inside room</li>
                            <li>Appliances, linens and toiletries not provided</li>
                        </ul>
                    </div>

                    <?php /*
                    <div class="b-rates__item b-rates__item--even">
                        <h4 class="b-rates__item-title">Short term (2 to 5 months)</h4>

                        <table class="b-rates__item-table">
                            <tr>
                                <th>
                                    Room for 1
                                </th>
                                <td>
                                    <ul>
                                        <li>Double bed</li>
                                        <li>P13,000 / month</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Room for 2
                                </th>
                                <td>
                                    <ul>
                                        <li>Twin bed</li>
                                        <li>P6,500 / month / head</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                        <ul>
                            <li>1-month security deposit</li>
                            <li>1-month advance</li>
                            <li>Electricity and water not included</li>
                            <li>No visitors allowed inside room after 9pm</li>
                            <li>No cooking and laundry inside room</li>
                            <li>Appliances, linens and toiletries not provided</li>
                        </ul>
                    </div>

                    <hr class="b-rates__separators">

                    <div class="b-rates__item b-rates__item--odd">
                        <h4 class="b-rates__item-title">Short term (1 month)</h4>

                        <table class="b-rates__item-table">
                            <tr>
                                <th>
                                    Room for 1
                                </th>
                                <td>
                                    <ul>
                                        <li>Double bed</li>
                                        <li>P14,000 / month</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Room for 2
                                </th>
                                <td>
                                    <ul>
                                        <li>Twin bed</li>
                                        <li>P7,000 / month / head</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                        <ul>
                            <li>15 days' security deposit</li>
                            <li>1-month advance</li>
                            <li>Electricity and water not included</li>
                            <li>No visitors allowed inside room after 9pm</li>
                            <li>No cooking and laundry inside room</li>
                            <li>Appliances, linens and toiletries not provided</li>
                        </ul>
                    </div>

                    <div class="b-rates__item b-rates__item--even">
                        <h4 class="b-rates__item-title">Daily rates</h4>

                        <table class="b-rates__item-table">
                            <tr>
                                <th>
                                    Room for 1
                                </th>
                                <td>
                                    <ul>
                                        <li>Double bed</li>
                                        <li>P900 / room</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Room for 2
                                </th>
                                <td>
                                    <ul>
                                        <li>Twin bed</li>
                                        <li>P950 / room</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                        <ul>
                            <li>Full payment upon check-in</li>
                            <li>Rooms are good for a <strong>maximum of 2 persons only</strong></li>
                            <li>Linens, toiletries, and waste basket provided</li>
                            <li>No visitors allowed inside room after 9pm</li>
                            <li>No cooking and laundry inside room</li>
                            <li>Appliances not provided</li>
                        </ul>
                    </div>
                    */ ?>
                </div>
            </div>
        </section>

        <section class="b-site_index__section b-site_index__section_isolated b-contact">
            <div class="container">
                <h3 class="b-site_index__heading">Get in touch</h3>

                <?php /*
                <div class="b-contact__facebook">
                    <?= Html::a(
                        '<i class="fa fa-facebook b-contact__facebook-icon"></i>100 Roxas Avenue on Facebook',
                        '#',
                        array('class' => 'btn btn-default b-contact__facebook-a')
                    ) ?>
                </div>
                */ ?>

                <p class="b-contact__phones">
                    <?= Html::a(
                        '<i class="fa fa-phone b-contact__phone-icon"></i>(+63) (82) 297-1926',
                        'tel:+63-82-297-1926',
                        array('class' => 'b-contact__phone')
                    ) ?>

                    <?= Html::a(
                        '<i class="fa fa-phone b-contact__phone-icon"></i>(+63) (82) 299-2325',
                        'tel:+63-82-299-2325',
                        array('class' => 'b-contact__phone')
                    ) ?>

                    <?= Html::a(
                        '<i class="fa fa-mobile b-contact__phone-icon"></i>(+63) (999) 884-4883',
                        'tel:+63-999-884-4883',
                        array('class' => 'b-contact__phone')
                    ) ?>

                    <?= Html::a(
                        '<i class="fa fa-mobile b-contact__phone-icon"></i>(+63) (917) 808-0005',
                        'tel:+63-917-808-0005',
                        array('class' => 'b-contact__phone')
                    ) ?>

                    <?= Html::a(
                        '<i class="fa fa-mobile b-contact__phone-icon"></i>(+63) (933) 812-6535',
                        'tel:+63-933-812-6535',
                        array('class' => 'b-contact__phone')
                    ) ?>
                </p>
            </div>
        </section>
    </sidebar>
</main>
