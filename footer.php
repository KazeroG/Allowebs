<div class="footer__container container">
    <div class="footer__feedback">
        <h2 class="footer__title">Contact</h2>
        <p class="footer__subtitle">

            <?php echo $lang['slogan']; ?>

        </p>

        <div class="footer__form form">
            <form id="ajax-contact-form" method="post" action="contact.php">
                <div class="form-group input-wrapper input-wrapper--required white-text ">
                    <label for="name"></label>
                    <input type="text" class="form-control white-text " id="name" name="name"
                        placeholder="<?php echo $lang['last_name']; ?>">
                </div>
                <div class="form-group input-wrapper input-wrapper--required white-text">
                    <label for="email"></label>
                    <input type="text" class="form-control white-text " id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group input-wrapper white-text">
                    <label for="phone"></label>
                    <input type="text" class="form-control white-text " id="phone" name="phone"
                        placeholder="<?php echo $lang['phone']; ?>">
                </div>
                <div class="form-group input-wrapper autoresize-textarea white-text">
                    <label for="message"></label>
                    <textarea class="form-control white-text " id="message" name="message"
                        placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn"><?php echo $lang['submit']; ?></button>
            </form>
            <div id="form-messages">
            </div>
            <div class="form__bottom">
                <p class="form__disclaimer">
                    </br></br></br>
                    <?php echo $lang['disclaimer']; ?>
                </p>
            </div>
            </form>
        </div>
        </br></br>
        <div class="footer__socials">
            <p class="footer__subtitle"><?php echo $lang['footer__tool']; ?></p>
            <ul class="footer__socials-list socials">
                <li class="socials__item"><a class="socials__link" href="//seo.allowebs.com/" target="_blank"
                        rel="nofollow noopener noreferrer">SEO</a></li></br>
                <li class="socials__item"><a class="socials__link" href="//allowebs.com/groupe-entrepreneur"
                        target="_blank" rel="nofollow noopener noreferrer">Liste entreprise Quebec</a></li></br>
            </ul>
        </div>
    </div>
    <div class="footer__contacts">
        <div class="footer__contact">
            <div class="footer__subtitle"> <?php echo $lang['footer__subtitle']; ?>
            </div>
            <p class="footer__contact-text"><?php echo $lang['footer__subtitle-2']; ?><a class="link link--border2"
                    href="mailto:support@allowebs.com">support@allowebs.com</a></p>
        </div>
        <div class="footer__contact">
            <div class="footer__subtitle"><?php echo $lang['footer__subtitle-3']; ?></div>
            <p class="footer__contact-text footer__contact-text--call"><?php echo $lang['footer__subtitle-4']; ?>
                <a class="link link--border2" href="tel:+14383970133">+1 438 397 0133</a> ou
                <a class="link link--border2" href="tel:+15146613868">+1 514 661 3868</a>
                </br></br></br>
                <?php echo $lang['rendezvous']; ?>
            </p>
        </div></br></br>
        <div class="footer__socials">
            <p class="footer__subtitle"><?php echo $lang['footer__subtitle-7']; ?></p>
            <ul class="footer__socials-list socials">
                <li class="socials__item"><a class="socials__link" href="https://www.facebook.com/allowebs"
                        target="_blank" rel="nofollow noopener noreferrer">Facebook</a></li>
                <li class="socials__item"><a class="socials__link" href="https://g.page/allowebs?share" target="_blank"
                        rel="nofollow noopener noreferrer">Google</a></li>
                <li class="socials__item"><a class="socials__link" href="https://www.linkedin.com/company/allowebs"
                        target="_blank" rel="nofollow noopener noreferrer">Linkedin</a></li>

                <li class="socials__item"><a class="socials__link" href="https://b2bquotes.com/fournisseur/allowebs"
                        target="_blank" rel="nofollow noopener noreferrer">B2B Quotes</a></li>
                </br>
            </ul>
        </div>
    </div>
    <div class="footer__info">
        <div class="footer__copyright">
            <p> <a href="https://allowebs.com">
                    https://allowebs.com/ </a>
            </p>
        </div>
        <div class="footer__policy">
            <?php echo $lang['footer__policy']; ?>
        </div>
        <div class="footer__specia"><a class="link" href="https://allowebs.com/" aria-label="Allowebs" target="_blank">
                <img src="/img/white-icon.png"></a></div>
        <div class="footer__design">
            <?php echo $lang['copyright']; ?>
        </div>
    </div>
</div>

</footer>
</div>
<script src="js/vendor.min.js"></script>
<script src="js/main.min.js"></script>
<script src="js/onscroll.js"></script>
<script>
var startAnimation = function startAnimation(el) {
    el.classList.add('show');
};

var stopAnimation = function stopAnimation(el) {
    el.classList.remove('show');
};

var initLoader = function initLoader() {
    if (!(!!window.MSInputMethodContext && !!document.documentMode)) {
        var loader = document.querySelector('.loader');
        var loaderEndEl = document.querySelector('.loader__sky');
        var headerAnimatedEl = document.querySelector('.header-wrap');
        var introAnimatedEl = document.querySelector('.intro__head');

        if (loader) {
            loader.style.display = 'flex';
            window.disableBodyScroll(loader);

            if (sessionStorage.getItem('loader') === 'done') {
                loader.remove();
                window.enableBodyScroll(loader);
                startAnimation(headerAnimatedEl);
                startAnimation(introAnimatedEl);
            }

            sessionStorage.setItem('loader', 'done');
            loaderEndEl.addEventListener('animationend', function() {
                loader.remove();
                window.enableBodyScroll(loader);
                stopAnimation(headerAnimatedEl);
                stopAnimation(introAnimatedEl);
                setTimeout(function() {
                    startAnimation(headerAnimatedEl);
                    startAnimation(introAnimatedEl);
                });
            });
        } else {
            sessionStorage.setItem('loader', 'done');
        }
    }
};

initLoader();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/contact.js"></script>
