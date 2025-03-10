<?php
function countSubstringsWithVowelsAndKConsonants($word, $k) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vowelSet = array_fill_keys($vowels, 0);
    $consonantCount = 0;
    $left = 0;
    $result = 0;
    $n = strlen($word);

    for ($right = 0; $right < $n; $right++) {
        $char = $word[$right];
        if (isset($vowelSet[$char])) {
            $vowelSet[$char]++;
        } else {
            $consonantCount++;
        }

        while ($consonantCount > $k) {
            $leftChar = $word[$left];
            if (isset($vowelSet[$leftChar])) {
                $vowelSet[$leftChar]--;
            } else {
                $consonantCount--;
            }
            $left++;
        }

        if ($consonantCount == $k && !in_array(0, $vowelSet)) {
            $result++;
        }
    }

    return $result;
}
