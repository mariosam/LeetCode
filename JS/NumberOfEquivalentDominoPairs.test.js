/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numEquivDominoPairs } from './NumberOfEquivalentDominoPairs.js'

TEST('Starting NumberOfEquivalentDominoPairs test...', (t) => {
    //Test 1
    let want = 1
    let got = numEquivDominoPairs( [[1,2],[2,1],[3,4],[5,6]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = numEquivDominoPairs( [[1,2],[1,2],[1,1],[1,2],[2,2]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
