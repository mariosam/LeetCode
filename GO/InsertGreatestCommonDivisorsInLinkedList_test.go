/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestInsertGreatestCommonDivisorsInLinkedList
 */
package GO

import (
	"reflect"
	"testing"
)

func TestInsertGreatestCommonDivisorsInLinkedList(t *testing.T) {
	tables := []struct {
		want ListNode
		head ListNode
	}{
		{ListNode{18, &ListNode{6, &ListNode{6, &ListNode{2, &ListNode{10, &ListNode{1, &ListNode{3, nil}}}}}}}, ListNode{18, &ListNode{6, &ListNode{10, &ListNode{3, nil}}}}},
		{ListNode{7, nil}, ListNode{7, nil}},
	}

	for _, table := range tables {
		got := insertGreatestCommonDivisors(&table.head)

		if !reflect.DeepEqual(linkedListToArray(&table.want), linkedListToArray(got)) {
			t.Errorf("Waiting for this %v but the return was this: %v", table.want, got)
		}
	}
}

// Helper function to convert a linked list to a slice of integers for easy comparison.
func linkedListToArray(node *ListNode) []int {
	var values []int
	for node != nil {
		values = append(values, node.Val)
		node = node.Next
	}
	return values
}
