/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findNumbers } from './FindNumbersWithEvenNumberOfDigits.js'

TEST('Starting FindNumbersWithEvenNumberOfDigits test...', (t) => {
    //Test 1
    let want = 2
    let got = findNumbers( [12,345,2,6,7896] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = findNumbers( [555,901,482,1771] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
