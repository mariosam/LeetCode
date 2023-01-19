/**
 * @version GO 1.19.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func minimumRounds(tasks []int) int {
	sort.Ints(tasks)
	group := 1
	rounds := 0

	if len(tasks) == 1 {
		return -1
	}

	for i := 1; i < len(tasks); i++ {
		//se for igual ao anterior
		if tasks[i] == tasks[i-1] {
			group++
		} else {
			//impossivel completar as tarefas
			if group == 1 {
				return -1
			}
			//verifica a contagem do grupo
			rounds += checkRounds(group)
			//reinicia contagem
			group = 1
		}
	}
	//verifica ultimo grupo
	if group == 1 {
		return -1
	}
	rounds += checkRounds(group)

	return rounds
}

func checkRounds(group int) int {
	if group%3 == 0 {
		return group / 3
	}

	for i := group; i > -1; i = i - 2 {
		if i%3 == 0 {
			return ((i / 3) + (group-i)/2)
		}
	}

	return group / 2
}
