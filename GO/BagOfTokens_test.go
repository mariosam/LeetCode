/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestBagOfTokens
 */
package GO

import (
	"reflect"
	"testing"
)

func TestBagOfTokens(t *testing.T) {
	tables := []struct {
		want   int
		prices []int
		fee    int
	}{
		{0, []int{100}, 50},
		{1, []int{200, 100}, 150},
		{2, []int{100, 200, 300, 400}, 200},
	}

	for _, table := range tables {
		got := bagOfTokensScore(table.prices, table.fee)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
