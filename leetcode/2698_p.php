<?php
class Solution {
    // Function to check if $square can be partitioned into substrings summing to $target using bitmasking
    private function isValid($square, $target) {
        $s = strval($square);
        $len = strlen($s);
        $totalParts = 1 << ($len - 1); // Number of ways to partition the string

        for ($mask = 0; $mask < $totalParts; $mask++) {
            $sum = 0;
            $num = 0;
            for ($j = 0; $j < $len; $j++) {
                $num = $num * 10 + intval($s[$j]); // Build the number
                if (($mask >> $j) & 1 || $j == $len - 1) { 
                    $sum += $num;
                    $num = 0;
                }
            }
            if ($sum == $target) return true;
        }
        return false;
    }

    public function punishmentNumber($n) {
        static $precomputed = [];
        if (isset($precomputed[$n])) return $precomputed[$n];
        
        $total = 0;
        for ($i = 1; $i <= $n; $i++) {
            $square = $i * $i;
            if ($this->isValid($square, $i)) $total += $square;
        }
        return $precomputed[$n] = $total;
    }
}

// Example usage
$solution = new Solution();
echo $solution->punishmentNumber(10); // Example test
