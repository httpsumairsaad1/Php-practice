class Solution {
    function divideArray($nums) {
        $freq = array_count_values($nums);
        foreach ($freq as $count) {
            if ($count % 2 != 0) {
                return false;
            }
        }
        return true;
    }
}
