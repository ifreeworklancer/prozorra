</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="container">
        <div class="row justify-content-around align-items-center">
            <div class="col-auto">
                <a href="/" class="logo">
                    лого
                </a>
            </div>
            <div class="col-sm-9">
                <div class="footer-item">
                    <ul class="footer-menu">
                        <?php
                        foreach ($nav as $key => $value) {
                            echo '<li><a href="#' . $key . '"' . 'class="scroll-link">' . $value . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="../dist/app.js"></script>
</body>

</html>