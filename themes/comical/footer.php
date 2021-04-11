    <footer class="l-footer">
        <div class="l-footer__inner">
            <?php if(is_single()): ?>
            <div class="l-footerLink">
                <ul class="l-footerLink_list">
                    <li class="l-footerLink__listItem"><a href="/">ホームへ戻る</a></li>
                </ul>
            </div>
            <?php endif; ?>
            <div class="l-copyright">
                <small class="l-copyright__item">(c)JavaScriptとな……？</small>
            </div>
        </div>
    </footer>
    <?php
    wp_enqueue_script('first-index',get_template_directory_uri().'/js/index.js');
    wp_footer();
    ?>
</body>
</html>