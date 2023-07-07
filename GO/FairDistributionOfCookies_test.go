/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFairDistributionOfCookies
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFairDistributionOfCookies(t *testing.T) {
	tables := []struct {
		want    int
		letters []int
		target  int
	}{
		{31, []int{8, 15, 10, 20, 8}, 2},
		{7, []int{6, 1, 3, 2, 2, 4, 1, 2}, 3},
	}

	for _, table := range tables {
		got := distributeCookies(table.letters, table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %b but the return was this: %b", table.want, got)
		}
	}
}
