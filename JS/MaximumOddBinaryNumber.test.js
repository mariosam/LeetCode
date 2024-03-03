/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maximumOddBinaryNumber } from './MaximumOddBinaryNumber.js'

TEST('Starting MaximumOddBinaryNumber test...', (t) => {
    //Test 1
    let want = "001"
    let got = maximumOddBinaryNumber( "010" )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = "1001"
    got = maximumOddBinaryNumber( "0101" )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
