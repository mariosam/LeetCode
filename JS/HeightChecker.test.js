/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { heightChecker } from './HeightChecker.js'

TEST('Starting HeightChecker test...', (t) => {
    //Test 1
    let want = 3
    let got = heightChecker( [1,1,4,2,1,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 5
    got = heightChecker( [5,1,2,3,4] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = heightChecker( [1,2,3,4,5] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
