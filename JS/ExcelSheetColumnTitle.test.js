/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { convertToTitle } from './ExcelSheetColumnTitle.js'

TEST('Starting ExcelSheetColumnTitle test...', (t) => {
    //Test 1
    let want = "A"
    let got = convertToTitle( 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "AB"
    got = convertToTitle( 28 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = "ZY"
    got = convertToTitle( 701 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
