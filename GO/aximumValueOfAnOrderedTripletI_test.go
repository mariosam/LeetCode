/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumValueOfAnOrderedTripletI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumValueOfAnOrderedTripletI(t *testing.T) {
	tables := []struct {
		want  int64
		score []int
	}{
		{77, []int{12, 6, 1, 2, 7}},
		{133, []int{1, 10, 3, 4, 19}},
		{0, []int{1, 2, 3}},
	}

	for _, table := range tables {
		got := maximumTripletValue(table.score)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
