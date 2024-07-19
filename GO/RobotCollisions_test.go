/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestRobotCollisions
 */
package GO

import (
	"reflect"
	"testing"
)

func TestRobotCollisions(t *testing.T) {
	tables := []struct {
		want      []int
		position  []int
		health    []int
		direction string
	}{
		{[]int{2, 17, 9, 15, 10}, []int{5, 4, 3, 2, 1}, []int{2, 17, 9, 15, 10}, "RRRRR"},
		{[]int{14}, []int{3, 5, 2, 6}, []int{10, 10, 15, 12}, "RLRL"},
		{[]int{}, []int{1, 2, 5, 6}, []int{10, 10, 11, 11}, "RLRL"},
	}

	for _, table := range tables {
		got := survivedRobotsHealths(table.position, table.health, table.direction)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
