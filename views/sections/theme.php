<!-- Theme -->
<section id="theme">
    <div class="banner">
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">
                    <?= $theme['title']; ?>
                </h2>
                <div class="theme-item">
                    <div class="theme-item-header">
                        <div class="theme-item-header__title">
                            <?= $theme['subtitle']; ?>
                        </div>
                    </div>
                    <div class="theme-item-body table-responsive">
                        <table class="table table-theme table-borderless">
                            <tbody>
                            <?php
                            foreach ($theme['list'] as $item) :
                                ?>
                                <tr>
                                    <td class="data"><?= $item['data']; ?></td>
                                    <td class="description"><?= $item['description']; ?></td>
                                    <?php if ($item['image'] != null) {
                                        echo '<td class="info info--image"><div class="img" style="background-image: url(' . $item['image'] . ');"></div></td>';
                                    } elseif ($item['name'] != null) {
                                        echo '<td class="info info--name">' . $item['name'] . '</td>';
                                    } elseif (($item['image'] == null) && ($item['name'] == null)) {
                                        echo '<td class="info info--not-info"></td>';
                                    }
                                    ?>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>