/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"sort"
	"strconv"
)

type Item struct {
	item   int
	index  int
	mapped int
}

func sortJumbled(mapping []int, nums []int) []int {
	items := make([]Item, len(nums))
	for i, item := range nums {
		mapped := mapNumber(item, mapping)
		items[i] = Item{item, i, mapped}
	}
	sort.SliceStable(items, func(i, j int) bool {
		if items[i].mapped != items[j].mapped {
			return items[i].mapped < items[j].mapped
		}
		return items[i].index < items[j].index
	})
	result := make([]int, len(nums))
	for i, item := range items {
		result[i] = item.item
	}
	return result
}

func mapNumber(number int, mapping []int) int {
	numStr := strconv.Itoa(number)
	mappedStr := ""
	for _, c := range numStr {
		mappedStr += strconv.Itoa(mapping[c-'0'])
	}
	mapped, _ := strconv.Atoi(mappedStr)
	return mapped
}
