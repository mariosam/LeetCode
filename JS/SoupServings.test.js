/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { soupServings } from './SoupServings.js'

TEST('Starting SoupServings test...', (t) => {
    //Test 1
    let want = 0.62500
    let got = soupServings( 50 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0.71875
    got = soupServings( 100 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
 
