<?php
class Solution {
    public function minOperations(array $nums, int $k): int {
        $pq = new SplPriorityQueue();
        $pq->setExtractFlags(SplPriorityQueue::EXTR_DATA);
        
        foreach ($nums as $num) {
            if ($num < $k) {
                $pq->insert($num, -$num); // Negative priority to simulate min-heap
            }
        }
        
        $operations = 0;
        
        while (!$pq->isEmpty()) {
            $x = $pq->extract();
            $operations++;
            
            if ($pq->isEmpty()) break;
            
            $y = $pq->extract();
            $newValue = 2 * $x + $y;
            
            if ($newValue < $k) {
                $pq->insert($newValue, -$newValue);
            }
        }
        
        return $operations;
    }
}
?>
