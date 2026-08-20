<?php


$introduction_photo = get_field("introduction_photo");
$subtitle1 = get_field("subtitle_1") ?? '';
$title1 = get_field("title_1") ?? '';
$logo1 = get_field("logo_1");
$logo2 = get_field("logo_2");
$logo_description = get_field("logo_description") ?? '';
$list1 = get_field("list_1") ?? [];
$description2 = get_field("description_2") ?? '';

?>

<section class="b-introduction container">

    <div class="b-introduction__photo">
        <?php if ($introduction_photo): ?>
            <?= wp_get_attachment_image($introduction_photo['ID'], 'large') ?>
        <?php endif; ?>
    </div>

    <div class="b-introduction__container">
        <header class="b-introduction__container-header">
            <h3><?= htmlspecialchars($subtitle1) ?></h3>
            <h2><?= htmlspecialchars($title1) ?></h2>
        </header>
        <div class="b-introduction__container-partner">
            <div class="b-introduction__container-logos">
                <div class="b-introduction__container-logo">
                    <?php if ($logo1): ?>
                        <?= wp_get_attachment_image($logo1['ID'], 'small') ?>
                    <?php endif; ?>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 7 7" fill="none">
                    <path d="M0.137654 1.01853L1.00481 0.151381L6.63442 5.781L5.76727 6.64815L0.137654 1.01853ZM5.89115 -2.63481e-05L6.78583 0.894655L0.894693 6.78579L1.12899e-05 5.89111L5.89115 -2.63481e-05Z" fill="#FFC107" />
                </svg>
                <div class="b-introduction__container-logo-partner">
                    <?php if ($logo2): ?>
                        <?= wp_get_attachment_image($logo2['ID'], 'small') ?>
                    <?php endif; ?>
                </div>
            </div>
            <p>
                <?= htmlspecialchars($logo_description); ?>
            </p>
        </div>
        <div class="b-introduction__container-content">

            <ul class="b-introduction__container-list">
                <?php foreach ($list1 as $item): ?>
                    <li class="b-introduction__container-list-item">
                        <div class="b-introduction__container-wrapper">
                            <h5><?= htmlspecialchars($item['title'] ?? '') ?></h5>
                            <span><?= htmlspecialchars($item['description'] ?? '') ?></span>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <footer class="b-introduction__container-footer">
            <p><?= htmlspecialchars($description2) ?></p>
        </footer>
    </div>
</section>