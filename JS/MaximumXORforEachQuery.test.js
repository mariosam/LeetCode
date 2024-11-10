/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { getMaximumXor } from './MaximumXORforEachQuery.js'

TEST('Starting MaximumXORforEachQuery test...', (t) => {
    //Test 1
    let want = [0,3,2,3]
    let got = getMaximumXor( [0,1,1,3], 2 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [5,2,6,5]
    got = getMaximumXor( [2,3,4,7], 3 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = [4,3,6,4,6,7]
    got = getMaximumXor( [0,1,2,2,5,7], 3 )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
