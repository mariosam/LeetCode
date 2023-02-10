/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findMedianSortedArrays } from './MedianOfTwoSortedArrays.js'

TEST('Starting MedianOfTwoSortedArrays test...', (t) => {
    //Test 1
    let want = 2.00000
    let got = findMedianSortedArrays( [1,3], [2] )
    t.assert( want.toString === got.toString, "Expect: 2")
    //Test 2
    want = 2.50000
    got = findMedianSortedArrays( [1,2], [3,4] )
    t.assert( want.toString === got.toString, "Expect: 2.5")

    t.end()
})
