/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minMoves } from './MinimumMovesToEqualArrayElements.js'

TEST('Starting MinimumMovesToEqualArrayElements test...', (t) => {
    //Test 1
    let want = 3
    let got = minMoves( [1,2,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = minMoves( [1,1,1] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
