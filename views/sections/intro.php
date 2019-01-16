<!-- Intro -->
<section id="intro">
    <div class="container position-relative h-100">
        <div class="row h-100">
            <div class="col-sm-8 col-lg-6 d-flex align-items-center">
                <div class="intro-item">
                    <h1 class="intro-item__title">
                        <?= $intro['title']; ?>
                    </h1>
                    <ul class="custom-list custom-list--primary">
                        <li>
                            <?= $intro['description']; ?>
                        </li>
                    </ul>
                    <div class="intro-item__data">
                        <?= $intro['data']; ?>
                    </div>
                    <a href="#" class="btn btn-primary">
                        Зареєструватися
                    </a>
                </div>
            </div>
        </div>
        <a href="#about" class="scroll-down scroll-link d-none d-sm-block">
            <div class="scroll-down__text">
                скролл вниз
            </div>
            <div class="scroll-down__icon"></div>
        </a>
    </div>
</section>
