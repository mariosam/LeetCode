/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { targetIndices } from './FindTargetIndicesAfterSortingArray.js'

TEST('Starting FindTargetIndicesAfterSortingArray test...', (t) => {
    //Test 1
    let want = [1,2]
    let got = targetIndices( [1,2,5,2,3], 2 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [3]
    got = targetIndices( [1,2,5,2,3], 3 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = [4]
    got = targetIndices( [1,2,5,2,3], 5 )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
