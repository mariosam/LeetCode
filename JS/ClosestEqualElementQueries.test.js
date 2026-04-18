/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { solveQueries } from './ClosestEqualElementQueries.js'

TEST('Starting ClosestEqualElementQueries test...', (t) => {
    //Test 1
    let want = [2,-1,3]
    let got = solveQueries( [1,3,1,4,1,3,2], [0,3,5] )
    t.assert( want.toString() === got.toString(), "Expect: "+want.toString() )
    //Test 2
    want = [-1,-1,-1,-1]
    got = solveQueries( [1,2,3,4], [0,1,2,3] )
    t.assert( want.toString() === got.toString(), "Expect: "+want.toString() )

    t.end()
})
