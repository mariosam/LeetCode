/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestPartitionEqualSubsetSum
 */
package GO

import (
	"reflect"
	"testing"
)

func TestPartitionEqualSubsetSum(t *testing.T) {
	tables := []struct {
		want bool
		num  []int
	}{
		{true, []int{1, 5, 11, 5}},
		{false, []int{1, 2, 3, 5}},
	}

	for _, table := range tables {
		got := canPartition(table.num)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
