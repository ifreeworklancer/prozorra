<!-- Feedback -->
<section id="feedback">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="feedback-item">
                    <h5 class="feedback-item__title">
                        <?= $feedback['title']; ?>
                    </h5>
                    <form method="post" action="<?= $app_url ?>/send.php">
                        <input type="hidden" name="utm_source" value="<?= $_GET['utm_source'] ?? '' ?>">
                        <input type="hidden" name="utm_medium" value="<?= $_GET['utm_medium'] ?? '' ?>">
                        <input type="hidden" name="utm_campaign" value="<?= $_GET['utm_campaign'] ?? '' ?>">

                        <div class="form-row">
                            <div class="form-group">
                                <label for="user-name--<?php echo $name = generateRandomString() ?>"
                                       class="label-placeholder">
                                    Ваше имя
                                </label>
                                <input type="text" name="user_name" id="user-name--<?= $name ?>" class="form-control"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="user-email--<?php echo $email = generateRandomString() ?>"
                                       class="label-placeholder">
                                    Email
                                </label>
                                <input type="email" name="user_email" id="user-email--<?= $email ?>" class="form-control"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="user-phone--<?php echo $phone = generateRandomString() ?>"
                                       class="label-placeholder">
                                    Телефон
                                </label>
                                <input type="tel" name="user_phone" id="user-phone--<?= $phone ?>" class="form-control"
                                       required>
                            </div>
                            <div class="text-center w-100 mt-4">
                                <button type="submit" class="btn btn-primary">зареєструватися</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="decor-rhombus-gradient"></div>
            </div>
        </div>
    </div>
</section>