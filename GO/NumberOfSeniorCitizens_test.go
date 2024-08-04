/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNumberOfSeniorCitizens
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNumberOfSeniorCitizens(t *testing.T) {
	tables := []struct {
		want int
		nums []string
	}{
		{2, []string{"7868190130M7522", "5303914400F9211", "9273338290F4010"}},
		{0, []string{"1313579440F2036", "2921522980M5644"}},
	}

	for _, table := range tables {
		got := countSeniors(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
