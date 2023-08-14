/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { longestArithSeqLength } from './LongestArithmeticSubsequence.js'

TEST('Starting LongestArithmeticSubsequence test...', (t) => {
    //Test 1
    let want = 4
    let got = longestArithSeqLength( [3,6,9,12] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = longestArithSeqLength( [9,4,7,2,10] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 4
    got = longestArithSeqLength( [20,1,15,3,10,5,8] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
  
