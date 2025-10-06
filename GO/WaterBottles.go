/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numWaterBottles(numBottles int, numExchange int) int {
	if numBottles < numExchange {
		return numBottles
	}
	quotient := numBottles / numExchange
	reminder := numBottles % numExchange
	ans := numBottles + quotient
	for quotient+reminder >= numExchange {
		quotient, reminder = (quotient+reminder)/numExchange, (quotient+reminder)%numExchange
		ans += quotient
	}
	return ans
}
