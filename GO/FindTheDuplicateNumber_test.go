/**
 * @version GO 1.21.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindTheDuplicateNumber
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindTheDuplicateNumber(t *testing.T) {
	tables := []struct {
		want int
		gain []int
	}{
		{2, []int{1, 3, 4, 2, 2}},
		{3, []int{3, 1, 3, 4, 2}},
	}

	for _, table := range tables {
		got := findDuplicate(table.gain)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
