/**
 * @version GO 1.19.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFirstMissingPositive
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFirstMissingPositive(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{3, []int{1, 2, 0}},
		{2, []int{3, 4, -1, 1}},
		{1, []int{7, 8, 9, 11, 12}},
		{2, []int{1, 1}},
		{3, []int{0, 2, 2, 1, 1}},
		{2, []int{1}},
		{3, []int{2, 1}},
		{1, []int{2}},
		{1, []int{-5}},
		{2, []int{1, 1000}},
		{11, []int{1, 2, 3, 4, 5, 6, 7, 8, 9, 10}},
		{2, []int{1, 3, 3}},
		{100, []int{99, 94, 96, 11, 92, 5, 91, 89, 57, 85, 66, 63, 84, 81, 79, 61, 74, 78, 77, 30, 64, 13, 58, 18, 70, 69, 51, 12, 32, 34, 9, 43, 39, 8, 1, 38, 49, 27, 21, 45, 47, 44, 53, 52, 48, 19, 50, 59, 3, 40, 31, 82, 23, 56, 37, 41, 16, 28, 22, 33, 65, 42, 54, 20, 29, 25, 10, 26, 4, 60, 67, 83, 62, 71, 24, 35, 72, 55, 75, 0, 2, 46, 15, 80, 6, 36, 14, 73, 76, 86, 88, 7, 17, 87, 68, 90, 95, 93, 97, 98}},
	}

	for _, table := range tables {
		got := firstMissingPositive(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
