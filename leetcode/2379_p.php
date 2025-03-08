<?php
class Solution {
    function minimumRecolors($blocks, $k) {
        $n = strlen($blocks);
        $minRecolors = PHP_INT_MAX;

        // Count 'W' in the first window of size k
        $whiteCount = 0;
        for ($i = 0; $i < $k; $i++) {
            if ($blocks[$i] == 'W') {
                $whiteCount++;
            }
        }
        $minRecolors = $whiteCount;

        // Sliding window: shift the window one step at a time
        for ($i = $k; $i < $n; $i++) {
            if ($blocks[$i - $k] == 'W') {
                $whiteCount--; // Remove leftmost element
            }
            if ($blocks[$i] == 'W') {
                $whiteCount++; // Add new element
            }
            $minRecolors = min($minRecolors, $whiteCount);
        }

        return $minRecolors;
    }
}
