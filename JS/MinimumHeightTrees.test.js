/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findMinHeightTrees } from './MinimumHeightTrees.js'

TEST('Starting MinimumHeightTrees test...', (t) => {
    //Test 1
    let want = [1]
    let got = findMinHeightTrees( [[1,0],[1,2],[1,3]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = [3,4]
    got = findMinHeightTrees( [[3,0],[3,1],[3,2],[3,4],[5,4]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
