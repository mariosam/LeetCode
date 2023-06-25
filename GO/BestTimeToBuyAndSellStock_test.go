/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestBestTimeToBuyAndSellStock
 */
package GO

import (
	"reflect"
	"testing"
)

func TestBestTimeToBuyAndSellStock(t *testing.T) {
	tables := []struct {
		want   int
		prices []int
		fee    int
	}{
		{8, []int{1, 3, 2, 8, 4, 9}, 2},
		{6, []int{1, 3, 7, 5, 10, 3}, 3},
	}

	for _, table := range tables {
		got := maxProfit(table.prices, table.fee)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
