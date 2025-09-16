/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindMostFrequentVowelAndConsonant
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindMostFrequentVowelAndConsonant(t *testing.T) {
	tables := []struct {
		want    int
		letters string
	}{
		{6, "successes"},
		{3, "aeiaeia"},
	}

	for _, table := range tables {
		got := maxFreqSum(table.letters)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %b but the return was this: %b", table.want, got)
		}
	}
}
