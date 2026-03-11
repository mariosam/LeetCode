/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindUniqueBinaryString
 */
package GO

import (
	"testing"
)

func TestFindUniqueBinaryString(t *testing.T) {
	// Test 1
	nums1 := []string{"01", "10"}
	res1 := findDifferentBinaryString(nums1)

	if !validate(nums1, res1) {
		t.Errorf("invalid result: %s", res1)
	}

	// Test 2
	nums2 := []string{"00", "01"}
	res2 := findDifferentBinaryString(nums2)

	if !validate(nums2, res2) {
		t.Errorf("invalid result: %s", res2)
	}

	// Test 3
	nums3 := []string{"111", "011", "001"}
	res3 := findDifferentBinaryString(nums3)

	if !validate(nums3, res3) {
		t.Errorf("invalid result: %s", res3)
	}
}

func validate(nums []string, result string) bool {
	if len(result) != len(nums) {
		return false
	}

	for _, v := range nums {
		if v == result {
			return false
		}
	}

	return true
}
