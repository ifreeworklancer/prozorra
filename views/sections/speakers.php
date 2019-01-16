<!-- Speakers -->
<section id="speakers">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto mx-auto">
                <h2 class="section-title">
                    <?= $speakers['title']; ?>
                    <div class="decor-square decor-square--primary decor-square--left"></div>
                    <div class="decor-square decor-square--primary decor-square--right"></div>
                </h2>
            </div>
            <?php
            $count;
            foreach ($speakers['list'] as $item) {
                $count++;
                echo '<div class="col-sm-8 col-lg-12">'
                    . '<div class="speakers-item">'
                    . '<div class="main-content ';
                if ($count % 2 === 1) {
                    echo 'order-2';
                } else echo 'order-2 order-lg-1';
                echo '"><div class="name">' . $item['name'] . '</div>'
                    . '<div class="position">' . $item['position'] . '</div>'
                    . '<p class="description">' . $item['description'] . '</p>'
                    . '</div>'
                    . '<div class="secondary-content ';
                if ($count % 2 === 1) {
                    echo 'order-1';
                } else echo 'order-1 order-lg-2';
                echo '"><div class="img" style="background-image: url(' . $item['image'] . ');"></div>'
                    . '</div>'
                    . '</div>'
                    . '</div>';
            }
            ?>
        </div>
    </div>
</section>