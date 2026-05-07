class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $strX = (string) $x;
        $xLen = strlen($strX) - 1;

        for ($i = 0; $i <= floor($xLen/2); $i++) {
            if ($strX[$i] !== $strX[$xLen-$i]) {
                return false;
            }
        }

        return true;
    }
}