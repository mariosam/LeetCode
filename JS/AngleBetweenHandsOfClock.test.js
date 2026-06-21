/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { angleClock } from './AngleBetweenHandsOfClock.js'

TEST('Starting AngleBetweenHandsOfClock test...', (t) => {
    //Test 1
    let want = 165
    let got = angleClock(12, 30)
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 75
    got = angleClock(3, 30)
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 7.5
    got = angleClock(3, 15)
    t.assert( want === got, "Expect: "+want)

    t.end()
})
