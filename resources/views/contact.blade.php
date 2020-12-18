@extends('layouts.app')
@section('title','Kontak Kami')
@section('content')
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Kontak Kami</h2>
                    <div class="breadcrumb__option">
                        <a href="{{url('/')}}">Beranda</a>
                        <span>Kontak Kami</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_phone"></span>
                    <h4>Telepon</h4>
                    <p>+62-3-8888-6868</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_pin_alt"></span>
                    <h4>Alamat</h4>
                    <p>JL. jalan Kabupaten Jember</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_clock_alt"></span>
                    <h4>Jam Buka</h4>
                    <p>10:00 - 23:00 WIB</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_mail_alt"></span>
                    <h4>Email</h4>
                    <p><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="523a373e3e3d12313d3e3d203e3b307c313d3f">[email&#160;protected]</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.377429831709!2d113.71487915058577!3d-8.164675784044405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd694351d727e69%3A0xec33c34804a10832!2sUniversitas%20Jember!5e0!3m2!1sid!2sid!4v1608196196365!5m2!1sid!2sid"
        height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <div class="map-inside">
        <i class="icon_pin"></i>
        <div class="inside-widget">
            <h4>TokoBuku</h4>
            <ul>
                <li>Phone: +62-345-6789</li>
                <li>Add: JL. jalan Kabupaten Jember</li>
            </ul>
        </div>
    </div>
</div>


<div class="contact-form spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact__form__title">
                    <h2>Leave Message</h2>
                </div>
            </div>
        </div>
        <form action="#">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <input type="text" placeholder="Your name">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="text" placeholder="Your Email">
                </div>
                <div class="col-lg-12 text-center">
                    <textarea placeholder="Your message"></textarea>
                    <button type="submit" class="site-btn">SEND MESSAGE</button>
                </div>
            </div>
        </form>
    </div>
</div>    
@endsection
