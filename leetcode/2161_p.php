class Solution {
    public function pivotArray($nums, $pivot) {
        $n = count($nums);
        $less = [];
        $high = [];
        $result = [];
        $count = 0;

        foreach ($nums as $num) {
            if ($num < $pivot) {
                $less[] = $num;
            } elseif ($num == $pivot) {
                $count++;
            } else {
                $high[] = $num;
            }
        }

        $result = array_merge($less, array_fill(0, $count, $pivot), $high);
        
        return $result;
    }
}

