/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxDistance } from './MaximumDistanceInArrays.js'

TEST('Starting MaximumDistanceInArrays test...', (t) => {
    //Test 1
    let want = 4
    let got = maxDistance( [[1,2,3],[4,5],[1,2,3]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = maxDistance( [[1],[1]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
