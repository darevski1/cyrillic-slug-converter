<?php 

    //cyrillic-slug-converter

        $string = $advert_title;
        $string = mb_strtolower(trim($string));// convert upper case characters to lower case
        $cyrillic = array("а", "б", "в", "г", "д", "ѓ", "е", "ж", "з", "ѕ", "и", "ј", "к", "л", "љ", "м", "н", "њ", "о", "п", "р", "с", "т", "ќ", "у", "ф", "х", "ц", "ч", "џ", "ш");
        $letter = array("a", "b", "v", "g", "d", "gj", "e", "zh", "z", "dz", "i", "j", "k", "l", "lj", "m", "n", "nj", "o", "p", "r", "s", "t", "kj", "u", "f", "h", "c", "ch", "dzh", "sh");
        $onlyconsonants = str_replace($cyrillic, $letter, $string);//takes a value from each array and uses them to search and replace on subject
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $onlyconsonants);
?>