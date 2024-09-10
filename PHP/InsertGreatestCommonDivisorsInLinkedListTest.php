<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit InsertGreatestCommonDivisorsInLinkedListTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ListNode.php");
require ("InsertGreatestCommonDivisorsInLinkedList.php");

class InsertGreatestCommonDivisorsInLinkedListTest extends TestCase {

    public function testInsertGreatestCommonDivisorsInLinkedList() {
        $obj = new InsertGreatestCommonDivisorsInLinkedList();
        //Test 1
        $head = new ListNode(18, new ListNode(6, new ListNode(10, new ListNode(3))));
        $want = new ListNode(18, new ListNode(6, new ListNode(6, new ListNode(2, new ListNode(10, new ListNode(1, new ListNode(3)))))));
        
        $got = $obj->insertGreatestCommonDivisors($head);
        echo "\nTest 1: returned " . $this->linkedListToString($got) . " == expected: " . $this->linkedListToString($want);
        $this->assertEquals($this->linkedListToArray($want), $this->linkedListToArray($got));

        //Test 2
        $head = new ListNode(7);
        $want = new ListNode(7);

        $got = $obj->insertGreatestCommonDivisors($head);
        echo "\nTest 2: returned " . $this->linkedListToString($got) . " == expected: " . $this->linkedListToString($want);
        $this->assertEquals($this->linkedListToArray($want), $this->linkedListToArray($got));
    }

    private function linkedListToArray($node) {
        $array = [];
        while ($node !== null) {
            $array[] = $node->val;
            $node = $node->next;
        }
        return $array;
    }

    private function linkedListToString($node) {
        return implode(' -> ', $this->linkedListToArray($node));
    }
}
