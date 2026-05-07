class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $arr = array_merge($nums1, $nums2);
        sort($arr);

        $arrLen = count($arr);
        $mid = floor($arrLen / 2);

        return $arrLen % 2 === 1
            ? $arr[$mid]
            : ($arr[$mid-1] + $arr[$mid]) / 2;
    }
}