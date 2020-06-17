<footer>
    <div id="left-footer">
        <h3>Quick Links</h3>
        <p>
            <ul>
                <li>
                    <a href="<?php echo site_url(); ?>">Αρχική</a>
                </li>
                <li>
                    <a href="<?php echo site_url('/about'); ?>">Σχετικά με εμάς</a>
                </li>
<!--       Δεν έχω γράψει κάτι γι αυτο     -->
<!--                <li>-->
<!--                    <a href="--><?php //echo site_url('/privacy-policy'); ?><!--">Privacy Policy</a>-->
<!--                </li>-->
                <li>
                    <a href="<?php echo site_url('/blog'); ?>">Ποστ</a>
                </li>
                <li>
                    <a href="<?php echo site_url('/projects'); ?>">Μαθήματα</a>
                </li>
                <li>
                    <a href="<?php echo site_url('/contact'); ?>">Επικοινωνία</a>
                </li>
            </ul>
        </p>
    </div>
    <div id="right-footer">
        <h3>Ακολουθήστε την Εκπαιδευτική Δράση</h3>
        <div id="social-media-footer">
            <ul>
                <li>
                    <a href="https://www.facebook.com/Ekpaideutikh-Drash-106055440756973" target="_blank"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
<!--        <p>This website is developed for Giwta</p>-->
        <p>&copy; <?php echo date("Y"); ?> Εκπαιδευτική Δράση</p>
    </div>
</footer>

</main>

<?php wp_footer(); ?>

</body>

</html>