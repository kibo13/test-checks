<?php

function hideImage($photo)
{
    if (is_null($photo)) {
        return null;
    }
    //
    else {

        $path = asset('images/' . $photo);

        echo '
            <div class="bk-zoom">
                <span class="text-info">Посмотреть</span>
                <img
                    class="bk-zoom__img"
                    src="' . $path . '"
                    alt=""
                    tabindex="0">
                <div class="bk-zoom__bg"></div>
            </div>
        ';

        return;
    }
}