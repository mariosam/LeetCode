/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func repeatLimitedString(s string, repeatLimit int) string {
	freq := make([]int, 26) // Frequência de cada caractere
	for _, c := range s {
		freq[c-'a']++
	}

	var result []byte

	for i := 25; i >= 0; {
		if freq[i] == 0 { // Pula se não houver caracteres nesta posição
			i--
			continue
		}

		// Número de vezes que podemos usar o caractere atual
		use := minRep(freq[i], repeatLimit)
		for use > 0 {
			result = append(result, byte('a'+i))
			freq[i]--
			use--
		}

		// Se ainda houver mais do caractere atual, adicionamos um próximo caractere menor
		if freq[i] > 0 {
			next := i - 1
			for next >= 0 && freq[next] == 0 {
				next--
			}

			// Se não houver mais caracteres válidos menores, terminamos
			if next < 0 {
				break
			}

			result = append(result, byte('a'+next))
			freq[next]--
		} else {
			i--
		}
	}

	return string(result)
}

// Função auxiliar para encontrar o menor valor
func minRep(a, b int) int {
	if a < b {
		return a
	}
	return b
}
