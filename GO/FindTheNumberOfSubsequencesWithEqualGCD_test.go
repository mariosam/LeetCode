/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindTheNumberOfSubsequencesWithEqualGCD
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindTheNumberOfSubsequencesWithEqualGCD(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{10, []int{1, 2, 3, 4}},
		{2, []int{10, 20, 30}},
		{50, []int{1, 1, 1, 1}},
	}

	for _, table := range tables {
		got := subsequencePairCount(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
