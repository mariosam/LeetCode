/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { rangeSum } from './RangeSumOfSortedSubarraySums.js'

TEST('Starting RangeSumOfSortedSubarraySums test...', (t) => {
    //Test 1
    let want = 13
    let got = rangeSum( [1,2,3,4], 4, 1, 5 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 6
    got = rangeSum( [1,2,3,4], 4, 3, 4 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 50
    got = rangeSum( [1,2,3,4], 4, 1, 10 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
