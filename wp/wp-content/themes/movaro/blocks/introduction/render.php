<?php
$photo = get_field("introduction_photo");

$logo = get_field("logo", "options");
$logo_partner = get_field("logo_partner", "options");
?>

<section class="b-introduction container">

    <div class="b-introduction__photo">
        <?= wp_get_attachment_image($photo['ID'], 'large') ?>
    </div>

    <div class="b-introduction__container">
        <header class="b-introduction__container-header">
            <h3>Kim jesteśmy?</h3>
            <h2>Poznaj naszą firmę</h2>
        </header>
        <div class="b-introduction__container-partner">
            <div class="b-introduction__container-logo">
                <div class="b-introduction__container-logo-main">
                    <?= wp_get_attachment_image($logo['ID'], 'small') ?>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7" fill="none">
                    <path d="M0.137654 1.01853L1.00481 0.151381L6.63442 5.781L5.76727 6.64815L0.137654 1.01853ZM5.89115 -2.63481e-05L6.78583 0.894655L0.894693 6.78579L1.12899e-05 5.89111L5.89115 -2.63481e-05Z" fill="#FFC107" />
                </svg>
                <div class="b-introduction__container-logo-partner">
                    <?= wp_get_attachment_image($logo_partner['ID'], 'small') ?>
                </div>
            </div>
            <p>
                W Movaro wierzymy, że perfekcja tkwi w detalach, dlatego za wszystkie elementy drewniane odpowiada producent mebli wykonywanych tylko i wyłącznie z litego drewna - firma Meble Bory. Dzięki ponad 40 letniej tradycji masz pewność, że nasze zapewnienia o regeneracji Twojego blatu są gwarantowane.
            </p>
        </div>
        <div class="b-introduction__container-content">
            <ul class="b-introduction__container-list">
                <li class="b-introduction__container-list-header">Nasza misja</li>
                <li class="b-introduction__container-list-description">Poprawa komfortu pracy i zdrowia dzięki inteligentnym rozwiązaniom ergonomicznym.</li>
            </ul>
            <ul class="b-introduction__container-list">
                <li class="b-introduction__container-list-header">Nasza wizja</li>
                <li class="b-introduction__container-list-description">Jako producent biurek Movaro, stawiamy na najwyższą jakość w każdym aspekcie naszych produktów. Dlatego przy tworzeniu drewnianych elementów, w tym blatów, współpracujemy z firmą Meble Bory. Ich wieloletnie doświadczenie i precyzja w obróbce drewna gwarantują, 
że nasze biurka są nie tylko ergonomiczne, ale również trwałe i piękne.</li>
            </ul>
        </div>
        <footer class="b-introduction__container-footer">
            <p>Nasze biurka wykonane są z materiałów najwyższej jakości, które zapewniają trwałość nawet przy codziennym intensywnym użytkowaniu. Solidna konstrukcja, połączona z zaawansowaną technologią, sprawia, że biurka wytrzymują duże obciążenia i częstą zmianę ustawień, co czyni je idealnym wyborem do biur oraz przestrzeni domowych.</p>
        </footer>
    </div>
</section>