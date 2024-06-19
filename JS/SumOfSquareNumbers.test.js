/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { judgeSquareSum } from './SumOfSquareNumbers.js'

TEST('Starting SumOfSquareNumbers test...', (t) => {
    //Test 1
    let want = true
    let got = judgeSquareSum( 5 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = judgeSquareSum( 3 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
