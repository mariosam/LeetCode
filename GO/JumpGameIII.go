/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func canReach(arr []int, start int) bool {
	n := len(arr)

	queue := []int{start}
	visited := make([]bool, n)
	visited[start] = true
	front := 0
	for front < len(queue) {
		cur := queue[front]
		front++
		if arr[cur] == 0 {
			return true
		}
		next1 := cur - arr[cur]
		next2 := cur + arr[cur]
		if next1 >= 0 && !visited[next1] {
			queue = append(queue, next1)
			visited[next1] = true
		}
		if next2 < n && !visited[next2] {
			queue = append(queue, next2)
			visited[next2] = true
		}
	}
	return false
}
