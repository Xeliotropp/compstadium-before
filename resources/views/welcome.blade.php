@extends('layouts.app')

@section('content')
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Добре дошли!</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{asset('frontend/assets/images/slider-dec.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="clients" class="the-clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>Check What <em>The Clients Say</em> About Our App Dev</h4>
                    <img src="assets/images/heading-line-dec.png" alt="" />
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eismod tempor incididunt ut labore et dolore magna.
                    </p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="naccs">
                    <div class="grid">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="menu">
                                    <div class="first-thumb active">
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>David Martino Co</h4>
                                                    <span class="date">30 November 2021</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                    <span class="category">Financial Apps</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>Jake Harris Nyo</h4>
                                                    <span class="date">29 November 2021</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                    <span class="category">Digital Business</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">4.5</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>May Catherina</h4>
                                                    <span class="date">27 November 2021</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                    <span class="category">Business &amp; Economics</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">4.7</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>Random User</h4>
                                                    <span class="date">24 November 2021</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                    <span class="category">New App Ecosystem</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">3.9</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="last-thumb">
                                        <div class="thumb">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <h4>Mark Amber Do</h4>
                                                    <span class="date">21 November 2021</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                    <span class="category">Web Development</span>
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-12">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span class="rating">4.3</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <ul class="nacc">
                                    <li class="active">
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content">
                                                            <img src="assets/images/quote.png" alt="" />
                                                            <p>
                                                                “Lorem ipsum dolor sit amet, consectetur
                                                                adpiscing elit, sed do eismod tempor idunte
                                                                ut labore et dolore magna aliqua darwin
                                                                kengan lorem ipsum dolor sit amet,
                                                                consectetur picing elit massive big blasta.”
                                                            </p>
                                                        </div>
                                                        <div class="down-content">
                                                            <img src="assets/images/client-image.jpg" alt="" />
                                                            <div class="right-content">
                                                                <h4>David Martino</h4>
                                                                <span>CEO of David Company</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content">
                                                            <img src="assets/images/quote.png" alt="" />
                                                            <p>
                                                                “CTO, Lorem ipsum dolor sit amet,
                                                                consectetur adpiscing elit, sed do eismod
                                                                tempor idunte ut labore et dolore magna
                                                                aliqua darwin kengan lorem ipsum dolor sit
                                                                amet, consectetur picing elit massive big
                                                                blasta.”
                                                            </p>
                                                        </div>
                                                        <div class="down-content">
                                                            <img src="assets/images/client-image.jpg" alt="" />
                                                            <div class="right-content">
                                                                <h4>Jake H. Nyo</h4>
                                                                <span>CTO of Digital Company</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content">
                                                            <img src="assets/images/quote.png" alt="" />
                                                            <p>
                                                                “May, Lorem ipsum dolor sit amet,
                                                                consectetur adpiscing elit, sed do eismod
                                                                tempor idunte ut labore et dolore magna
                                                                aliqua darwin kengan lorem ipsum dolor sit
                                                                amet, consectetur picing elit massive big
                                                                blasta.”
                                                            </p>
                                                        </div>
                                                        <div class="down-content">
                                                            <img src="assets/images/client-image.jpg" alt="" />
                                                            <div class="right-content">
                                                                <h4>May C.</h4>
                                                                <span>Founder of Catherina Co.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content">
                                                            <img src="assets/images/quote.png" alt="" />
                                                            <p>
                                                                “Lorem ipsum dolor sit amet, consectetur
                                                                adpiscing elit, sed do eismod tempor idunte
                                                                ut labore et dolore magna aliqua darwin
                                                                kengan lorem ipsum dolor sit amet,
                                                                consectetur picing elit massive big blasta.”
                                                            </p>
                                                        </div>
                                                        <div class="down-content">
                                                            <img src="assets/images/client-image.jpg" alt="" />
                                                            <div class="right-content">
                                                                <h4>Random Staff</h4>
                                                                <span>Manager, Digital Company</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="client-content">
                                                            <img src="assets/images/quote.png" alt="" />
                                                            <p>
                                                                “Mark, Lorem ipsum dolor sit amet,
                                                                consectetur adpiscing elit, sed do eismod
                                                                tempor idunte ut labore et dolore magna
                                                                aliqua darwin kengan lorem ipsum dolor sit
                                                                amet, consectetur picing elit massive big
                                                                blasta.”
                                                            </p>
                                                        </div>
                                                        <div class="down-content">
                                                            <img src="assets/images/client-image.jpg" alt="" />
                                                            <div class="right-content">
                                                                <h4>Mark Am</h4>
                                                                <span>CTO, Amber Do Company</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="pricing" class="pricing-tables">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4><em>Услугите</em>, които предлагаме</h4>
                    <img src="assets/images/heading-line-dec.png" alt="" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-item-regular">
                    <span class="price">$12</span>
                    <h4>Стандартна услуга</h4>
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/pricing-table-01.png')}}" alt="" />
                    </div>
                    <ul>
                        <li>Консултация при избори на части</li>
                        <li>Ремонт на компютър + Повърхностно Почистване</li>
                        <li class="non-function">Помощ при сглобяването на нова конфигурация</li>
                        <li class="non-function">Цялостно почистване на компютъра</li>
                        <li class="non-function">Премахване на вируси</li>
                        <li class="non-function">Преинсталиране на операционна система</li>
                    </ul>
                    <div class="border-button">
                        <a href="#">Купете сега!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-item-pro">
                    <span class="price">$25</span>
                    <h4>Плюс+ план</h4>
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/pricing-table-01.png')}}" alt="" />
                    </div>
                    <ul>
                        <li>Консултация при избори на части</li>
                        <li>Ремонт на компютър + Повърхностно Почистване</li>
                        <li>Помощ при сглобяването на нова конфигурация</li>
                        <li>Цялостно почистване на компютъра</li>
                        <li class="non-function">Премахване на вируси</li>
                        <li class="non-function">Преинсталиране на операционна система</li>
                    </ul>
                    <div class="border-button">
                        <a href="#">Купете сега!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pricing-item-regular">
                    <span class="price">$66</span>
                    <h4>Премуим план</h4>
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/pricing-table-02.png')}}" alt="" />
                    </div>
                    <ul>
                        <li>Консултация при избори на части</li>
                        <li>Ремонт на компютър + Повърхностно Почистване</li>
                        <li>Помощ при сглобяването на нова конфигурация</li>
                        <li>Цялостно почистване на компютъра</li>
                        <li>Премахване на вируси</li>
                        <li>Преинсталиране на операционна система</li>
                    </ul>
                    <div class="border-button">
                        <a href="#">Купете сега!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection