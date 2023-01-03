/**
 * @version GO 1.19.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMajorityElement
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMajorityElement(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{3, []int{3, 2, 3}},
		{2, []int{2, 2, 1, 1, 1, 2, 2}},
	}

	for _, table := range tables {
		got := majorityElement(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
