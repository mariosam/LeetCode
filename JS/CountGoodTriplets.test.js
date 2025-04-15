/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countGoodTriplets } from './CountGoodTriplets.js'

TEST('Starting CountGoodTriplets test...', (t) => {
    //Test 1
    let want = 4
    let got = countGoodTriplets( [3,0,1,1,9,7], 7, 2, 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = countGoodTriplets( [1,1,2,2,3], 0, 0, 1 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
