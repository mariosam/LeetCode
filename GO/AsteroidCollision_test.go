/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestAsteroidCollision
 */
package GO

import (
	"reflect"
	"testing"
)

func TestAsteroidCollision(t *testing.T) {
	tables := []struct {
		want  []int
		nums1 []int
	}{
		{[]int{5, 10}, []int{5, 10, -5}},
		{[]int{}, []int{8, -8}},
		{[]int{10}, []int{10, 2, -5}},
	}

	for _, table := range tables {
		got := asteroidCollision(table.nums1)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
