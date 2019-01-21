<!-- Audience -->
<section id="audience">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center">
                    Закуповувати якісно — це велика проблема
                </h2>
                <ul class="custom-list custom-list--primary d-flex flex-column align-items-center">
                    <li>Як прописати документацію так, щоб у контролюючих органів не виникало питань?</li>
                    <li>Як прописати технічну документацію, якщо в цьому предметі закупівлі ви мало що розумiєте?</li>
                    <li>Як закупити ЯКIСНИЙ, а не просто дешевий товар?</li>
                </ul>
            </div>
        </div>
        <div class="audience-main">
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
    </div>
</section>