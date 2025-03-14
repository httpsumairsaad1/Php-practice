class Solution {
    function maxCandies($candies, $k) {
        if ($k == 0) return 0;

        $left = 1;
        $right = max($candies);
        $res = 0;

        while ($left <= $right) {
            $mid = intval(($left + $right) / 2);
            if ($this->canDistribute($candies, $k, $mid)) {
                $res = $mid;
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
        return $res;
    }

    private function canDistribute($candies, $k, $mid) {
        $count = 0;
        foreach ($candies as $c) {
            $count += intval($c / $mid);
        }
        return $count >= $k;
    }
}

// Example Usage
$solution = new Solution();
$candies = [5, 8, 6];
$k = 3;
echo $solution->maxCandies($candies, $k);  // Output: 5

