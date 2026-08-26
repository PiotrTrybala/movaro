<?php
$logo_footer = get_field("logo_footer", "options");
$landing_page_link = get_field("landing_page_link", "options");
$logo_producer = get_field("logo_producer", "options");
$link_producer = get_field("producer_link", "options");

$privacy_policy_link = get_field("privacy_policy_link", "options");
$privacy_policy_label = get_field("label_privacy_policy", "options");
?>

<div class="c-footer__wrapper">
    <footer class="c-footer container">
        <div class="c-footer__top">
            <div class="c-footer__top-logo">
                <a href="<?= esc_url($landing_page_link) ?>">
                    <?php if ($logo_footer): ?>
                        <?= wp_get_attachment_image($logo_footer['ID'], 'small') ?>
                    <?php else: ?>
                        <span class="c-footer__logo-alt">Movaro</span>
                    <?php endif; ?>
                </a>
            </div>
            <nav class="c-footer__top-nav">
                <?= wp_nav_menu(['menu' => 'header-menu']) ?>
            </nav>
        </div>
        <div class="c-footer__bottom">
            <a href="<?= esc_url($privacy_policy_link) ?>" class="c-footer__bottom-privacy-policy">
                <?= esc_html($privacy_policy_label) ?>
            </a>

            <div class="c-footer__bottom-producer">
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
</div>
<?php wp_footer(); ?>
</body>

</html>