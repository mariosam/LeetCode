/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minCost } from './MinimumTimeToMakeRopeColorful.js'

TEST('Starting MinimumTimeToMakeRopeColorful test...', (t) => {
    //Test 1
    let want = 3
    let got = minCost( "abaac", [1,2,3,4,5] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = minCost( "abc", [1,2,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 2
    got = minCost( "aabaa", [1,2,3,4,1] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
