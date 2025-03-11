<?php
function numberOfSubstrings($s) {
    $count = array_fill(0, 3, 0); // Frequency array for 'a', 'b', 'c'
    $l = 0;
    $result = 0;
    $n = strlen($s);

    for ($r = 0; $r < $n; $r++) {
        $count[ord($s[$r]) - ord('a')]++;
        
        while ($count[0] > 0 && $count[1] > 0 && $count[2] > 0) {
            $result += $n - $r; // All substrings from l to end are valid
            $count[ord($s[$l]) - ord('a')]--;
            $l++;
        }
    }
    
    return $result;
}
?>
