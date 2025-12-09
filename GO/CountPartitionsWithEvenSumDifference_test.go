/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountPartitionsWithEvenSumDifference
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountPartitionsWithEvenSumDifference(t *testing.T) {
	tables := []struct {
		want  int
		words []int
	}{
		{4, []int{10, 10, 3, 7, 6}},
		{0, []int{1, 2, 2}},
		{3, []int{2, 4, 6, 8}},
	}

	for _, table := range tables {
		got := countPartitions(table.words)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
