/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { isValid } from './ValidParentheses.js'

TEST('Starting ValidParentheses test...', (t) => {
    //Test 1
    let want = true
    let got = isValid("()")
    t.assert(got === want, "Expect: () = valid")
    //Test 2
    want = true
    got = isValid("()[]{}")
    t.assert(got === want, "Expect: ()[]{} = valid")
    //Test 3
    want = false
    got = isValid("(]")
    t.assert(got === want, "Expect: (] = invalid")
    //Test 4
    want = false
    got = isValid("([)]")
    t.assert(got === want, "Expect: ([)] = invalid")
    //Test 5
    want = true
    got = isValid("{[]}")
    t.assert(got === want, "Expect: {[]} = valid")
    //Test 6
    want = false
    got = isValid("()))")
    t.assert(got === want, "Expect: ())) = invalid")
    //Test 7
    want = false
    got = isValid("]")
    t.assert(got === want, "Expect: ] = invalid")

    t.end()
})
