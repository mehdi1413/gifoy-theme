<?php
/**
 * About Page: counter section
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<div class="counter-area pt-50 pb-50 rtl">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon/sale.svg'); ?>" alt="">
                    </div>
                    <div class="counter-info">
                        <div class="counter-amount">
                            <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                            <span class="counter-sign">k</span>
                        </div>
                        <h6 class="title">کل فروش </h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon/rate.svg'); ?>" alt="">
                    </div>
                    <div class="counter-info">
                        <div class="counter-amount">
                            <span class="counter" data-count="+" data-to="90" data-speed="3000">90</span>
                            <span class="counter-sign">k</span>
                        </div>
                        <h6 class="title">مشتریان خوشحال</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon/employee.svg'); ?>" alt="">
                    </div>
                    <div class="counter-info">
                        <div class="counter-amount">
                            <span class="counter" data-count="+" data-to="150" data-speed="3000">150</span>
                            <span class="counter-sign">+</span>
                        </div>
                        <h6 class="title">کارگران تیم</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon/award.svg'); ?>" alt="">
                    </div>
                    <div class="counter-info">
                        <div class="counter-amount">
                            <span class="counter" data-count="+" data-to="30" data-speed="3000">30</span>
                            <span class="counter-sign">+</span>
                        </div>
                        <h6 class="title">برنده جایزه شوید</h6></div>
                </div>
            </div>
        </div>
    </div>
</div>