/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountOperationsToObtainZero
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountOperationsToObtainZero(t *testing.T) {
	tables := []struct {
		want int
		num1 int
		num2 int
	}{
		{3, 2, 3},
		{1, 10, 10},
	}

	for _, table := range tables {
		got := countOperations(table.num1, table.num2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
