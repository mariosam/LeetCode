/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func insertGreatestCommonDivisors(head *ListNode) *ListNode {
	for pre, cur := head, head.Next; cur != nil; pre, cur = cur, cur.Next {
		x := gcd(pre.Val, cur.Val)
		pre.Next = &ListNode{Val: x, Next: cur}
	}
	return head
}

func gcd(a, b int) int {
	if b == 0 {
		return a
	}
	return gcd(b, a%b)
}
