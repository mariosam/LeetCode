/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestBinaryPrefixDivisibleBy5
 */
package GO

import (
	"reflect"
	"testing"
)

func TestBinaryPrefixDivisibleBy5(t *testing.T) {
	tables := []struct {
		want []bool
		nums []int
	}{
		{[]bool{true, false, false}, []int{0, 1, 1}},
		{[]bool{false, false, false}, []int{1, 1, 1}},
	}

	for _, table := range tables {
		got := prefixesDivBy5(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %v but the return was this: %v", table.want, got)
		}
	}
}
