<?php
/**
 * Contact Page: Contact section
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<div class="contact-area pt-100 pb-80 rtl">
    <div class="container">
        <div class="contact-wrapper">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-map-location-dot"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>آدرس دفتر</h5>
                                        <p>25/B خیابان میل‌فورد الم درایو, نیویورک، ایالات متحده آمریکا</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-headset"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>تماس با ما</h5>
                                        <p>+2 123 4565 788</p>
                                        <p>+2 123 4565 789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-envelopes"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>ایمیل ما</h5>
                                        <p><a href="https://live.themewild.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c05020a032c09140d011c0009420f0301">[email&#160;protected]</a></p>
                                        <p><a href="https://live.themewild.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1b686e6b6b74696f5b7e637a766b777e35787476">[email&#160;protected]</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <div class="contact-info-icon">
                                        <i class="fal fa-alarm-clock"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>ساعات کاری</h5>
                                        <p>دوشنبه تا شنبه (۱۰ صبح - ۵ عصر)</p>
                                        <p>یکشنبه - <span class="text-danger">تعطیل</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <div class="contact-form-header">
                            <h2>تماس با ما</h2>
                            <p>این یک حقیقت ثابت است که یک خواننده وقتی به طرح صفحه نگاه می‌کند، از محتوای قابل خواندن صفحه که حتی به طور جزئی تغییر کرده است، حواسش پرت می‌شود.</p>
                        </div>
                        <form method="post" action="" id="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder =" نام شما" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="ایمیل شما" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="موضوع شما" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" cols="30" rows="4" class="form-control" placeholder="پیام خود را بنویسید"></textarea>
                            </div>
                            <button type="submit" class="theme-btn">ارسال پیام<i class="far fa-paper-plane"></i></button>
                            <div class="col-md-12 my-3">
                                <div class="form-messege text-success"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>