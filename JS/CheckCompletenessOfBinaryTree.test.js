/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { isCompleteTree } from './CheckCompletenessOfBinaryTree.js'

TEST('Starting CheckCompletenessOfBinaryTree test...', (t) => {
    //Test 1
    let want = true
    let got = isCompleteTree( [1,2,3,4,5,6] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = isCompleteTree( [1,2,3,4,5,null,7] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
