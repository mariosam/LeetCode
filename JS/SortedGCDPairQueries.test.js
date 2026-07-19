/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { gcdValues } from './SortedGCDPairQueries.js'

TEST('Starting SortedGCDPairQueries test...', (t) => {
    //Test 1
    let want = [1,2,2]
    let got = gcdValues( [2,3,4], [0,2,2] )
    t.assert( want.toString === got.toString, "Expect: "+want.toString)
    //Test 2
    want = [4,2,1,1]
    got = gcdValues( [4,4,2,1], [5,3,1,0] )
    t.assert( want.toString === got.toString, "Expect: "+want.toString)
    //Test 3
    want = [2,2]
    got = gcdValues( [2,2], [0,0] )
    t.assert( want.toString === got.toString, "Expect: "+want.toString)

    t.end()
})
