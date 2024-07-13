/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { reverseParentheses } from './ReverseSubstringsBetweenEachPairOfParentheses.js'

TEST('Starting ReverseSubstringsBetweenEachPairOfParentheses test...', (t) => {
    //Test 1
    let want = "dcba"
    let got = reverseParentheses( "(abcd)" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "iloveu"
    got = reverseParentheses( "(u(love)i)" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = "leetcode"
    got = reverseParentheses( "(ed(et(oc))el)" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
