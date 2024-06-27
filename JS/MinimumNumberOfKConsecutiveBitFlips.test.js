/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minKBitFlips } from './MinimumNumberOfKConsecutiveBitFlips.js'

TEST('Starting MinimumNumberOfKConsecutiveBitFlips test...', (t) => {
    //Test 1
    let want = 2
    let got = minKBitFlips( [0,1,0], 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -1
    got = minKBitFlips( [1,1,0], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 3
    got = minKBitFlips( [0,0,0,1,0,1,1,0], 3 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
