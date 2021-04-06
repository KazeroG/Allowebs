<?php
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (strpos($url, '?lang=en') !== false) {
 echo '<a class="header__menu-link header__menu-link--external" href="?lang=fr">
<span class="header__menu-link-in">Francais
<svg width="7" height="7" aria-hidden="true">
                        <use xlink:href="#link-arrow"></use>
                    </svg></span></a>';
} else {
 echo '<a class="header__menu-link header__menu-link--external" href="?lang=en">
<span class="header__menu-link-in">English<svg width="7" height="7" aria-hidden="true">
                        <use xlink:href="#link-arrow"></use>
                    </svg></span></a>';
}
