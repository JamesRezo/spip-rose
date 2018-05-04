<?php

function spiprose($texte)
{
    return preg_replace(
        ',spip([^\w]?),i',
        '<span style="color: #FFC0CB;">SPIP</span>$1',
        $texte
    );
}
