/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestBestTimeToBuyAndSellStockUsingStrategy
 */
package GO

import (
	"reflect"
	"testing"
)

func TestBestTimeToBuyAndSellStockUsingStrategy(t *testing.T) {
	tables := []struct {
		want     int64
		prices   []int
		strategy []int
		k        int
	}{
		{10, []int{4, 2, 8}, []int{-1, 0, 1}, 2},
		{9, []int{5, 4, 3}, []int{1, 1, 0}, 2},
	}

	for _, table := range tables {
		got := maxProfitTB(table.prices, table.strategy, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
