/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumSteps } from './SeparateBlackAndWhiteBalls.js'

TEST('Starting SeparateBlackAndWhiteBalls test...', (t) => {
    //Test 1
    let want = 1
    let got = minimumSteps( "101" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = minimumSteps( "100" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = minimumSteps( "0111" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
