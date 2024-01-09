/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func isCompleteTree(root *TreeNode) bool {
	layer := []*TreeNode{root}
	prev := &TreeNode{}
	isComplete := true

	for len(layer) > 0 {
		nextLayer := []*TreeNode{}
		for _, node := range layer {
			isComplete = isComplete && !(prev == nil && node != nil)

			if node != nil {
				nextLayer = append(nextLayer, node.Left)
				nextLayer = append(nextLayer, node.Right)
			}
			prev = node
		}
		layer = nextLayer
	}

	return isComplete
}
