/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findKthPositive } from './KthMissingPositiveNumber.js'

TEST('Starting KthMissingPositiveNumber test...', (t) => {
    //Test 1
    let want = 9
    let got = findKthPositive( [2,3,4,7,11], 5 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 6
    got = findKthPositive( [1,2,3,4], 2 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
