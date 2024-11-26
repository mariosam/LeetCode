/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { slidingPuzzle } from './SlidingPuzzle.js'

TEST('Starting SlidingPuzzle test...', (t) => {
    //Test 1
    let want = 1
    let got = slidingPuzzle( [[1,2,3],[4,0,5]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -1
    got = slidingPuzzle( [[1,2,3],[5,4,0]] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 5
    got = slidingPuzzle( [[4,1,2],[5,0,3]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
 
