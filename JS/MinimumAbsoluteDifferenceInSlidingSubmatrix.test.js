/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minAbsDiff } from './MinimumAbsoluteDifferenceInSlidingSubmatrix.js'

TEST('Starting MinimumAbsoluteDifferenceInSlidingSubmatrix test...', (t) => {
    //Test 1
    let want = [[2]]
    let got = minAbsDiff( [[1,8],[3,-2]] , 2 )
    t.assert( want.toString() === got.toString(), "Expect: "+want)
    //Test 2
    want = [[0,0]]
    got = minAbsDiff( [[3,-1]] , 1 )
    t.assert( want.toString() === got.toString(), "Expect: "+want)
    //Test 3
    want = [[1,2]]
    got = minAbsDiff( [[1,-2,3],[2,3,5]] , 2 )
    t.assert( want.toString() === got.toString(), "Expect: "+want)

    t.end()
})
