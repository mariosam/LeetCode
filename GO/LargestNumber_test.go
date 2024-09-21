/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLargestNumber
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLargestNumber(t *testing.T) {
	tables := []struct {
		want string
		n    []int
	}{
		{"210", []int{10, 2}},
		{"9534330", []int{3, 30, 34, 5, 9}},
	}

	for _, table := range tables {
		got := largestNumber(table.n)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
