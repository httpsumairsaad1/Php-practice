<?php
class Solution {
    function findDifferentBinaryString($nums) {
        $n = count($nums);
        $set = array_flip($nums); // Convert array to hash set for O(1) lookup

        for ($i = 0; $i < (1 << $n); $i++) { // Loop through all binary numbers of length n
            $binaryStr = str_pad(decbin($i), $n, '0', STR_PAD_LEFT);
            if (!isset($set[$binaryStr])) {
                return $binaryStr;
            }
        }
        return "";
    }
}

// Example usage
$solution = new Solution();
$nums = ["01", "10"];
echo $solution->findDifferentBinaryString($nums); // Output: "00" or "11"
?>
