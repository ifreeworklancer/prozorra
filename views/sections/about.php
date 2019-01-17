<!-- About -->
<section id="about">
    <div class="img img--about" style="background-image:url('<?= $about['image']; ?>');"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-lg-5 mx-auto ml-lg-auto mr-lg-0">
                <div class="about-item">
                    <h2 class="about-item__title">
                        <?= $about['title']; ?>
                        <div class="decor">
                            <div class="decor-item"></div>
                            <div class="decor-item"></div>
                            <div class="decor-item"></div>
                        </div>
                    </h2>
                    <?= $about['text']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="decor-rhombus-white"></div>
    <div class="decor-rhombus-gradient decor-rhombus-gradient--top"></div>
    <div class="decor-rhombus-gradient decor-rhombus-gradient--middle"></div>
</section>