/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countFairPairs } from './CountTheNumberOfFairPairs.js'

TEST('Starting CountTheNumberOfFairPairs test...', (t) => {
    //Test 1
    let want = 6
    let got = countFairPairs( [0,1,7,4,4,5], 3, 6 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = countFairPairs( [1,7,9,2,5], 11, 11 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
