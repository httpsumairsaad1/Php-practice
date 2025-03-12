class Solution {
    function maximumCount($nums) {
        $negative = 0;
        $positive = 0;
        
        foreach ($nums as $num) {
            if ($num < 0) {
                $negative++;
            } elseif ($num > 0) {
                $positive++;
            }
        }
        
        return max($negative, $positive);
    }
}
