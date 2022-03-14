<?php

function verificationPassword($string)
    {
        $regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/"; // le regex verifie chaque caractère pour voir si tout est présent

        if (preg_match($regex, $string))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    ?>