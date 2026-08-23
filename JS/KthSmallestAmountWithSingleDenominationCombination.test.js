/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findKthSmallest } from './KthSmallestAmountWithSingleDenominationCombination.js'

TEST('Starting KthSmallestAmountWithSingleDenominationCombination test...', (t) => {
    //Test 1
    let want = 9
    let got = findKthSmallest( [3,6,9], 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 12
    got = findKthSmallest( [5,2], 7 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
