/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"container/heap"
	"math"
)

func minCostEdge(n int, edges [][]int) int {
	g := make([][][2]int, n)
	for _, e := range edges {
		u, v, w := e[0], e[1], e[2]
		g[u] = append(g[u], [2]int{v, w})
		g[v] = append(g[v], [2]int{u, w * 2})
	}

	dist := make([]int, n)
	for i := range dist {
		dist[i] = math.MaxInt32
	}
	dist[0] = 0

	pq := &PQ{}
	heap.Push(pq, ItemD{0, 0})

	for pq.Len() > 0 {
		cur := heap.Pop(pq).(ItemD)
		d, u := cur.d, cur.u
		if d > dist[u] {
			continue
		}
		if u == n-1 {
			return d
		}
		for _, e := range g[u] {
			v, w := e[0], e[1]
			if d+w < dist[v] {
				dist[v] = d + w
				heap.Push(pq, ItemD{dist[v], v})
			}
		}
	}
	return -1
}

type ItemD struct {
	d, u int
}
type PQ []ItemD

func (p PQ) Len() int           { return len(p) }
func (p PQ) Less(i, j int) bool { return p[i].d < p[j].d }
func (p PQ) Swap(i, j int)      { p[i], p[j] = p[j], p[i] }
func (p *PQ) Push(x any)        { *p = append(*p, x.(ItemD)) }
func (p *PQ) Pop() any {
	old := *p
	x := old[len(old)-1]
	*p = old[:len(old)-1]
	return x
}
