<!-- Reviews -->
<section id="reviews">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title">
                    <?= $reviews['title']; ?>
                    <div class="decor">
                        <div class="decor-square decor-square--primary"></div>
                        <div class="decor-square decor-square--primary"></div>
                        <div class="decor-square decor-square--primary"></div>
                    </div>
                </h2>
                <div class="slider-arrow">
                    <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-reviews"></div>
                    <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-reviews"></div>
                </div>
                <div class="reviews-slider">
                    <?php
                    foreach ($reviews['list'] as $item) :
                        ?>
                        <div class="reviews-slider-item">
                            <div class="main-content">
                                <div class="quote">
                                    <svg width="45" height="35">
                                        <use xlink:href="#quote-icon"></use>
                                    </svg>
                                </div>
                                <div class="text">
                                    <?= $item['text']; ?>
                                </div>
                                <div class="name">
                                    <?= $item['name']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</section>