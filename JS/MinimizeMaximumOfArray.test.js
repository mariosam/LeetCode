/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimizeArrayValue } from './MinimizeMaximumOfArray.js'

TEST('Starting MinimizeMaximumOfArray test...', (t) => {
    //Test 1
    let want = 5
    let got = minimizeArrayValue( [3,7,1,6] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 10
    got = minimizeArrayValue( [10,1] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
