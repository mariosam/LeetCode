/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { eraseOverlapIntervals } from './NonOverlappingIntervals.js'

TEST('Starting NonOverlappingIntervals test...', (t) => {
    //Test 1
    let want = 1
    let got = eraseOverlapIntervals( [[1,2],[2,3],[3,4],[1,3]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = eraseOverlapIntervals( [[1,2],[1,2],[1,2]] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = eraseOverlapIntervals( [[1,2],[2,3]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
