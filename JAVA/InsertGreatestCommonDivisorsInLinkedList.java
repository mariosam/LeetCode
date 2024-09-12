/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class InsertGreatestCommonDivisorsInLinkedList {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", insertGreatestCommonDivisors( new ListNode(7) ));
    }

    public static ListNode insertGreatestCommonDivisors(ListNode head) {
        for (ListNode pre = head, cur = head.next; cur != null; cur = cur.next) {
            int x = gcd(pre.val, cur.val);
            pre.next = new ListNode(x, cur);
            pre = cur;
        }
        return head;
    }

    private static int gcd(int a, int b) {
        if (b == 0) {
            return a;
        }
        return gcd(b, a % b);
    }

}
