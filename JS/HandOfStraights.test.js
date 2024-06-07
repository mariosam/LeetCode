/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { isNStraightHand } from './HandOfStraights.js'

TEST('Starting HandOfStraights test...', (t) => {
    //Test 1
    let want = true
    let got = isNStraightHand([1,2,3,6,2,3,4,7,8], 3)
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = isNStraightHand([1,2,3,4,5], 4)
    t.assert( want === got, "Expect: "+want)

    t.end()
})
