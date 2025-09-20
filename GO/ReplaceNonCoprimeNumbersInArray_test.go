/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestReplaceNonCoprimeNumbersInArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestReplaceNonCoprimeNumbersInArray(t *testing.T) {
	tables := []struct {
		want []int
		str  []int
	}{
		{[]int{12, 7, 6}, []int{6, 4, 3, 2, 7, 6, 2}},
		{[]int{2, 1, 1, 3}, []int{2, 2, 1, 1, 3, 3, 3}},
	}

	for _, table := range tables {
		got := replaceNonCoprimes(table.str)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %v but the return was this: %v", table.want, got)
		}
	}
}
