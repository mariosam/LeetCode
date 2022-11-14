/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { removeDuplicates } from './RemoveDuplicatesFromSortedArray.js'

TEST('Starting RemoveDuplicatesFromSortedArray test...', (t) => {
    //Test 1
    let want = 2
    let got = removeDuplicates( [1,1,2] )
    t.assert( want === got, "Expect: 2")
    //Test 2
    want = 5
    got = removeDuplicates( [0,0,1,1,1,2,2,3,3,4] )
    t.assert( want === got, "Expect: 5")

    t.end()
})
