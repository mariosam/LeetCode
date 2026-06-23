/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func angleClock(hour int, minutes int) float64 {
	minAngle := float64(minutes*360) / 60

	hourAnglePart1 := 0.0
	if hour != 12 {
		hourAnglePart1 = float64(hour*360) / 12
	}
	hourAnglePart2 := float64(30*minutes) / 60.0
	hourAngle := hourAnglePart1 + hourAnglePart2
	preResult := math.Abs(minAngle - hourAngle)
	if preResult > 180 {
		return 360 - preResult
	}
	return preResult
}
