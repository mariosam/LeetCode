/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numberOfArrays } from './CountTheHiddenSequences.js'

TEST('Starting CountTheHiddenSequences test...', (t) => {
    //Test 1
    let want = 2
    let got = numberOfArrays( [1,-3,4], 1, 6 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 4
    got = numberOfArrays( [3,-4,5,1,-2], -4, 5 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = numberOfArrays( [4,-7,2], 3, 6 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
