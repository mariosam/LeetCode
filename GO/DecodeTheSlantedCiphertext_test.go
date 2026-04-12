/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestDecodeTheSlantedCiphertext
 */
package GO

import (
	"reflect"
	"testing"
)

func TestDecodeTheSlantedCiphertext(t *testing.T) {
	tables := []struct {
		want string
		nums string
		k    int
	}{
		{"cipher", "ch   ie   pr", 3},
		{"i love leetcode", "iveo    eed   l te   olc", 4},
		{"coding", "coding", 1},
	}

	for _, table := range tables {
		got := decodeCiphertext(table.nums, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
