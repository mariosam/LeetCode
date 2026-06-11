/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestPartitionArrayAccordingToGivenPivot
 */
package GO

import (
	"reflect"
	"testing"
)

func TestPartitionArrayAccordingToGivenPivot(t *testing.T) {
	tables := []struct {
		want []int
		num  []int
		k    int
	}{
		{[]int{9, 5, 3, 10, 10, 12, 14}, []int{9, 12, 5, 10, 14, 3, 10}, 10},
		{[]int{-3, 2, 4, 3}, []int{-3, 4, 3, 2}, 2},
	}

	for _, table := range tables {
		got := pivotArray(table.num, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
