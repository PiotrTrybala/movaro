<?php

$photo = get_field("introduction_photo");

$subtitle1 = get_field("subtitle_1") ?? '';
$title1 = get_field("title_1") ?? '';

$logo = get_field("logo", "options");
$logo_partner = get_field("logo_partner", "options");
$partner_link = get_field("logo_partner_link", "options") ?? '';

$logo_description = get_field("logo_description") ?? '';

$list1 = get_field("list_1") ?? [];

$description2 = get_field("description_2") ?? '';

$landing_page_link = get_field("landing_page_link") ?? '';

?>

<section class="b-introduction container">
    <div class="b-introduction__photo">
        <?php if ($photo): ?>
            <?= wp_get_attachment_image($photo['ID'], 'large') ?>
        <?php endif; ?>
    </div>
    <div class="b-introduction__content">
        <header class="b-introduction__content-header">
            <h3><?= esc_html($subtitle1) ?></h3>
            <h2><?= esc_html($title1) ?></h2>
        </header>
        <div class="b-introduction__content-showcase">
            <div class="b-introduction__content-logos">
                <a href="<?= esc_url($landing_page_link) ?>">
                    <?php if ($logo): ?>
                        <?= wp_get_attachment_image($logo['ID'], 'small') ?>
                    <?php else: ?>
                        <span>Movaro</span>
                    <?php endif; ?>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7" fill="none">
                    <path d="M0.137654 1.01853L1.00481 0.151381L6.63442 5.781L5.76727 6.64815L0.137654 1.01853ZM5.89115 -2.63481e-05L6.78583 0.894655L0.894693 6.78579L1.12899e-05 5.89111L5.89115 -2.63481e-05Z" fill="#FFC107" />
                </svg>
                <a href="<?= esc_url($partner_link) ?>">
                    <?php if ($logo_partner): ?>
                        <?= wp_get_attachment_image($logo_partner['ID'], 'small') ?>
                    <?php else: ?>
                        <span>Meble Bory</span>
                    <?php endif; ?>
                </a>
            </div>
            <div class="b-introduction__content-desc">
                <p><?= esc_html($logo_description) ?></p>
            </div>
            <div class="b-introduction__content-list">
                <ul>
                    <?php if ($list1): ?>
                        <?php foreach ($list1 as $item): ?>
                            <li class="b-introduction__container-list-item">
                                <div class="b-introduction__container-wrapper">
                                    <h5><?= htmlspecialchars($item['title'] ?? '') ?></h5>
                                    <span><?= htmlspecialchars($item['description'] ?? '') ?></span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <footer class="b-introduction__content-footer">
                <p><?= esc_html($description2) ?></p>
            </footer>
        </div>
    </div>
</section>