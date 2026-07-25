/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximizeActiveSectionWithTradeI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximizeActiveSectionWithTradeI(t *testing.T) {
	tables := []struct {
		want   int
		answer string
	}{
		{1, "01"},
		{4, "0100"},
		{7, "1000100"},
		{4, "01010"},
	}

	for _, table := range tables {
		got := maxActiveSectionsAfterTrade(table.answer) // Assuming the input is a single string

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
