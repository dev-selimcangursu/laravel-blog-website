<header id="header" class="header">
    {{-- Mobile Menu::Başlangıç --}}
    <div class="mobile__menu__wrapper">
        <div class="mobile__menu__logo">
            <span>BLOG WEB SİTEM</span>
            <a type="button" class="mobile__menu__close__button"><i class="bi bi-x-lg"></i></a>
        </div>
        <div class="mobile__menu__main__list">
            <ul class="mobile__menu__main__list__wrapper">
                <li><a class="mobile__menu__main__link" href="">Anasayfa</a></li>
                <li><a class="mobile__menu__main__link" href="">Gelecek</a></li>
                <li><a class="mobile__menu__main__link" href="">Kültür Sanat</a></li>
                <li><a class="mobile__menu__main__link" href="">Spor</a></li>
                <li><a class="mobile__menu__main__link" href="">Bilim ve Teknoloji</a></li>
                <li><a class="mobile__menu__main__link" href="">Çevre</a></li>
                <li><a class="mobile__menu__main__link" href="">Eğitim</a></li>
                <li><a class="mobile__menu__main__link" href="">Yaşam</a></li>
            </ul>
        </div>
        <div class="mobile__menu__search">
            <h3 style="text-align: center;margin-bottom:10px">Site İçi Arama</h3>
           <div class="mobile__menu__search__item">
              <input id="mobile__menu__search__input" type="text" placeholder="Ne Arıyorsun ?">
              <a id="mobile__menu__search__icon" href=""><i class="bi bi-search"></i></a>
            </div>
        </div>
        <div class="mobile__menu__social__media">
            <ul>
                <li><a class="mobile__menu__social__media__item" href=""> <i class="bi bi-facebook"></i></a></li>
                <li><a class="mobile__menu__social__media__item" href=""><i class="bi bi-twitter-x"></i></a></li>
                <li><a class="mobile__menu__social__media__item" href=""> <i class="bi bi-youtube"></i></a></li>
                <li><a class="mobile__menu__social__media__item" href=""> <i class="bi bi-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    {{-- Mobile Menu::Son -- }}
    {{-- Header Top::Başlangıç --}}
    <div class="header__top">
        {{-- HeaderTop Sosyal Medya::Başlangıç --}}
        <div class="header__top__social__media__list">
            <div class="header__top__social__media__area">
                <i class="bi bi-facebook"></i>
                <span>3K</span>
            </div>
            <div class="header__top__social__media__area">
                <i class="bi bi-twitter-x"></i>
                <span>5K</span>
            </div>
            <div class="header__top__social__media__area">
                <i class="bi bi-youtube"></i>
                <span>7K</span>
            </div>
            <div class="header__top__social__media__area">
                <i class="bi bi-instagram"></i>
                <span>10K</span>
            </div>    
        </div>
        {{-- HeaderTop Sosyal Medya::Son --}}
        {{-- HeaderTop Logo::Başlangıç --}}
        <div class="header__top__logo__area">
           {{-- <img id="header__top__logo" src="" alt="blog__logo"> --}}
           <p>BLOG WEB SİTEM</p>
        </div>
        {{-- HeaderTop Logo::Son --}}
        {{-- HeaderTop İkon::Başlangıç --}}
        <div class="header__top__icon__area">
            <a class="header__top__icon" href=""><i class="bi bi-person-circle"></i></a>
            <a class="header__top__icon" id="openSearchModal" href=""><i class="bi bi-search"></i></a>
            <a class="header__top__mobile__menu" href=""><i class="bi bi-list"></i></a>

        </div>
        {{-- HeaderTop İkon::Son --}}
    </div>
    {{-- HeaderTop::Son --}}
    {{-- Header Bottom::Başlangıç --}}
    <div class="header__bottom">
            <ul class="header__bottom__menu__list">
                <li class="header__bottom__menu">
                    <a class="header__bottom__menu__link" href="">Anasayfa</a>
                    <span class="header__bottom__menu__bottom"></span>
                </li>
                <li class="header__bottom__menu">
                    <a class="header__bottom__menu__link" href="">Gelecek</a>
                    <span class="header__bottom__menu__bottom"></span>
                </li>
                <li class="header__bottom__menu">
                    <a class="header__bottom__menu__link" href="">Tarih</a>
                    <span class="header__bottom__menu__bottom"></span>
                </li>
                <li class="header__bottom__menu">
                    <a class="header__bottom__menu__link" href="">Kültür-Sanat</a>
                    <span class="header__bottom__menu__bottom"></span>
                </li>
                <li class="header__bottom__menu">
                    <a class="header__bottom__menu__link" href="">Spor</a>
                    <span class="header__bottom__menu__bottom"></span>
                </li>
                <li class="header__bottom__menu">
                    <a class="header__bottom__menu__link" href="">Bilim ve Teknoloji</a>
                    <span class="header__bottom__menu__bottom"></span>                
                </li>
                <li class="header__bottom__menu">
                    <a class="header__bottom__menu__link" href="">Çevre</a>
                    <span class="header__bottom__menu__bottom"></span>
                </li>
                <li class="header__bottom__menu">
                    <a class="header__bottom__menu__link" href="">Eğitim</a>
                    <span class="header__bottom__menu__bottom"></span>
                </li>
                <li class="header__bottom__menu">
                    <a class="header__bottom__menu__link" href="">Yaşam</a>
                    <span class="header__bottom__menu__bottom"></span>                
                </li>
            </ul>
    </div>
    <hr>
    {{-- Header Bottom::Son --}}
</header>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    // Mobile Görünüm Aktif Pasif Hale Getirme::Başlangıç
    let mobileMenuCloseButton = document.querySelector(".mobile__menu__close__button");
    let mobileMenuWrapper = document.querySelector(".mobile__menu__wrapper");
    let headerTopMobileMenu = document.querySelector(".header__top__mobile__menu");
    let openSearchModal = document.querySelector('#openSearchModal');

    headerTopMobileMenu.addEventListener("click", function (e) {
        e.preventDefault();
        mobileMenuWrapper.classList.add("active");
    });
    mobileMenuCloseButton.addEventListener("click", function (e) {
        e.preventDefault();
        mobileMenuWrapper.classList.remove("active");
    });
    // Mobile Görünüm Aktif Pasif Hale Getirme::Son

    // Search Butonuna Basıldığında Mobile Görünüm Aktif Hale Getirilme:Başlangıç
    openSearchModal.addEventListener('click',function(e){
        e.preventDefault();
        mobileMenuWrapper.classList.add("active");  
    })
    // Search Butonuna Basıldığında Mobile Görünüm Aktif Hale Getirilme:Son
});

</script>
