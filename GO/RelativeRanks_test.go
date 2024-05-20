/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestRelativeRanks
 */
package GO

import (
	"reflect"
	"testing"
)

func TestRelativeRanks(t *testing.T) {
	tables := []struct {
		want  []string
		score []int
	}{
		{[]string{"Gold Medal", "Silver Medal", "Bronze Medal", "4", "5"}, []int{5, 4, 3, 2, 1}},
		{[]string{"Gold Medal", "5", "Bronze Medal", "Silver Medal", "4"}, []int{10, 3, 8, 9, 4}},
	}

	for _, table := range tables {
		got := findRelativeRanks(table.score)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
