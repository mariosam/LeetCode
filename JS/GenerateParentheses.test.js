/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { generateParenthesis } from './GenerateParentheses.js'

TEST('Starting GenerateParentheses test...', (t) => {
    //Test 1
    let want = ["((()))","(()())","(())()","()(())","()()()"]
    let got = generateParenthesis( 3 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = ["()"]
    got = generateParenthesis( 1 )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
