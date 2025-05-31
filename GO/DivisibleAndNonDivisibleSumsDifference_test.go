/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestDivisibleAndNonDivisibleSumsDifference
 */
package GO

import (
	"reflect"
	"testing"
)

func TestDivisibleAndNonDivisibleSumsDifference(t *testing.T) {
	tables := []struct {
		want int
		n    int
		m    int
	}{
		{19, 10, 3},
		{15, 5, 6},
		{-15, 5, 1},
	}

	for _, table := range tables {
		got := differenceOfSums(table.n, table.m)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
