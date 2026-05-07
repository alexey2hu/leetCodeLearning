class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $arr = [0, 1, 2, 3];

        for ($i = 3; $i < $n; $i++) {
            $arr[] = $arr[$i] + $arr[$i-1];
        }

        return $arr[$n];
    }
}