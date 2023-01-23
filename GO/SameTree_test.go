/**
 * @version GO 1.19.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSameTree
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSameTree(t *testing.T) {
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
		want  bool
		tree1 TreeNode
		tree2 TreeNode
	}{
		{true, tn1, tn1},
		{false, TreeNode{}, tn1},
		{false, tn2, tn3},
	}

	for _, table := range tables {
		got := isSameTree(&table.tree1, &table.tree2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
