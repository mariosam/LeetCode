/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindNumbersWithEvenNumberOfDigits
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindNumbersWithEvenNumberOfDigits(t *testing.T) {
	tables := []struct {
		want    int
		letters []int
	}{
		{2, []int{12, 345, 2, 6, 7896}},
		{1, []int{555, 901, 482, 1771}},
	}

	for _, table := range tables {
		got := findNumbers(table.letters)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %b but the return was this: %b", table.want, got)
		}
	}
}
