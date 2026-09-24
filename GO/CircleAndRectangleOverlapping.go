/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func checkOverlap(radius int, xCenter int, yCenter int, x1 int, y1 int, x2 int, y2 int) bool {
	res := 0

	if xCenter < x1 || xCenter > x2 {
		a := x1 - xCenter
		b := xCenter - x2

		if a*a < b*b {
			res += a * a
		} else {
			res += b * b
		}
	}

	if yCenter < y1 || yCenter > y2 {
		a := y1 - yCenter
		b := yCenter - y2

		if a*a < b*b {
			res += a * a
		} else {
			res += b * b
		}
	}
	return res <= radius*radius
}
