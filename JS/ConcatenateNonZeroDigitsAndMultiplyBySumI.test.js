/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { sumAndMultiply } from './ConcatenateNonZeroDigitsAndMultiplyBySumI.js'

TEST('Starting ConcatenateNonZeroDigitsAndMultiplyBySumI test...', (t) => {
    //Test 1
    let want = 12340
    let got = sumAndMultiply( 10203004 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = sumAndMultiply( 1000 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
