/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findMinHeightTrees(n int, edges [][]int) []int {
	if n == 1 {
		return []int{0}
	}

	adj := make([]map[int]bool, n)
	for i := range adj {
		adj[i] = make(map[int]bool)
	}
	for _, edge := range edges {
		u, v := edge[0], edge[1]
		adj[u][v] = true
		adj[v][u] = true
	}

	leaves := make([]int, 0)
	for i := 0; i < n; i++ {
		if len(adj[i]) == 1 {
			leaves = append(leaves, i)
		}
	}

	for n > 2 {
		n -= len(leaves)
		newLeaves := make([]int, 0)
		for _, i := range leaves {
			for j := range adj[i] {
				delete(adj[j], i)
				if len(adj[j]) == 1 {
					newLeaves = append(newLeaves, j)
				}
			}
		}
		leaves = newLeaves
	}

	return leaves
}
