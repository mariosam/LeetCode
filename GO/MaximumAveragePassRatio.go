/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "container/heap"

// Class represents a class with pass and total students
type Class struct {
	pass, total int
	priority    float64
}

// PriorityQueue implements heap.Interface for a max heap
type PriorityQueue []*Class

func (pq PriorityQueue) Len() int { return len(pq) }
func (pq PriorityQueue) Less(i, j int) bool {
	return pq[i].priority > pq[j].priority // Max heap: higher priority first
}
func (pq PriorityQueue) Swap(i, j int) { pq[i], pq[j] = pq[j], pq[i] }
func (pq *PriorityQueue) Push(x interface{}) {
	*pq = append(*pq, x.(*Class))
}
func (pq *PriorityQueue) Pop() interface{} {
	old := *pq
	n := len(old)
	item := old[n-1]
	*pq = old[0 : n-1]
	return item
}

// getDiff calculates the difference in pass ratio if one student is added
func getDiff(pass, total int) float64 {
	return float64(pass+1)/float64(total+1) - float64(pass)/float64(total)
}

// maxAverageRatio calculates the maximum average pass ratio
func maxAverageRatio(classes [][]int, extraStudents int) float64 {
	// Initialize priority queue
	pq := make(PriorityQueue, 0)
	heap.Init(&pq)

	// Populate the priority queue
	for _, c := range classes {
		pass, total := c[0], c[1]
		heap.Push(&pq, &Class{pass: pass, total: total, priority: getDiff(pass, total)})
	}

	// Distribute extra students
	for extraStudents > 0 {
		item := heap.Pop(&pq).(*Class)
		item.pass++
		item.total++
		item.priority = getDiff(item.pass, item.total)
		heap.Push(&pq, item)
		extraStudents--
	}

	// Calculate average pass ratio
	sum := 0.0
	for pq.Len() > 0 {
		item := heap.Pop(&pq).(*Class)
		sum += float64(item.pass) / float64(item.total)
	}

	return sum / float64(len(classes))
}
