/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximizeTheConfusionOfAnExam
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximizeTheConfusionOfAnExam(t *testing.T) {
	tables := []struct {
		want   int
		answer string
		k      int
	}{
		{4, "TTFF", 2},
		{3, "TFFT", 1},
		{5, "TTFTTFTT", 1},
	}

	for _, table := range tables {
		got := maxConsecutiveAnswers(table.answer, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
