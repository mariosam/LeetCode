/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findKthBit } from './FindKthBitInNthBinaryString.js'

TEST('Starting FindKthBitInNthBinaryString test...', (t) => {
    //Test 1
    let want = "0"
    let got = findKthBit( 3, 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "1"
    got = findKthBit( 4, 11 )
    t.assert( want == got, "Expect: "+want)

    t.end()
})
