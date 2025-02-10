/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countBadPairs } from './CountNumberOfBadPairs.js'

TEST('Starting CountNumberOfBadPairs test...', (t) => {
    //Test 1
    let want = 5
    let got = countBadPairs( [4,1,3,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = countBadPairs( [1,2,3,4,5] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
