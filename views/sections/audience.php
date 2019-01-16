<!-- Audience -->
<section id="audience">
    <div class="container">
        <div class="row">
            <div class="col-auto mx-auto">
                <h2 class="section-title">
                    <?= $audience['title']; ?>
                    <div class="decor-square decor-square--primary decor-square--left"></div>
                    <div class="decor-square decor-square--primary decor-square--right"></div>
                </h2>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($audience['list'] as $item) :
                ?>
                <div class="col-sm-4">
                    <div class="audience-item">
                        <div class="img" style="background-image:url('<?= $item['image'] ?>');"></div>
                        <div class="content">
                            <div class="description">
                                <?= $item['description']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-12">
                <p class="audience-description">
                    <?= $audience['text']; ?>
                </p>
            </div>
        </div>
    </div>
</section>