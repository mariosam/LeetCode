/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { merge } from './MergeSortedArray.js'

TEST('Starting MergeSortedArray test...', (t) => {
    //Test 1
    let want = [1,2,2,3,5,6]
    let got = merge( [1,2,3,0,0,0], 3, [2,5,6], 3 )
    t.assert( want.toString === got.toString, "Expect: 1,2,2,3,5,6")
    //Test 2
    want = [1]
    got = merge( [1], 1, [], 0 )
    t.assert( want.toString === got.toString, "Expect: 1")
    //Test 3
    want = [1]
    got = merge( [], 0, [1], 1 )
    t.assert( want.toString === got.toString, "Expect: 1")
    //Test 4
    want = [1,2,3,4,5,6]
    got = merge( [4,0,0,0,0,0], 1, [1,2,3,5,6], 5 )
    t.assert( want.toString === got.toString, "Expect: 1,2,3,4,5,6")
    //Test 5
    want = [1,2,3,4,5,6]
    got = merge( [1,2,4,5,6,0], 5, [3], 1 )
    t.assert( want.toString === got.toString, "Expect: 1,2,3,4,5,6")

    t.end()
})
