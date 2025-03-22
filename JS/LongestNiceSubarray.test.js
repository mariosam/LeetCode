/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { longestNiceSubarray } from './LongestNiceSubarray.js'

TEST('Starting LongestNiceSubarray test...', (t) => {
    //Test 1
    let want = 3
    let got = longestNiceSubarray( [1,3,8,48,10] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = longestNiceSubarray( [3,1,5,11,13] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
 
