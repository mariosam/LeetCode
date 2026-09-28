/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { evaluate } from './EvaluateTheBracketPairsOfString.js'

TEST('Starting EvaluateTheBracketPairsOfString test...', (t) => {
    //Test 1
    let want = "bobistwoyearsold"
    let got = evaluate( "(name)is(age)yearsold", [["name","bob"],["age","two"]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "hi?"
    got = evaluate( "hi(name)", [["a","b"]] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = "yesyesyesaaa"
    got = evaluate( "(a)(a)(a)aaa", [["a","yes"]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
