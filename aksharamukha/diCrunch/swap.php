<?php

/* Function to swap numerals & combining vowel signs for conversion */

/* e.g கீ² <--> க²ீ */

function swap($inp, $outp, $text)
{

    foreach ($inp as $nm) {
        foreach ($outp as $vs) {
            $text = str_replace($nm.$vs,$vs.$nm, $text);
        }
    }

    return $text;

}

function swap_ex($inp, $outp, $text)
{

    foreach ($inp as $nm) {
        foreach ($outp as $vs) {
            $text = str_replace($nm.$vs,$vs.$nm."$", $text);
        }
    }

    $text=str_replace("$","",$text);

    return $text;

}

function swap_ey($inp, $outp, $text)
{

    foreach ($inp as $nm) {
        foreach ($outp as $vs) {
            $text = str_replace($nm.$vs,"$".$vs.$nm, $text);
        }
    }

    $text=str_replace("$","",$text);

    return $text;

}
