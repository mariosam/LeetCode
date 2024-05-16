/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCompareVersionNumbers
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCompareVersionNumbers(t *testing.T) {
	tables := []struct {
		want     int
		version1 string
		version2 string
	}{
		{-1, "1.2", "1.10"},
		{0, "1.01", "1.001"},
		{0, "1.0", "1.0.0.0"},
	}

	for _, table := range tables {
		got := compareVersion(table.version1, table.version2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
