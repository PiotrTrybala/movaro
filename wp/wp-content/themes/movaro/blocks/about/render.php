<?php
$image = get_field("about_us_image");
?>

<section class="b-about container">

    <div class="b-about__image">
        <?= wp_get_attachment_image($image['ID'], 'large'); ?>
    </div>
    <div class="b-about__content">
        <header class="b-about__content-header">
            <h2>Blat zawsze jak nowy - regeneracja za darmo!</h2>
            <ul class="b-about__content-list">
                <li>Darmowa regeneracja w ciągu 5-ciu lat od zakupu</li>
                <li>Profesjonalne szlifowanie i malowanie</li>
                <li>Blat jak nowy bez dodatkowych kosztów</li>
            </ul>
        </header>
        <p class="b-about__content-paragraph">
            Zależy nam na tym, aby Twoje biurko wyglądało doskonale przez lata! Dlatego oferujemy wyjątkową gwarancję na blat – jeśli w ciągu 5 lat od zakupu Twój blat ulegnie zużyciu lub wymaga odświeżenia, wyślij go do nas, a my zajmiemy się jego regeneracją zupełnie za darmo.
        </p>
        <a href="#" class="b-about__content-cta-button button--full">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M13.5 8.99993C13.4964 8.60535 13.3374 8.2281 13.0575 7.94993L9.84 4.72493C9.69948 4.58524 9.50939 4.50684 9.31125 4.50684C9.11311 4.50684 8.92302 4.58524 8.7825 4.72493C8.7122 4.79465 8.65641 4.8776 8.61833 4.969C8.58026 5.06039 8.56065 5.15842 8.56065 5.25743C8.56065 5.35644 8.58026 5.45447 8.61833 5.54586C8.65641 5.63726 8.7122 5.72021 8.7825 5.78993L11.25 8.24993H3.75C3.55109 8.24993 3.36032 8.32895 3.21967 8.4696C3.07902 8.61025 3 8.80102 3 8.99993C3 9.19884 3.07902 9.38961 3.21967 9.53026C3.36032 9.67091 3.55109 9.74993 3.75 9.74993H11.25L8.7825 12.2174C8.64127 12.3577 8.56154 12.5483 8.56083 12.7473C8.56013 12.9463 8.63852 13.1375 8.77875 13.2787C8.91898 13.4199 9.10958 13.4996 9.3086 13.5003C9.50762 13.5011 9.69877 13.4227 9.84 13.2824L13.0575 10.0574C13.3392 9.77742 13.4983 9.39711 13.5 8.99993Z" fill="#04071E" />
            </svg>
            <span>Wypełnij formularz i zyskaj gwarancję</span>
        </a>
        <span class="b-about__content-label">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <g clip-path="url(#clip0_64_96)">
                    <path d="M8 16C6.41775 16 4.87104 15.5308 3.55544 14.6518C2.23985 13.7727 1.21447 12.5233 0.608967 11.0615C0.00346629 9.59966 -0.15496 7.99113 0.153721 6.43928C0.462403 4.88743 1.22433 3.46197 2.34315 2.34315C3.46197 1.22433 4.88743 0.462403 6.43928 0.153721C7.99113 -0.15496 9.59966 0.00346629 11.0615 0.608967C12.5233 1.21447 13.7727 2.23985 14.6518 3.55544C15.5308 4.87104 16 6.41775 16 8C15.9977 10.121 15.1541 12.1545 13.6543 13.6543C12.1545 15.1541 10.121 15.9977 8 16ZM8 1.33334C6.68146 1.33334 5.39253 1.72433 4.2962 2.45687C3.19987 3.18942 2.34539 4.23061 1.84081 5.44878C1.33622 6.66695 1.2042 8.0074 1.46144 9.30061C1.71867 10.5938 2.35361 11.7817 3.28596 12.714C4.21831 13.6464 5.4062 14.2813 6.6994 14.5386C7.99261 14.7958 9.33305 14.6638 10.5512 14.1592C11.7694 13.6546 12.8106 12.8001 13.5431 11.7038C14.2757 10.6075 14.6667 9.31855 14.6667 8C14.6647 6.23249 13.9617 4.53792 12.7119 3.2881C11.4621 2.03828 9.76752 1.33528 8 1.33334Z" fill="#4F5481" />
                    <path d="M9.33341 12.6667H8.00008V8.00008H6.66675V6.66675H8.00008C8.3537 6.66675 8.69284 6.80722 8.94289 7.05727C9.19294 7.30732 9.33341 7.64646 9.33341 8.00008V12.6667Z" fill="#4F5481" />
                    <path d="M8 5.33325C8.55228 5.33325 9 4.88554 9 4.33325C9 3.78097 8.55228 3.33325 8 3.33325C7.44772 3.33325 7 3.78097 7 4.33325C7 4.88554 7.44772 5.33325 8 5.33325Z" fill="#4F5481" />
                </g>
                <defs>
                    <clipPath id="clip0_64_96">
                        <rect width="16" height="16" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <span>Wysyłka na koszt klienta</span>
        </span>
    </div>

</section>