/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strings"

func decodeCiphertext(encodedText string, rows int) string {
	size := len(encodedText)
	if rows == 1 || size <= 1 {
		return encodedText
	}

	cols := size / rows
	posX, posY := 0, 0
	var ret strings.Builder

	for posY < cols {
		index := posX*cols + posY
		ret.WriteByte(encodedText[index])

		posX++
		posY++

		if posX >= rows {
			posX = 0
			posY = posY - rows + 1
		}
	}

	return strings.TrimRight(ret.String(), " ")
}
