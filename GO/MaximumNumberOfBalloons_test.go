/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumNumberOfBalloons
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumNumberOfBalloons(t *testing.T) {
	tables := []struct {
		want int
		text string
	}{
		{1, "nlaebolko"},
		{2, "loonbalxballpoon"},
		{0, "leetcode"},
	}

	for _, table := range tables {
		got := maxNumberOfBalloons(table.text)
		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
