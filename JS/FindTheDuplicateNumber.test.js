/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findDuplicate } from './FindTheDuplicateNumber.js'

TEST('Starting FindTheDuplicateNumber test...', (t) => {
    //Test 1
    let want = 2
    let got = findDuplicate( [1,3,4,2,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = findDuplicate( [3,1,3,4,2] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
