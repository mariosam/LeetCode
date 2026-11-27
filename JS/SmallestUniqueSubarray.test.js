/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { smallestUniqueSubarray } from './SmallestUniqueSubarray.js'

TEST('Starting SmallestUniqueSubarray test...', (t) => {
    //Test 1
    let want = 3
    let got = smallestUniqueSubarray( [3,3,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = smallestUniqueSubarray( [2,1,2,3,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 2
    got = smallestUniqueSubarray( [1,1,2,2,1] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
 
