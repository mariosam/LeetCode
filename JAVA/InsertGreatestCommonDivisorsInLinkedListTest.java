/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class InsertGreatestCommonDivisorsInLinkedListTest {

    @Test
	public void testInsertGreatestCommonDivisorsInLinkedList() throws Exception {
        //Test 1
        ListNode want = new ListNode(18, new ListNode(6, new ListNode(6, new ListNode(2, new ListNode(10, new ListNode(1, new ListNode(3)))))));
        ListNode got = InsertGreatestCommonDivisorsInLinkedList.insertGreatestCommonDivisors( new ListNode(18, new ListNode(6, new ListNode(10, new ListNode(3)))) );
        assertArrayEquals(linkedListToArray(want), linkedListToArray(got));
        //Test 2
        want = new ListNode(7);
        got = InsertGreatestCommonDivisorsInLinkedList.insertGreatestCommonDivisors( new ListNode(7) );
        assertArrayEquals(linkedListToArray(want), linkedListToArray(got));
	}

    // Helper method to convert a linked list to an array for easy comparison.
    private int[] linkedListToArray(ListNode node) {
        // Dynamic array list to collect node values
        List<Integer> values = new ArrayList<>();
        while (node != null) {
            values.add(node.val);
            node = node.next;
        }
        // Converting list of integers to an int array
        return values.stream().mapToInt(i -> i).toArray();
    }
}
