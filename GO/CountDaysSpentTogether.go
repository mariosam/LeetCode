/**
 * @version GO 1.27.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "fmt"

func countDaysTogether(arriveAlice string, leaveAlice string, arriveBob string, leaveBob string) int {
	days := [12]int{31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31}

	if arriveAlice > leaveBob || arriveBob > leaveAlice {
		return 0
	}

	if arriveAlice == leaveBob || arriveBob == leaveAlice {
		return 1
	}
	maxArrive := arriveAlice

	if arriveBob > maxArrive {
		maxArrive = arriveBob
	}
	minLeave := leaveAlice

	if leaveBob < minLeave {
		minLeave = leaveBob
	}
	var m1, d1, m2, d2 int
	fmt.Sscanf(maxArrive, "%d-%d", &m1, &d1)
	fmt.Sscanf(minLeave, "%d-%d", &m2, &d2)

	if m1 == m2 {
		return d2 - d1 + 1
	}
	res := days[m1-1] - d1 + 1

	for i := m1 + 1; i < m2; i++ {
		res += days[i-1]
	}
	res += d2

	return res
}
