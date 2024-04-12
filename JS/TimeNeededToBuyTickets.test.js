/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { timeRequiredToBuy } from './TimeNeededToBuyTickets.js'

TEST('Starting TimeNeededToBuyTickets test...', (t) => {
    //Test 1
    let want = 6
    let got = timeRequiredToBuy( [2,3,2], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 8
    got = timeRequiredToBuy( [5,1,1,1], 0 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
