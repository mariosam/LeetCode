/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { differenceOfSums } from './DivisibleAndNonDivisibleSumsDifference.js'

TEST('Starting DivisibleAndNonDivisibleSumsDifference test...', (t) => {
    //Test 1
    let want = 19
    let got = differenceOfSums(10, 3)
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 15
    got = differenceOfSums(5, 6)
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = -15
    got = differenceOfSums(5, 1)
    t.assert( want === got, "Expect: "+want)

    t.end()
})
