<?php
$logo_footer = get_field("logo_footer", "options");
$landing_page_link = get_field("landing_page_link", "options");
$logo_producer = get_field("logo_producer", "options");
$link_producer = get_field("producer_link", "options");

$privacy_policy_link = get_field("privacy_policy_link", "options");
$privacy_policy_label = get_field("label_privacy_policy", "options");
?>

<footer class="c-footer">
    <svg class="c-footer__shadow" xmlns="http://www.w3.org/2000/svg" width="437" height="252" viewBox="0 0 437 252" fill="none">
        <g filter="url(#filter0_f_43_438)">
            <path d="M237 330.82L201.95 407.027L105.495 616L11.4855 430.925H-101L-7.80546 225.404L55.5016 86L122.341 329.758L236.457 330.82H237Z" fill="#FFD338" />
        </g>
        <defs>
            <filter id="filter0_f_43_438" x="-301" y="-114" width="738" height="930" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_43_438" />
            </filter>
        </defs>
    </svg>
    <div class="c-footer__navigation">
        <div class="c-footer__logo">
            <a href="<?= esc_url($landing_page_link) ?>">
                <?php if ($logo_footer): ?>
                    <?= wp_get_attachment_image($logo_footer['ID'], 'small') ?>
                <?php else: ?>
                    <span class="c-footer__logo-alt">Movaro</span>
                <?php endif; ?>
            </a>
        </div>
        <nav class="c-footer__nav">
            <?= wp_nav_menu(['menu' => 'header-menu']) ?>
        </nav>
    </div>
    <div class="c-footer__row">
        <a href="<?= esc_url($privacy_policy_link) ?>" class="c-footer__privacy-policy">
            <?= esc_html($privacy_policy_label) ?>
        </a>

        <div class="c-footer__producer">
            <span><?= __("Realizacja", "movaro") ?></span>
            <a href="<?= esc_url($link_producer) ?>" class="c-footer__producer-link" target="_blank">
                <?php if ($logo_producer): ?>
                    <?= wp_get_attachment_image($logo_producer['ID'], 'small') ?>
                <?php else: ?>
                    <span class="c-footer__producer-alt">Webcrafters Studio</span>
                <?php endif; ?>
            </a>
        </div>
    </div>
</footer>
</main>
<?php wp_footer(); ?>
</body>

</html>