/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minDifference } from './MinimumDifferenceBetweenLargestAndSmallestValueInThreeMoves.js'

TEST('Starting MinimumDifferenceBetweenLargestAndSmallestValueInThreeMoves test...', (t) => {
    //Test 1
    let want = 0
    let got = minDifference( [5,3,2,4] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = minDifference( [1,5,0,10,14] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = minDifference( [3,100,20] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
