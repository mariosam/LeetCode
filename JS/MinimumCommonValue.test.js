/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { getCommon } from './MinimumCommonValue.js'

TEST('Starting MinimumCommonValue test...', (t) => {
    //Test 1
    let want = 2
    let got = getCommon( [1,2,3], [2,4] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = getCommon( [1,2,3,6], [2,3,4,5] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
