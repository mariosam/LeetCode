/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxDotProduct } from './MaxDotProductOfTwoSubsequences.js'

TEST('Starting MaxDotProductOfTwoSubsequences test...', (t) => {
    //Test 1
    let want = 18
    let got = maxDotProduct( [2,1,-2,5], [3,0,-6] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 21
    got = maxDotProduct( [3,-2], [2,-6,7] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = -1
    got = maxDotProduct( [-1,-1], [1,1] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
