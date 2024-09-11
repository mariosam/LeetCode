/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { insertGreatestCommonDivisors } from './InsertGreatestCommonDivisorsInLinkedList.js'
import ListNode from './ListNode.js'

TEST('Starting InsertGreatestCommonDivisorsInLinkedList test 1...', (t) => {
    const head = new ListNode(18, new ListNode(6, new ListNode(10, new ListNode(3))));
    const want = new ListNode(18, new ListNode(6, new ListNode(6, new ListNode(2, new ListNode(10, new ListNode(1, new ListNode(3)))))));

    const got = insertGreatestCommonDivisors(head);
    t.assert( linkedListToArray(got).toString === linkedListToArray(want).toString, "Expect: "+linkedListToArray(want)+" - Returned: "+linkedListToArray(got))
    t.end()
});

TEST('Starting InsertGreatestCommonDivisorsInLinkedList test 2...', (t) => {
    const head = new ListNode(7);
    const want = new ListNode(7);

    const got = insertGreatestCommonDivisors(head);
    t.assert( linkedListToArray(got).toString === linkedListToArray(want).toString, "Expect: "+linkedListToArray(want)+" - Returned: "+linkedListToArray(got))
    t.end()
});

function linkedListToArray(node) {
    const array = [];
    while (node !== null) {
        array.push(node.val);
        node = node.next;
    }
    return array;
}
