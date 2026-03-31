/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindTheStringWithLCP
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindTheStringWithLCP(t *testing.T) {
	tables := []struct {
		want string
		n    [][]int
	}{
		{"abab", [][]int{{4, 0, 2, 0}, {0, 3, 0, 1}, {2, 0, 2, 0}, {0, 1, 0, 1}}},
		{"aaaa", [][]int{{4, 3, 2, 1}, {3, 3, 2, 1}, {2, 2, 2, 1}, {1, 1, 1, 1}}},
		{"", [][]int{{4, 3, 2, 1}, {3, 3, 2, 1}, {2, 2, 2, 1}, {1, 1, 1, 3}}},
	}

	for _, table := range tables {
		got := findTheString(table.n)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
