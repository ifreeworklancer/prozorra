<!-- contacts -->
<section id="contacts">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-6 px-0">
                <div class="contacts-item">
                    <div class="content">
                        <h2 class="section-title">
                            <?= $contacts['title']; ?>
                            <div class="decor">
                                <div class="decor-item"></div>
                                <div class="decor-item"></div>
                                <div class="decor-item"></div>
                            </div>
                        </h2>
                        <ul>
                            <li>
                                <a href="tel:+38<?= phone_link($contacts['phone']) ?>" target="_blank">
                                    <div class="icon">
                                        <svg width="20" height="30"> 
                                            <use xlink:href="#phone-icon"></use>
                                        </svg>
                                    </div>
                                    <?= $contacts['phone']; ?>
                                </a>
                            </li>
                            <li>
                                <a href="tel:+38<?= phone_link($contacts['messenger']) ?>" target="_blank"><?= $contacts['messenger']; ?></a>
                            </li>
                            <li>
                                <a href="mailto:<?= $contacts['email']; ?>" target="_blank">
                                    <div class="icon">
                                        <svg width="20" height="20">
                                            <use xlink:href="#email-icon"></use>
                                        </svg>
                                    </div>
                                    <?= $contacts['email']; ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $contacts['address_link']; ?>" target="_blank">
                                    <div class="icon">
                                        <svg width="20" height="20">
                                            <use xlink:href="#address-icon"></use>
                                        </svg>
                                    </div>
                                    <?= $contacts['address']; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="developer">
        <?= date('Y') ?> Дизайн и разработка сайта компании <a href="https://impressionbureau.pro" target="_blank">Impression.Bureau</a>
    </div>
</section>