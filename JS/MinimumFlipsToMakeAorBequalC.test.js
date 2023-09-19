/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minFlips } from './MinimumFlipsToMakeAorBequalC.js'

TEST('Starting MinimumFlipsToMakeAorBequalC test...', (t) => {
    //Test 1
    let want = 3
    let got = minFlips( 2, 6, 5 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = minFlips( 4, 2, 7 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = minFlips( 1, 2, 3 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
