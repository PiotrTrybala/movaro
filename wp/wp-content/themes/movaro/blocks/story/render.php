<?php
$title1 = get_field("title_1") ?? '';
$photos = get_field("gallery") ?? [];
?>

<section class="b-story container">
    <h2 class="b-story__header"><?= esc_html($title1) ?></h2>
    <div class="b-story__photos">
        <?php if ($photos): ?>
            <?php foreach ($photos as $photo): ?>
                <div class="b-story__photo">
                    <?= wp_get_attachment_image($photo['ID'], 'large') ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

</section>