/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { preorderTraversal } from './BinaryTreePreorderTraversal.js'

TEST('Starting BinaryTreePreorderTraversal test...', (t) => {
    //Test 1
    let want = [1,2,3]
    let got = preorderTraversal( [1,2,3] )
    t.assert( want.toString === got.toString, "Expect: 1,2,3")
    //Test 2
    want = []
    got = preorderTraversal( [] )
    t.assert( want.toString === got.toString, "Expect: null")
    //Test 3
    want = [1]
    got = preorderTraversal( [1] )
    t.assert( want.toString === got.toString, "Expect: 1")

    t.end()
})
