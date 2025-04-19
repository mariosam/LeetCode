/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countPairs } from './CountEqualAndDivisiblePairsInAnArray.js'

TEST('Starting CountEqualAndDivisiblePairsInAnArray test...', (t) => {
    //Test 1
    let want = 4
    let got = countPairs( [3,1,2,2,2,1,3], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = countPairs( [1,2,3,4], 1 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
