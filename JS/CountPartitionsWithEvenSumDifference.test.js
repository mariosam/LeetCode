/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countPartitions } from './CountPartitionsWithEvenSumDifference.js'

TEST('Starting CountPartitionsWithEvenSumDifference test...', (t) => {
    //Test 1
    let want = 4
    let got = countPartitions( [10,10,3,7,6] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = countPartitions( [1,2,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 3
    got = countPartitions( [2,4,6,8] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
