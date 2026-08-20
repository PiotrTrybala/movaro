<?php
$title1 = get_field("title_1") ?? '';
$review_icon = get_field("review_icon") ?? '';
$reviews = get_field("reviews") ?? [];

?>

<section class="b-reviews container">
    <header class="b-reviews__header">
        <h2><?= htmlspecialchars($title1) ?></h2>
    </header>
    <div class="b-reviews__content">
        <?php foreach ($reviews as $review): ?>
            <div class="b-reviews__review">
                <div class="b-reviews__review-stars">
                    <?php for ($i = 0; $i < $review['stars']; $i++): ?>
                        <div class="b-reviews__review-star">
                            <?php if ($review_icon): ?>
                                <?= wp_get_attachment_image($review_icon['ID'], 'thumbnail') ?>
                            <?php endif; ?>
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="b-reviews__review-content">
                    <p><?= htmlspecialchars($review['description']) ?></p>
                </div>
                <div class="b-reviews__review-reviewer">
                    <h3><?= htmlspecialchars($review['username']) ?></h3>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</section>