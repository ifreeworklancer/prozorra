<!-- Tariffs -->
<section id="tariffs">
<div class="image-item" style="background-image: url('<?= $tariffs['image']; ?>')"></div>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-end">
            <div class="col-sm-8 col-lg-5">
                <div class="tariffs-item">
                    <h2 class="section-title">
                        <?= $tariffs['title']; ?>                    
                    </h2>
                    <?= $tariffs['list']; ?>
                    <div class="price">
                        <div class="price-item">
                            Цена <span class="price-item__value">$<?= $tariffs['price']; ?></span>
                        </div>
                        <a href="#" class="btn btn-primary">зареєструватися</a>
                    </div>
                </div>
            </div>
            <div class=" col-lg-9">
                <div class="tariffs-free-item">
                    <div class="secondary-content">
                        <div class="img" style="background-image: url('<?= $tariffs['free_image']; ?>')"></div>
                    </div>
                    <div class="main-content">
                        <div class="title">
                            <?= $tariffs['free_title']; ?>
                        </div>
                        <p class="description">
                            <?= $tariffs['free_description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>