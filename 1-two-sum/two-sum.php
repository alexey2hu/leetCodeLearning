class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $numsCount = count($nums) - 1;

        for($i = 0; $i < $numsCount; $i++) {
            for ($j = $i+1; $j <= $numsCount; $j++) {
                if ($nums[$i] + $nums[$j] === $target) {
                    return [$i, $j];
                }
            }
        }

        return 0;
    }
}