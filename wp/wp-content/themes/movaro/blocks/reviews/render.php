<?php
$title1 = get_field("title_1") ?? '';
$review_icon = get_field("review_icon") ?? '';
$reviews = get_field("reviews") ?? [];


?>

<section class="b-reviews">
    <header class="container b-reviews__header">
        <h2><?= esc_html($title1) ?></h2>
    </header>

    <?php if ($reviews): ?>
        <div class="swiper b-reviews__swiper">
            <div class="swiper-wrapper b-reviews__swiper-wrapper">
                <?php for ($j = 0; $j < 3; $j++): ?>
                    <div class="b-reviews__content">
                        <?php foreach ($reviews as $review): ?>
                            <div class="c-review">
                                <header class="c-review__header">
                                    <?php for ($i = 0; $i < $review['stars']; $i++): ?>
                                        <div class="c-review__header-star">
                                            <?php if ($review_icon): ?>
                                                <?= wp_get_attachment_image($review_icon['ID'], 'thumbnail') ?>
                                            <?php endif; ?>
                                        </div>
                                    <?php endfor; ?>
                                </header>
                                <div class="c-review__content">
                                    <p><?= wp_trim_words(esc_html($review['description'] ?? '')) ?></p>
                                </div>
                                <footer class="c-review__footer">
                                    <h3><?= esc_html($review['username'] ?? '') ?></h3>
                                </footer>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    <?php endif; ?>
</section>