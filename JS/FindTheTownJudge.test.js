/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findJudge } from './FindTheTownJudge.js'

TEST('Starting FindTheTownJudge test...', (t) => {
    //Test 1
    let want = 2
    let got = findJudge( 2, [[1,2]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = findJudge( 3, [[1,3],[2,3]] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = -1
    got = findJudge( 3, [[1,3],[2,3],[3,1]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
