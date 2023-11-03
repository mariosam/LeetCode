/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findArray } from './FindTheOriginalArrayOfPrefixXor.js'

TEST('Starting FindTheOriginalArrayOfPrefixXor test...', (t) => {
    //Test 1
    let want = [5,7,2,3,2]
    let got = findArray( [5,2,0,3,1] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [13]
    got = findArray( [13] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
