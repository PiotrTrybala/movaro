<?php
$title1 = get_field("title_1") ?? '';
$photos = get_field("gallery") ?? [];
?>

<section class="b-story container">
    <header class="b-story__header">
        <h2><?= htmlspecialchars($title1) ?></h2>
    </header>

    <div class="b-story__photos">
        <?php if ($photos && is_iterable($photos)): ?>
            <?php foreach ($photos as $photo): ?>
                <div class="b-story__photo">
                    <?= wp_get_attachment_image($photo['ID'], 'large'); ?>
                </div>
            <? endforeach; ?>
        <?php endif; ?>
    </div>
</section>