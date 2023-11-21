/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestKokoEatingBananas
 */
package GO

import (
	"reflect"
	"testing"
)

func TestKokoEatingBananas(t *testing.T) {
	tables := []struct {
		want  int
		piles []int
		hours int
	}{
		{4, []int{3, 6, 7, 11}, 8},
		{30, []int{30, 11, 23, 4, 20}, 5},
		{23, []int{30, 11, 23, 4, 20}, 6},
		{1, []int{312884470}, 968709470},
		{14, []int{332484035, 524908576, 855865114, 632922376, 222257295, 690155293, 112677673, 679580077, 337406589, 290818316, 877337160, 901728858, 679284947, 688210097, 692137887, 718203285, 629455728, 941802184}, 823855818},
	}

	for _, table := range tables {
		got := minEatingSpeed(table.piles, table.hours)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
