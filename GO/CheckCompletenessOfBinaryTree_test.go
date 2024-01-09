/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCheckCompletenessOfBinaryTree
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCheckCompletenessOfBinaryTree(t *testing.T) {
	var tn1 TreeNode = TreeNode{Val: 1, Left: &TreeNode{Val: 2, Left: &TreeNode{Val: 4}, Right: &TreeNode{Val: 5}}, Right: &TreeNode{Val: 3, Left: &TreeNode{Val: 6}}}
	var tn2 TreeNode = TreeNode{Val: 1, Left: &TreeNode{Val: 2, Left: &TreeNode{Val: 4}, Right: &TreeNode{Val: 5}}, Right: &TreeNode{Val: 3, Right: &TreeNode{Val: 7}}}

	tables := []struct {
		want bool
		nums TreeNode
	}{
		{true, tn1},
		{false, tn2},
	}

	for _, table := range tables {
		got := isCompleteTree(&table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
