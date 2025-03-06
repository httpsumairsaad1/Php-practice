class Solution {
    public function findMissingAndRepeatedValues($grid) {
        $n = count($grid);
        $size = $n * $n;
        $count = array_fill(1, $size, 0);

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $count[$grid[$i][$j]]++;
            }
        }

        $a = -1;
        $b = -1;

        for ($num = 1; $num <= $size; $num++) {
            if ($count[$num] == 2) {
                $a = $num;
            } elseif ($count[$num] == 0) {
                $b = $num;
            }
        }

        return [$a, $b];
    }
}
