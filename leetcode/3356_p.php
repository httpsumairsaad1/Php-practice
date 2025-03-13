<?php
class Solution {
    public function minZeroArray($nums, $queries) {
        $n = count($nums);
        $m = count($queries);
        
        $left = 0;
        $right = $m + 1;
        
        while ($left < $right) {
            $mid = intdiv($left + $right, 2);
            if ($this->canTransform($nums, $queries, $mid)) {
                $right = $mid;
            } else {
                $left = $mid + 1;
            }
        }
        
        return $left > $m ? -1 : $left;
    }
    
    private function canTransform($nums, $queries, $k) {
        $n = count($nums);
        $diff = array_fill(0, $n + 1, 0);
        
        for ($i = 0; $i < $k; $i++) {
            list($l, $r, $val) = $queries[$i];
            $diff[$l] += $val;
            if ($r + 1 < $n) {
                $diff[$r + 1] -= $val;
            }
        }
        
        $current = 0;
        for ($i = 0; $i < $n; $i++) {
            $current += $diff[$i];
            if ($nums[$i] > $current) {
                return false;
            }
        }
        
        return true;
    }
}
?>
