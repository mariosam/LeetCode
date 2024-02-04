/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxSumAfterPartitioning } from './PartitionArrayForMaximumSum.js'

TEST('Starting PartitionArrayForMaximumSum test...', (t) => {
    //Test 1
    let want = 84
    let got = maxSumAfterPartitioning( [1,15,7,9,2,5,10], 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 83
    got = maxSumAfterPartitioning( [1,4,1,5,7,3,6,1,9,9,3], 4 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 1
    got = maxSumAfterPartitioning( [1], 1 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
