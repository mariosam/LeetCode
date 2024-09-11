/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

import ListNode from './ListNode.js'

/**
 * @param {ListNode} head
 * @return {ListNode}
 */
function insertGreatestCommonDivisors(head) {
    let pre = head, cur = head.next;
    while (cur !== null) {
        let x = gcd(pre.val, cur.val);
        pre.next = new ListNode(x, cur);
        pre = cur;
        cur = cur.next;
    }
    return head;
}

function gcd(a, b) {
    return b === 0 ? a : gcd(b, a % b);
};
export { insertGreatestCommonDivisors }
