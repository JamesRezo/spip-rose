<?php

function spiprose_pre_typo($texte)
{
    return preg_replace(
        ',spip([^\w]?),i',
        '<span style="color: #FFC0CB;">SPIP</span>$1',
        $texte
    );
}
