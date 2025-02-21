<?php
class TreeNode {
    public $val;
    public $left;
    public $right;
    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class FindElements {
    private $values;

    public function __construct($root) {
        $this->values = [];
        $this->recover($root, 0);
    }

    private function recover($node, $val) {
        if ($node === null) {
            return;
        }
        $node->val = $val;
        $this->values[$val] = true;
        $this->recover($node->left, 2 * $val + 1);
        $this->recover($node->right, 2 * $val + 2);
    }

    public function find($target) {
        return isset($this->values[$target]);
    }
}
?>
