    <footer class="site-footer">
        <!-- Site Nav -->
        <nav class="site-nav">
            <?php
                $args = array(
                    'theme_location' => 'footer'
                );
            ?>
            <?php wp_nav_menu(); ?>
        </nav>
        <p><?php bloginfo('name'); ?> - &copy <?php echo date('Y'); ?></p>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>