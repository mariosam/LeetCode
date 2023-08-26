/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { combine } from './Combinations.js'

TEST('Starting Combinations test...', (t) => {
    //Test 1
    let want = [[1,2],[1,3],[1,4],[2,3],[2,4],[3,4]]
    let got = combine( 4, 2 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [[1]]
    got = combine( 1, 1 )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
