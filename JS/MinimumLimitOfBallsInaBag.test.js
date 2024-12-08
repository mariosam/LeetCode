/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumSize } from './MinimumLimitOfBallsInaBag.js'

TEST('Starting MinimumLimitOfBallsInaBag test...', (t) => {
    //Test 1
    let want = 3
    let got = minimumSize( [9], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = minimumSize( [2,4,8,2], 4 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
