class Solution {
    function repairCars($ranks, $cars) {
        $left = 1;
        $right = min($ranks) * $cars * $cars;

        while ($left < $right) {
            $mid = intval($left + ($right - $left) / 2);
            if ($this->canRepair($ranks, $cars, $mid)) {
                $right = $mid;
            } else {
                $left = $mid + 1;
            }
        }
        return $left;
    }

    private function canRepair($ranks, $cars, $time) {
        $repaired = 0;
        foreach ($ranks as $r) {
            $repaired += intval(sqrt($time / $r));
            if ($repaired >= $cars) return true;
        }
        return false;
    }
}
