/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { leftRightDifference } from './LeftAndRightSumDifferences.js'

TEST('Starting LeftAndRightSumDifferences test...', (t) => {
    //Test 1
    let want = [15,1,11,22]
    let got = leftRightDifference( [10,4,8,3] )
    t.assert( want.toString() === got.toString(), "Expect: "+want)
    //Test 2
    want = [0]
    got = leftRightDifference( [1] )
    t.assert( want.toString() === got.toString(), "Expect: "+want)

    t.end()
})
  
