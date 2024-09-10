<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

require_once 'ListNode.php';

class InsertGreatestCommonDivisorsInLinkedList {    

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function insertGreatestCommonDivisors($head) {
        $pre = $head;
        $cur = $head->next;
        while ($cur !== null) {
            $x = $this->gcd($pre->val, $cur->val);
            $pre->next = new ListNode($x, $cur);
            $pre = $cur;
            $cur = $cur->next;
        }
        return $head;
    }

    function gcd($a, $b) {
        if ($b == 0) {
            return $a;
        }
        return $this->gcd($b, $a % $b);
    }

}

