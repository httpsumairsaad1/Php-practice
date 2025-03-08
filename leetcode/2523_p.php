<?php
class Solution {
    function closestPrimes($left, $right) {
        $primes = array_fill(0, $right + 1, true);
        $primes[0] = $primes[1] = false; // 0 and 1 are not prime

        // Sieve of Eratosthenes
        for ($i = 2; $i * $i <= $right; $i++) {
            if ($primes[$i]) {
                for ($j = $i * $i; $j <= $right; $j += $i) {
                    $primes[$j] = false;
                }
            }
        }

        // Collect prime numbers in the given range
        $primeNumbers = [];
        for ($i = $left; $i <= $right; $i++) {
            if ($primes[$i]) {
                $primeNumbers[] = $i;
            }
        }

        // If less than two prime numbers, return [-1, -1]
        if (count($primeNumbers) < 2) return [-1, -1];

        // Find the closest pair
        $minDiff = PHP_INT_MAX;
        $res = [-1, -1];

        for ($i = 1; $i < count($primeNumbers); $i++) {
            $diff = $primeNumbers[$i] - $primeNumbers[$i - 1];
            if ($diff < $minDiff) {
                $minDiff = $diff;
                $res = [$primeNumbers[$i - 1], $primeNumbers[$i]];
            }
        }

        return $res;
    }
}

