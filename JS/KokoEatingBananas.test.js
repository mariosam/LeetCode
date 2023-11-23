/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minEatingSpeed } from './KokoEatingBananas.js'

TEST('Starting KokoEatingBananas test...', (t) => {
    //Test 1
    let want = 4
    let got = minEatingSpeed( [3,6,7,11], 8 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 30
    got = minEatingSpeed( [30,11,23,4,20], 5 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 23
    got = minEatingSpeed( [30,11,23,4,20], 6 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
