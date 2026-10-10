/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { removeOuterParentheses } from './RemoveOutermostParentheses.js'

TEST('Starting RemoveOutermostParentheses test...', (t) => {
    //Test 1
    let want = "()()()"
    let got = removeOuterParentheses( "(()())(())" )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = "()()()()(())"
    got = removeOuterParentheses( "(()())(())(()(()))" )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = ""
    got = removeOuterParentheses( "()()" )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
