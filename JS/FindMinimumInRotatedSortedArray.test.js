/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findMin } from './FindMinimumInRotatedSortedArray.js'

TEST('Starting FindMinimumInRotatedSortedArray test...', (t) => {
    //Test 1
    let want = 1
    let got = findMin( [3,4,5,1,2] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = 0
    got = findMin( [4,5,6,7,0,1,2] )
    t.assert( want.toString == got.toString, "Expect: "+want)
    //Test 3
    want = 11
    got = findMin( [11,13,15,17] )
    t.assert( want.toString == got.toString, "Expect: "+want)

    t.end()
})
