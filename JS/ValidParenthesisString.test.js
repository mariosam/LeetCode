/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { checkValidString } from './ValidParenthesisString.js'

TEST('Starting ValidParenthesisString test...', (t) => {
    //Test 1
    let want = true
    let got = checkValidString( "()" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = true
    got = checkValidString( "(*)" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = true
    got = checkValidString( "(*))" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
