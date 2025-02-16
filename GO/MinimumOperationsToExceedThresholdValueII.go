/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "container/heap"

type MinHeap []int64

func (h MinHeap) Len() int           { return len(h) }
func (h MinHeap) Less(i, j int) bool { return h[i] < h[j] }
func (h MinHeap) Swap(i, j int)      { h[i], h[j] = h[j], h[i] }
func (h *MinHeap) Push(x interface{}) {
	*h = append(*h, x.(int64))
}
func (h *MinHeap) Pop() interface{} {
	old := *h
	n := len(old)
	x := old[n-1]
	*h = old[:n-1]
	return x
}

func minOperationsII(nums []int, k int) int {
	pq := &MinHeap{}
	heap.Init(pq)
	for _, num := range nums {
		heap.Push(pq, int64(num))
	}

	ops := 0
	for pq.Len() > 1 {
		x := heap.Pop(pq).(int64)
		if x >= int64(k) {
			break
		}
		y := heap.Pop(pq).(int64)
		heap.Push(pq, x*2+y)
		ops++
	}
	return ops
}
