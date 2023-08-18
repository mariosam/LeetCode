/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { knightProbability } from './KnightProbabilityInChessboard.js'

TEST('Starting KnightProbabilityInChessboard test...', (t) => {
    //Test 1
    let want = 0.06250
    let got = knightProbability( 3, 2, 0, 0 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = 1.00000
    got = knightProbability( 1, 0, 0, 0 )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
