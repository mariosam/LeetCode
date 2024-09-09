/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindMissingObservations
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindMissingObservations(t *testing.T) {
	tables := []struct {
		want  []int
		rools []int
		mean  int
		n     int
	}{
		{[]int{6, 6}, []int{3, 2, 4, 3}, 4, 2},
		{[]int{3, 2, 2, 2}, []int{1, 5, 6}, 3, 4},
		{[]int{}, []int{1, 2, 3, 4}, 6, 4}}

	for _, table := range tables {
		got := missingRolls(table.rools, table.mean, table.n)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
