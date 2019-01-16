<!-- Feedback -->
<section id="feedback">
    <div class="container">
        <div class="row">
            <div class="col-sm-11 col-lg-10 mx-auto">
                <div class="feedback-item">
                    <h5 class="feedback-item__title">
                        <?= $feedback['title']; ?>
                    </h5>
                    <form action="#">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="user-name--<?php echo $name = generateRandomString() ?>" class="label-placeholder">
                                    Ваше имя
                                </label>
                                <input type="text" name="user_name" id="user-name--<?= $name ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="user-phone--<?php echo $phone = generateRandomString() ?>" class="label-placeholder">
                                    Телефон
                                </label>
                                <input type="tel" name="user_phone" id="user-phone--<?= $phone ?>" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">зарегистрироваться</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>