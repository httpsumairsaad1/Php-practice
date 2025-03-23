<?php
class Solution {
    function countPaths($n, $roads) {
        $MOD = 1e9 + 7;
        
        // Step 1: Build the adjacency list
        $graph = array_fill(0, $n, []);
        foreach ($roads as $road) {
            list($u, $v, $time) = $road;
            $graph[$u][] = [$v, $time];
            $graph[$v][] = [$u, $time];
        }

        // Step 2: Initialize Dijkstra’s algorithm
        $dist = array_fill(0, $n, PHP_INT_MAX);
        $ways = array_fill(0, $n, 0);
        $dist[0] = 0;
        $ways[0] = 1;

        $pq = new SplPriorityQueue();
        $pq->insert([0, 0], 0); // (distance, node)

        // Step 3: Process the priority queue
        while (!$pq->isEmpty()) {
            list($currDist, $node) = $pq->extract();

            if ($currDist > $dist[$node]) continue; // Skip outdated entries

            foreach ($graph[$node] as list($neighbor, $time)) {
                $newDist = $currDist + $time;

                if ($newDist < $dist[$neighbor]) {
                    $dist[$neighbor] = $newDist;
                    $ways[$neighbor] = $ways[$node]; // New shortest path found
                    $pq->insert([$newDist, $neighbor], -$newDist);
                } elseif ($newDist == $dist[$neighbor]) {
                    $ways[$neighbor] = ($ways[$neighbor] + $ways[$node]) % $MOD;
                }
            }
        }

        return $ways[$n - 1];
    }
}

// Example usage
$solution = new Solution();
$n = 7;
$roads = [[0, 6, 7], [0, 1, 2], [1, 2, 3], [1, 3, 3], [6, 3, 3], [3, 5, 1], [6, 5, 1], [2, 5, 1], [0, 4, 5], [4, 6
