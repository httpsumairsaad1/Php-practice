<?php
class Solution {
    public function numTilePossibilities($tiles) {
        $arr = str_split($tiles);
        return $this->permute(0, $arr);
    }

    private function permute($start, &$arr) {
        if ($start == count($arr)) return 0;
        $ans = 0;
        for ($i = $start; $i < count($arr); $i++) {
            if (!$this->isPermutedBefore($start, $i - 1, $arr[$i], $arr)) {
                $this->swap($start, $i, $arr);
                $ans += 1 + $this->permute($start + 1, $arr);
                $this->swap($start, $i, $arr);
            }
        }
        return $ans;
    }

    private function isPermutedBefore($i, $j, $ch, &$arr) {
        while ($i <= $j) {
            if ($arr[$i++] == $ch) return true;
        }
        return false;
    }

    private function swap($i, $j, &$arr) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
    }
}

// Example usage
$solution = new Solution();
echo $solution->numTilePossibilities("AAB"); // Example input
