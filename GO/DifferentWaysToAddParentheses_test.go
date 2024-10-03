/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestDifferentWaysToAddParentheses
 */
package GO

import (
	"reflect"
	"testing"
)

func TestDifferentWaysToAddParentheses(t *testing.T) {
	tables := []struct {
		want  []int
		word1 string
	}{
		{[]int{2, 0}, "2-1-1"},
		{[]int{-34, -10, -14, -10, 10}, "2*3-4*5"},
	}

	for _, table := range tables {
		got := diffWaysToCompute(table.word1)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
