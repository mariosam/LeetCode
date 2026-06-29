/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxNumberOfBalloons } from './MaximumNumberOfBalloons.js'

TEST('Starting MaximumNumberOfBalloons test...', (t) => {
    //Test 1
    let want = 1
    let got = maxNumberOfBalloons("nlaebolko")
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = 2
    got = maxNumberOfBalloons("loonbalxballpoon")
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = 0
    got = maxNumberOfBalloons("leetcode")
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
