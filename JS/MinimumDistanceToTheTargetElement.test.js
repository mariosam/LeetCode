/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { getMinDistance } from './MinimumDistanceToTheTargetElement.js'

TEST('Starting MinimumDistanceToTheTargetElement test...', (t) => {
    //Test 1
    let want = 1
    let got = getMinDistance( [1,2,3,4,5], 5, 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = getMinDistance( [1], 1, 0 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = getMinDistance( [1,1,1,1,1,1,1,1,1,1], 1, 0 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
