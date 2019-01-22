<!-- Modal -->
<div class="custom-modal custom-modal--feedback">
    <div class="custom-modal-header">
        <h5 class="feedback-item__title">
            <?= $feedback['title']; ?>
        </h5>
    </div>
    <div class="custom-modal-body">
        <form method="post" action="./../../send.php">
            <div class="form-column">
                <div class="form-group">
                    <label for="user-name--<?php echo $name = generateRandomString() ?>" class="label-placeholder">
                        Ваше имя
                    </label>
                    <input type="text" name="user_name" id="user-name--<?= $name ?>" class="form-control" required>
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
                    <label for="user-phone--<?php echo $phone = generateRandomString() ?>" class="label-placeholder">
                        Телефон
                    </label>
                    <input type="tel" name="user_phone" id="user-phone--<?= $phone ?>" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">зарегистрироваться</button>
            </div>
        </form>
    </div>
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
</div>

<div class="modal-mask"></div>

