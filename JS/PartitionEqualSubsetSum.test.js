/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { canPartition } from './PartitionEqualSubsetSum.js'

TEST('Starting PartitionEqualSubsetSum test...', (t) => {
    //Test 1
    let want = true
    let got = canPartition( [1,5,11,5] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = canPartition( [1,2,3,5] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
