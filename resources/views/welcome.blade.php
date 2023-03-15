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


<div id="services" class="pricing-tables">
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