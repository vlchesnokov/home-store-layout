<footer class="footer">
    <div class="container">
        <a class="phone" href="tel:<?php the_field('phone') ?>">
            <?php the_field('phone') ?>
        </a>
        <div class="footer__email">
            <?php the_field('email') ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>