/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { profitableSchemes } from './ProfitableSchemes.js'

TEST('Starting ProfitableSchemes test...', (t) => {
    //Test 1
    let want = 2
    let got = profitableSchemes( 5, 3, [2,2], [2,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 7
    got = profitableSchemes( 10, 5, [2,3,5], [6,7,8] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
