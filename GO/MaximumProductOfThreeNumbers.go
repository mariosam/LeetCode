/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maximumProduct(nums []int) int {
	max1 := -int(^uint(0)>>1) - 1

	max2 := max1
	max3 := max1
	min1 := int(^uint(0) >> 1)
	min2 := min1
	for _, num := range nums {
		if num > max1 {
			max3 = max2
			max2 = max1
			max1 = num
		} else if num > max2 {
			max3 = max2
			max2 = num
		} else if num > max3 {
			max3 = num
		}
		if num < min1 {
			min2 = min1
			min1 = num
		} else if num < min2 {
			min2 = num
		}
	}
	product1 := max1 * max2 * max3
	product2 := max1 * min1 * min2
	if product1 > product2 {
		return product1
	}
	return product2
}
