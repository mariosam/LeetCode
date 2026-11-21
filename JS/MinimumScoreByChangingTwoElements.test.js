/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimizeSum } from './MinimumScoreByChangingTwoElements.js'

TEST('Starting MinimumScoreByChangingTwoElements test...', (t) => {
    //Test 1
    let want = 3
    let got = minimizeSum( [1,4,7,8,5] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = minimizeSum( [1,4,3] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
