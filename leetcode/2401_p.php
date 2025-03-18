<?php
function longestNiceSubarray($nums) {
    $n = count($nums);
    $maxLength = 0;
    $bitwiseAnd = 0;
    $left = 0;
    
    for ($right = 0; $right < $n; $right++) {
        while (($bitwiseAnd & $nums[$right]) != 0) {
            $bitwiseAnd ^= $nums[$left];
            $left++;
        }
        
        $bitwiseAnd |= $nums[$right];
        $maxLength = max($maxLength, $right - $left + 1);
    }
    
    return $maxLength;
}
?>
