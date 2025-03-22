class Solution {
    function countCompleteComponents($n, $edges) {
        $graph = array_fill(0, $n, []);
        foreach ($edges as $edge) {
            $graph[$edge[0]][] = $edge[1];
            $graph[$edge[1]][] = $edge[0];
        }

        $visited = array_fill(0, $n, false);
        $count = 0;

        for ($i = 0; $i < $n; $i++) {
            if (!$visited[$i]) {
                $nodes = [];
                $this->dfs($i, $graph, $visited, $nodes);

                $isComplete = true;
                foreach ($nodes as $node) {
                    if (count($graph[$node]) !== count($nodes) - 1) {
                        $isComplete = false;
                        break;
                    }
                }
                if ($isComplete) $count++;
            }
        }
        return $count;
    }

    private function dfs($node, &$graph, &$visited, &$nodes) {
        $visited[$node] = true;
        $nodes[] = $node;
        foreach ($graph[$node] as $neighbor) {
            if (!$visited[$neighbor]) {
                $this->dfs($neighbor, $graph, $visited, $nodes);
            }
        }
    }
}
