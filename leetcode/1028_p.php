<?php

class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;
    
    function __construct($val) {
        $this->val = $val;
    }
}

class Solution {
    function recoverFromPreorder($S) {
        $stack = [];
        $i = 0;

        while ($i < strlen($S)) {
            // Determine depth
            $depth = 0;
            while ($i < strlen($S) && $S[$i] == '-') {
                $depth++;
                $i++;
            }

            // Extract node value
            $value = 0;
            while ($i < strlen($S) && is_numeric($S[$i])) {
                $value = $value * 10 + intval($S[$i]);
                $i++;
            }

            $node = new TreeNode($value);

            // If depth is same as stack size, this is a left child
            if ($depth == count($stack)) {
                if (!empty($stack)) {
                    $stack[count($stack) - 1]->left = $node;
                }
            } else { 
                // Otherwise, pop until reaching parent level and assign right child
                while (count($stack) > $depth) {
                    array_pop($stack);
                }
                $stack[count($stack) - 1]->right = $node;
            }

            // Push new node to stack
            array_push($stack, $node);
        }

        return $stack[0]; // Root of the tree
    }
}

// Example usage
$solution = new Solution();
$root = $solution->recoverFromPreorder("1-2--3--4-5--6--7");

// Function to print tree (preorder traversal)
function printTree($node) {
    if ($node === null) return;
    echo $node->val . " ";
    printTree($node->left);
    printTree($node->right);
}

// Output the recovered tree
printTree($root);

?>
