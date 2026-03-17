/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minNumberOfSeconds } from './MinimumNumberOfSecondsToMakeMountainHeightZero.js'

TEST('Starting MinimumNumberOfSecondsToMakeMountainHeightZero test...', (t) => {
    //Test 1
    let want = 3
    let got = minNumberOfSeconds( 4, [2, 1, 1] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 12
    got = minNumberOfSeconds( 10, [3, 2, 2, 4] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 15
    got = minNumberOfSeconds( 5, [1] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
