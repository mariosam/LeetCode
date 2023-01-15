/**
 * @version GO 1.19.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func preorderTraversal(root *TreeNode) []int {
	res := []int{}

	helper(&res, root)

	return res
}

func helper(res *[]int, root *TreeNode) {
	if root == nil {
		return
	}

	*res = append(*res, root.Val)

	if root.Left != nil {
		helper(res, root.Left)
	}

	if root.Right != nil {
		helper(res, root.Right)
	}
}
