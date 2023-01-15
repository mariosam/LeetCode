/**
 * @version GO 1.19.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestBinaryTreePreorderTraversal
 */
package GO

import (
	"reflect"
	"testing"
)

func TestBinaryTreePreorderTraversal(t *testing.T) {
	var tn3 TreeNode = TreeNode{}
	tn3.Val = 3
	var tn2 TreeNode = TreeNode{}
	tn2.Val = 2
	tn2.Left = &tn3
	var tn1 TreeNode = TreeNode{}
	tn1.Val = 1
	tn1.Left = nil
	tn1.Right = &tn2

	var tn0 TreeNode = TreeNode{}
	tn0.Val = 1

	tables := []struct {
		want []int
		nums TreeNode
	}{
		{[]int{1, 2, 3}, tn1},
		{[]int{0}, TreeNode{}},
		{[]int{1}, tn0},
	}

	for _, table := range tables {
		got := preorderTraversal(&table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
