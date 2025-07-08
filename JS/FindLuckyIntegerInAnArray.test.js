/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findLucky } from './FindLuckyIntegerInAnArray.js'

TEST('Starting FindLuckyIntegerInAnArray test...', (t) => {
    //Test 1
    let want = 2
    let got = findLucky( [2,2,3,4] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = findLucky( [1,2,2,3,3,3] )
    t.assert( want == got, "Expect: "+want)
    //Test 3
    want = -1
    got = findLucky( [2,2,2,3,3] )
    t.assert( want == got, "Expect: "+want)

    t.end()
})
