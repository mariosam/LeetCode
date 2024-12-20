/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxChunksToSorted } from './MaxChunksToMakeSorted.js'

TEST('Starting MaxChunksToMakeSorted test...', (t) => {
    //Test 1
    let want = 1
    let got = maxChunksToSorted( [4,3,2,1,0] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 4
    got = maxChunksToSorted( [1,0,2,3,4] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
