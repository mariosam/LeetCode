/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countPermutations } from './CountTheNumberOfComputerUnlockingPermutations.js'

TEST('Starting CountTheNumberOfComputerUnlockingPermutations test...', (t) => {
    //Test 1
    let want = 2
    let got = countPermutations( [1,2,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = countPermutations( [3,3,3,4,4,4] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
