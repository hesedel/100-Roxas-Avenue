<?php
namespace frontend\views\site;

use Yii;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = '100 Roxas Avenue';

$this->registerMetaTag(['name' => 'description', 'content' => 'FamilyLife Philippines - ' . Yii::$app->params['description'] . '.']);
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
                    '<i class="fa fa-mobile b-contact__phone-icon"></i>(+63) (910) 107-4086',
                    'tel:+63-910-107-4086',
                    array('class' => 'b-contact__phone')
                ) ?>

                <?= Html::a(
                    '<i class="fa fa-mobile b-contact__phone-icon"></i>(+63) (909) 651-2437',
                    'tel:+63-909-651-2437',
                    array('class' => 'b-contact__phone')
                ) ?>

                <?= Html::a(
                    '<i class="fa fa-mobile b-contact__phone-icon"></i>(+63) (920) 928-0452',
                    'tel:+63-920-928-0452',
                    array('class' => 'b-contact__phone')
                ) ?>
            </p>
        </div>
    </section>
</main>
