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
                                <a href="tel:<?= phone_link($contacts['phone']) ?>">
                                    <div class="icon">
                                        <svg width="20" height="30"> 
                                            <use xlink:href="#phone-icon"></use>
                                        </svg>
                                    </div>
                                    <?= $contacts['phone']; ?>
                                </a>
                            </li>
                            <li>
                                <a href="tel:<?= phone_link($contacts['messenger']) ?>">
                                    <div class="icon">
                                        <svg width="15" height="15">
                                            <use xlink:href="#telegram-icon"></use>
                                        </svg>
                                        <svg width="15" height="15">
                                            <use xlink:href="#viber-icon"></use>
                                        </svg>
                                        <svg width="15" height="15">
                                            <use xlink:href="#whatsapp-icon"></use>
                                        </svg>
                                    </div>
                                    <?= $contacts['messenger']; ?>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:<?= $contacts['email']; ?>">
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
</section>