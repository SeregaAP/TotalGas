@extends('layouts.homelayout')

@section('content')
    <section class="offer page-section-1" style="background: url({{ asset('res/image/offer-bg-1.jpg') }});background-repeat: no-repeat;background-size: cover;">
        <div class="offer__cont">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="offer__title">
                            <h1>{{ __('msg.hero.title') }}<span>{{ __('msg.hero.title_sp') }}</span></h1>
                            <p>
                                {{ __('msg.hero.sub') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="offer__submit">
                            <a class="btn-all btn-popup-manager" href="#">{{ __('msg.hero.btn_txt') }}</a>
                        </div>
                        <div class="offer__cards">
                            <div class="offer__cards-itm">
                                <a href="#"><i class="fa-brands fa-github"></i></a>
                            </div>
                            <div class="offer__cards-itm">
                                <a href="https://www.behance.net/gallery/136997429/Web-design/modules/774846333"><i class="fa-brands fa-behance"></i></a>
                            </div>
                            <div class="offer__cards-itm">
                                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about page-section-2">
        <div class="about__dicorate">
            <img src="{{ asset('res/image/about-dicorate-img.png') }}" alt="abou dicorate image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-h2">
                        <h2>{{ __('msg.about.title') }}<span>{{ __('msg.about.title_sp') }}</span></h2>
                        <p>{{ __('msg.about.sub') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about__cont">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about__flex">
                            <div class="about__flex_item">
                                <span class="about__flex_item-numerate">01</span>
                                <img width="100%" src="{{ asset('res/image/wordpress-img.jpg') }}" alt="about item image">
                                <div class="about__flex_item-cont">
                                    <div class="about__flex_item-cont-txt">
                                        <h4>Сайт на wordpress</h4>
                                        <p>Здесь можно посмотреть как происходит разработка на cms wordpress</p>
                                    </div>
                                    <a href="#" class="btn-all">Подробнее</a>
                                </div>
                            </div>
                            <div class="about__flex_item">
                                <span class="about__flex_item-numerate">02</span>
                                <img width="100%" src="{{ asset('res/image/modx-img.jpg') }}" alt="about item image">
                                <div class="about__flex_item-cont">
                                    <div class="about__flex_item-cont-txt">
                                        <h4>Разработка на modx</h4>
                                        <p>Здесь можно посмотреть как происходит разработка на cms modx</p>
                                    </div>
                                    <a href="#" class="btn-all">Подробнее</a>
                                </div>
                            </div>
                            <div class="about__flex_item">
                                <span class="about__flex_item-numerate">03</span>
                                <img width="100%" src="{{ asset('res/image/laravel-img.jpg') }}" alt="about item image">
                                <div class="about__flex_item-cont">
                                    <div class="about__flex_item-cont-txt">
                                        <h4>Разработка на laravel</h4>
                                        <p>Здесь можно посмотреть как происходит разработка на фреймворке laravel</p>
                                    </div>
                                    <a href="#" class="btn-all">Подробнее</a>
                                </div>
                            </div>
                            <div class="about__flex_item">
                                <span class="about__flex_item-numerate">04</span>
                                <img width="100%" src="{{ asset('res/image/figma-img.jpg') }}" alt="about item image">
                                <div class="about__flex_item-cont">
                                    <div class="about__flex_item-cont-txt">
                                        <h4>Разработка дизайна</h4>
                                        <p>Как мы разрабатываем дизаин для будущего сайта</p>
                                    </div>
                                    <a href="#" class="btn-all">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about__step">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about__step-cont">
                            <div class="about__step-cont-itm">
                                <span class="about__step-itm-txt">
                                    {{ __('msg.about.step_txt_1') }}
                                </span>
                                <span class="about__step-itm-circle"></span>
                            </div>
                            <div class="about__step-cont-itm">
                                <span class="about__step-itm-txt">
                                    {{ __('msg.about.step_txt_2') }}
                                </span>
                                <span class="about__step-itm-circle"></span>
                            </div>
                            <div class="about__step-cont-itm">
                                <span class="about__step-itm-txt">
                                    {{ __('msg.about.step_txt_3') }}
                                </span>
                                <span class="about__step-itm-circle"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service page-section-3">
        <div class="service__dicorate">
            <img src="{{ asset('res/image/servicet-dicorate-img.png') }}" alt="service dicorate image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-h2">
                        <h2>{{ __('msg.service.title') }}<span>{{ __('msg.service.title_sp') }}</span></h2>
                        <p>{{ __('msg.service.sub') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="service__cont">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service__column">
                            <div class="service__col-one">
                                <div class="service__col-itm">
                                    <span class="service__col-itm-circle"></span>
                                    <p>{{ __('msg.service.lists')[0] }}</p>
                                </div>
                                <div class="service__col-itm">
                                    <span class="service__col-itm-circle"></span>
                                    <p>{{ __('msg.service.lists')[1] }}</p>
                                </div>
                                <div class="service__col-itm">
                                    <span class="service__col-itm-circle"></span>
                                    <p>{{ __('msg.service.lists')[2] }}</p>
                                </div>
                                <div class="service__col-itm">
                                    <span class="service__col-itm-circle"></span>
                                    <p>{{ __('msg.service.lists')[3] }}</p>
                                </div>
                                <div class="service__col-itm">
                                    <span class="service__col-itm-circle"></span>
                                    <p>{{ __('msg.service.lists')[4] }}</p>
                                </div>
                                <div class="service__col-itm">
                                    <span class="service__col-itm-circle"></span>
                                    <p>{{ __('msg.service.lists')[5] }}</p>
                                </div>
                            </div>
                            <div class="service__col-two">
                                <picture>
                                    <source srcset="{{ asset('res/image/service-img-mobile.jpg') }}" type="image/jpg" media="(max-width: 900px)">
                                    <img src="{{ asset('res/image/service-img.jpg') }}" alt="service image">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service__submit">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service__submit-cont">
                            <a class="btn-all btn-popup-manager" href="#">{{ __('msg.service.btn_txt') }}</a>
                            <div class="service__submit-txt">
                                <p>
                                    {{ __('msg.service.sub_txt') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project page-section-4">
        <div class="project__dicorate">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project__dicorate-cont">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-h2">
                        <h2>{{ __('msg.project.title') }}<span>{{ __('msg.project.title_sp') }}</span></h2>
                        <p>{{ __('msg.project.sub') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="project__cont">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project__slider">
                            <div class="project__slider-itm">
                                <div class="project__slider-itm-frame">
                                    <div class="project__slider-info">
                                        <a class="project-btn" href="#">Подробнее</a>
                                    </div>
                                    <img src="{{ asset('res/image/project-itm-1.jpg') }}" alt="project item image">
                                </div>
                            </div>
                            <div class="project__slider-itm">
                                <div class="project__slider-itm-frame">
                                    <div class="project__slider-info">
                                        <a class="project-btn" href="#">Подробнее</a>
                                    </div>
                                    <img src="{{ asset('res/image/project-itm-2.jpg') }}" alt="project item image">
                                </div>
                            </div>
                            <div class="project__slider-itm">
                                <div class="project__slider-itm-frame">
                                    <div class="project__slider-info">
                                        <a class="project-btn" href="#">Подробнее</a>
                                    </div>
                                    <img src="{{ asset('res/image/project-itm-3.jpg') }}" alt="project item image">
                                </div>
                            </div>
                            <div class="project__slider-itm">
                                <div class="project__slider-itm-frame">
                                    <div class="project__slider-info">
                                        <a class="project-btn" href="#">Подробнее</a>
                                    </div>
                                    <img src="{{ asset('res/image/project-itm-4.jpg') }}" alt="project item image">
                                </div>
                            </div>
                            <div class="project__slider-itm">
                                <div class="project__slider-itm-frame">
                                    <div class="project__slider-info">
                                        <a class="project-btn" href="#">Подробнее</a>                                       
                                    </div>
                                    <img src="{{ asset('res/image/project-itm-5.jpg') }}" alt="project item image">
                                </div>
                            </div>
                        </div>
                        <div class="project__soc-cont">
                            <h4>{{ __('msg.project.soc') }}</h4>
                            <div class="project__soc-list">
                                <div class="project__soc-itm">
                                    <a href="#" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                                <div class="project__soc-itm">
                                    <a href="#" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-vk"></i></a>
                                </div>
                                <div class="project__soc-itm">
                                    <a href="#" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact page-section-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-h2">
                        <h2>{{ __('msg.contact.title') }}<span>{{ __('msg.contact.title_sp') }}</span></h2>
                        <p>{{ __('msg.contact.sub') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact__submit">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact__submit-cont">
                            <div class="contact__submit-image">
                                <img src="{{ asset('res/image/contact-image.jpg') }}" alt="contact image">
                                <div class="contact__submit-image-txt">
                                    <p>
                                        {{ __('msg.contact.cont_holder') }}
                                    </p>
                                </div>
                                <div class="contact__submit-img-flex">
                                    <div class="contact__submit-contact-inf">
                                        <div class="contact__submit-contact-itm">
                                            <a href="#"><i class="fa-brands fa-square-whatsapp"></i>+7 (708)- 331- 68- 59</a>
                                        </div>
                                        <div class="contact__submit-contact-itm">
                                            <a href="#"><i class="fa-solid fa-mobile-screen"></i>+7 (708)- 331- 68- 59</a>
                                        </div>
                                        <div class="contact__submit-contact-itm">
                                            <a href="#"><i class="fa-regular fa-envelope"></i>www.delphi7.ap55@gmail.com</a>
                                        </div>
                                        <div class="contact__submit-contact-addr">
                                            <p><i class="fa-solid fa-city"></i>Казакстан, Алматы, мкр:Айнабулак-2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact__submit-form">
                                <form action="#">
                                    <p>{{ __('msg.contact.label1') }}</p>
                                    <div class="contact__submit-form-group">
                                        <i class="fa-regular fa-envelope"></i>
                                        <input required type="email" name="email" placeholder="{{ __('msg.contact.p_holder1') }}">
                                    </div>
                                    <p>{{ __('msg.contact.label2') }}</p>
                                    <div class="contact__submit-form-group">
                                        <i class="fa-solid fa-mobile-screen"></i>
                                        <input class="phone" required type="text" name="phone" placeholder="{{ __('msg.contact.p_holder2') }}">
                                    </div>
                                    <div class="contact__submit-form-text">
                                        <span>{{ __('msg.contact.msg_holder') }}</span>
                                        <textarea required name="message"  ></textarea>
                                    </div>
                                    <button type="submit" class="btn-all">{{ __('msg.contact.btn_txt') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
