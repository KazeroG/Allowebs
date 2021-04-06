<div class="header__wrapper">
    <div class="header__logo-wrapper">
        <a class="header__logo">
            <span class="logo">
                <img src="https://allowebs.com/img/red.png" id="logo" alt="allowebs logo" />
            </span>
        </a>

        <div class="mobile-lang">
            <?php include_once 'lang/show-mobile.php'; ?>
            </svg>
            </span>
            </a>
        </div>

    </div>


    <nav class="header__navigation">
        <div class="header__menu">
            <ul class="header__list">
                <li class="header__menu-item"><a class="header__menu-link" href="#about" data-anchor="about"><span
                            class="header__menu-link-in"><?php echo $lang['menu-1']; ?></span></a></li>
                <li class="header__menu-item"><a class="header__menu-link" href="#how" data-anchor="how"><span
                            class="header__menu-link-in"><?php echo $lang['menu-2']; ?></span></a></li>
                <li class="header__menu-item"><a class="header__menu-link" href="#expertise" data-anchor="expertise">
                        <span class="header__menu-link-in"><?php echo $lang['menu-3']; ?></span></a></li>
                <li class="header__menu-item"><a class="header__menu-link" href="#more" data-anchor="more"><span
                            class="header__menu-link-in"><?php echo $lang['menu-4']; ?></span></a></li>
                <li class="header__menu-item">/</li>
                <li class="header__menu-item"><a class="header__menu-link" href="#footer" data-anchor="footer"><span
                            class="header__menu-link-in">Contact</span></a></li>
                <li class="header__menu-item">-</li>
                <li class="header__menu-item lang">
                    <?php include_once 'lang/show.php'; ?>

                </li>

                <li class="header__menu-item">
                    <label class="theme-switcher header__switcher" for="color-theme"
                        aria-label="commutateur de jeu de couleurs">
                        <input class="color-theme" aria-label="entrée pour changer le jeu de couleurs" type="checkbox"
                            checked="checked" name="color-theme" id="color-theme" />
                        <span class="theme-switcher__slider">
                            <svg class="theme-switcher__icon theme-switcher__icon--sun" width="16" height="16"
                                aria-hidden="true">
                                <use xlink:href="#sun"></use>
                            </svg>
                            <svg class="theme-switcher__icon theme-switcher__icon--moon" width="8" height="13"
                                aria-hidden="true">
                                <use xlink:href="#moon"></use>
                            </svg></span>
                    </label>
                </li>

            </ul>
            <a class="btn header__menu-button" href="#footer" data-anchor="footer">
                <?php echo $lang['menu-btn']; ?>

            </a>
        </div>
    </nav>
</div>
