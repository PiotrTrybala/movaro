<?php
$photos = get_field("gallery");
?>

<section class="b-story container">
    <header class="b-story__header">
        <h2><span class="b-story__header-pre">Praca</span> na stojąco może pomóc w zwiększeniu poziomu energii
            i koncentracji. Badania pokazują, że osoby, które mogą zmieniać pozycję pracy, są bardziej skoncentrowane, zmotywowane
            i efektywne. </h2>
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