/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numberOfWays } from './WaysToExpressAnIntegerAsSumOfPowers.js'

TEST('Starting WaysToExpressAnIntegerAsSumOfPowers test...', (t) => {
    //Test 1
    let want = 1
    let got = numberOfWays( 10, 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = numberOfWays( 4, 1 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
