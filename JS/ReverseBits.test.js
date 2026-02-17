/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { reverseBits } from './ReverseBits.js'

TEST('Starting ReverseBits test...', (t) => {
    //Test 1
    let want = 964176192
    let got = reverseBits( 43261596 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1073741822
    got = reverseBits( 2147483644 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
