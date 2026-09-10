/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countCommas } from './CountCommasInRange.js'

TEST('Starting CountCommasInRange test...', (t) => {
    //Test 1
    let want = 3
    let got = countCommas( 1002 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = countCommas( 998 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
