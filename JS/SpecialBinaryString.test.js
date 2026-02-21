/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { makeLargestSpecial } from './SpecialBinaryString.js'

TEST('Starting SpecialBinaryString test...', (t) => {
    //Test 1
    let want = "11100100"
    let got = makeLargestSpecial( "11011000" )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = "10"
    got = makeLargestSpecial( "10" )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
 
