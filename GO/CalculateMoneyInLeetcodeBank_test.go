/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCalculateMoneyInLeetcodeBank
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCalculateMoneyInLeetcodeBank(t *testing.T) {
	tables := []struct {
		want int
		num  int
	}{
		{10, 4},
		{37, 10},
		{96, 20},
	}

	for _, table := range tables {
		got := totalMoney(table.num)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
