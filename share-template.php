<ul class="share">
    <li class="share__item">
        <a class="share__link"
           onclick="window.open('https://twitter.com/intent/tweet?text=<?php echo $title; ?>&amp;url=<?php echo $url; ?>', 'newwindow', 'width=500,height=250'); return false;"><i
                    class="fa-twitter share__icon fab"></i><span
                    class="share__label"><?php echo esc_html( 'tweet' ); ?></span>
        </a>
    </li>
    <li class="share__item">
        <a class="share__link"
           onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>', 'newwindow', 'width=500,height=250'); return false;"><i
                    class="fa-facebook-f share__icon fab"></i><span
                    class="share__label"><?php echo esc_html( 'share' ); ?></span>
        </a>
    </li>
    <li class="share__item">
        <a class="share-pinterest share__link"
           onclick="window.open('http://pinterest.com/pin/create/button/?url=<?php echo $url; ?>&amp;media=<?php echo $media; ?>&amp;description=<?php echo $title; ?>', 'newwindow', 'width=500,height=250'); return false;"><i
                    class="fa-pinterest share__icon fab"></i><span
                    class="share__label"><?php echo esc_html( 'pin' ); ?></span>
        </a>
    </li>
</ul>