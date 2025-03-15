class Solution {
    function minCapability($nums, $k) {
        $left = min($nums);
        $right = max($nums);
        
        while ($left < $right) {
            $mid = intval(($left + $right) / 2);
            if ($this->canRob($nums, $k, $mid)) {
                $right = $mid;
            } else {
                $left = $mid + 1;
            }
        }
        return $left;
    }

    private function canRob($nums, $k, $cap) {
        $count = 0;
        $i = 0;
        while ($i < count($nums)) {
            if ($nums[$i] <= $cap) {
                $count++;
                $i++; // Skip adjacent house
            }
            $i++; // Move to next house
        }
        return $count >= $k;
    }
}
