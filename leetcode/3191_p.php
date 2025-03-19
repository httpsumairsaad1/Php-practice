<?php
function minOperations($nums) {
    $n = count($nums);
    $gcd = 0;

    // Compute the GCD of the entire array
    foreach ($nums as $num) {
        $gcd = gmp_intval(gmp_gcd($gcd, $num));
    }

    // If GCD is already 1, return 0 as no operations are needed
    if ($gcd == 1) {
        return 0;
    }

    // Try to find the minimum subarray to make the GCD 1
    $minSubarray = PHP_INT_MAX;

    for ($i = 0; $i < $n; $i++) {
        $g = 0;
        for ($j = $i; $j < $n; $j++) {
            $g = gmp_intval(gmp_gcd($g, $nums[$j]));
            if ($g == 1) {
                $minSubarray = min($minSubarray, $j - $i);
                break;
            }
        }
    }

    // If it's impossible to make the GCD 1, return -1
    return $minSubarray == PHP_INT_MAX ? -1 : $minSubarray + ($n - 1);
}

// Example usage
$nums = [2, 6, 3, 4];
echo minOperations($nums); // Output: 3
?>
