/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { divideArray } from './DivideArrayIntoEqualPairs.js'

TEST('Starting DivideArrayIntoEqualPairs test...', (t) => {
    //Test 1
    let want = true
    let got = divideArray( [3,2,3,2,2,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = divideArray( [1,2,3,4] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
