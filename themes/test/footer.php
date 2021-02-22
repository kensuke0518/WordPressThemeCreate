    <?php if(is_single()): ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <?php endif; ?>
    <?php
    wp_enqueue_script('first-index',get_template_directory_uri().'/js/index.js');
    wp_footer();
    ?>
</body>
</html>