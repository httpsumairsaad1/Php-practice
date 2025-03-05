<?php
class Solution {
    public function coloredCells(int $n): int {
        return 1 + (4 * $n * ($n - 1) / 2);
    }
}
?>
