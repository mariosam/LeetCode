/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { successfulPairs } from './SuccessfulPairsOfSpellsAndPotions.js'

TEST('Starting SuccessfulPairsOfSpellsAndPotions test...', (t) => {
    //Test 1
    let want = [4, 0, 3]
    let got = successfulPairs( [5,1,3], [1,2,3,4,5], 7 )
    t.assert( want.toString === got.toString, "Expect: "+want.toString)
    //Test 2
    want = [2, 0, 2]
    got = successfulPairs( [3,1,2], [8,5,8], 16 )
    t.assert( want.toString === got.toString, "Expect: "+want.toString)

    t.end()
})
