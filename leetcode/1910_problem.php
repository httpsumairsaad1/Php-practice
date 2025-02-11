class Solution {
    public function removeOccurrences(string $s, string $part): string {
        $input = str_split($s);
        $target = str_split($part);
        $resultStack = [];
        $targetLength = count($target);
        $targetEndChar = $target[$targetLength - 1];

        foreach ($input as $currentChar) {
            $resultStack[] = $currentChar;

            if ($currentChar === $targetEndChar && count($resultStack) >= $targetLength) {
                $i = count($resultStack) - 1;
                $j = $targetLength - 1;
                
                while ($j >= 0 && $resultStack[$i] === $target[$j]) {
                    $i--;
                    $j--;
                }

                if ($j < 0) {
                    array_splice($resultStack, $i + 1, $targetLength);
                }
            }
        }
        return implode('', $resultStack);
    }
}
