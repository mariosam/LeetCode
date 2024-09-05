/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindTheStudentThatWillReplaceTheChalk
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindTheStudentThatWillReplaceTheChalk(t *testing.T) {
	tables := []struct {
		want int
		nums []int
		n    int
	}{
		{0, []int{5, 1, 5}, 22},
		{1, []int{3, 4, 1, 2}, 25},
	}

	for _, table := range tables {
		got := chalkReplacer(table.nums, table.n)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
