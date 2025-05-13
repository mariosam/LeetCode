/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findEvenNumbers } from './Finding3DigitEvenNumbers.js'

TEST('Starting Finding3DigitEvenNumbers test...', (t) => {
    //Test 1
    let want = [102,120,130,132,210,230,302,310,312,320]
    let got = findEvenNumbers( [2,1,3,0] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [222,228,282,288,822,828,882]
    got = findEvenNumbers( [2,2,8,8,2] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = []
    got = findEvenNumbers( [3,7,5] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
