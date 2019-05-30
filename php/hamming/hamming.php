<?php

/*
This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
convenience to get you started writing code faster.

Remove this comment before submitting your exercise.
*/

function distance($a, $b)
{
    if(strlen($a) !== strlen($b)) {
        throw new InvalidArgumentException('DNA strands must be equal length.');
    }

    return count(
        array_diff_assoc(
            str_split($a),
            str_spilt($b)
        )
    );
}
