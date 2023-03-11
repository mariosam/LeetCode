/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { convert } from './ZigzagConversion.js'

TEST('Starting ZigzagConversion test...', (t) => {
    //Test 1
    let want = "PAHNAPLSIIGYIR"
    let got = convert( "PAYPALISHIRING", 3 )
    t.assert( want === got, "Expect: PAHNAPLSIIGYIR")
    //Test 2
    want = "PINALSIGYAHRPI"
    got = convert( "PAYPALISHIRING", 4 )
    t.assert( want === got, "Expect: PINALSIGYAHRPI")
    //Test 3
    want = "A"
    got = convert( "A", 1 )
    t.assert( want === got, "Expect: 1")

    t.end()
})
