/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFinding3DigitEvenNumbers
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFinding3DigitEvenNumbers(t *testing.T) {
	tables := []struct {
		want []int
		n    []int
	}{
		{[]int{102, 120, 130, 132, 210, 230, 302, 310, 312, 320}, []int{2, 1, 3, 0}},
		{[]int{222, 228, 282, 288, 822, 828, 882}, []int{2, 2, 8, 8, 2}},
		{[]int{}, []int{3, 7, 5}},
	}

	for _, table := range tables {
		got := findEvenNumbers(table.n)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
