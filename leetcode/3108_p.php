class UnionFind {
    private $parent;
    private $rank;
    private $minEdgeWeight;

    public function __construct($n) {
        $this->parent = range(0, $n - 1);
        $this->rank = array_fill(0, $n, 0);
        $this->minEdgeWeight = array_fill(0, $n, PHP_INT_MAX);
    }

    public function find($u) {
        if ($this->parent[$u] !== $u) {
            $this->parent[$u] = $this->find($this->parent[$u]);
        }
        return $this->parent[$u];
    }

    public function union($u, $v, $w) {
        $rootU = $this->find($u);
        $rootV = $this->find($v);
        if ($rootU === $rootV) {
            $this->minEdgeWeight[$rootU] &= $w;
            return;
        }
        if ($this->rank[$rootU] < $this->rank[$rootV]) {
            $this->parent[$rootU] = $rootV;
            $this->minEdgeWeight[$rootV] &= $this->minEdgeWeight[$rootU] & $w;
        } elseif ($this->rank[$rootU] > $this->rank[$rootV]) {
            $this->parent[$rootV] = $rootU;
            $this->minEdgeWeight[$rootU] &= $this->minEdgeWeight[$rootV] & $w;
        } else {
            $this->parent[$rootV] = $rootU;
            $this->rank[$rootU]++;
            $this->minEdgeWeight[$rootU] &= $this->minEdgeWeight[$rootV] & $w;
        }
    }

    public function getMinEdgeWeight($u) {
        return $this->minEdgeWeight[$this->find($u)];
    }
}

function minCostWalk($n, $edges, $queries) {
    $uf = new UnionFind($n);
    foreach ($edges as [$u, $v, $w]) {
        $uf->union($u, $v, $w);
    }
    $result = [];
    foreach ($queries as [$s, $t]) {
        if ($uf->find($s) === $uf->find($t)) {
            $result[] = $uf->getMinEdgeWeight($s);
        } else {
            $result[] = -1;
        }
    }
    return $result;
}
