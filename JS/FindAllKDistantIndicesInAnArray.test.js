/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findKDistantIndices } from './FindAllKDistantIndicesInAnArray.js'

TEST('Starting FindAllKDistantIndicesInAnArray test...', (t) => {
    //Test 1
    let want = [1,2,3,4,5,6]
    let got = findKDistantIndices( [3,4,9,1,3,9,5], 9, 1 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [0,1,2,3,4]
    got = findKDistantIndices( [2,2,2,2,2], 2, 2 )
    t.assert( want.toString == got.toString, "Expect: "+want)

    t.end()
})
