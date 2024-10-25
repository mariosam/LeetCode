/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { parseBoolExpr } from './ParsingABooleanExpression.js'

TEST('Starting ParsingABooleanExpression test...', (t) => {
    //Test 1
    let want = false
    let got = parseBoolExpr( "&(|(f))" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = true
    got = parseBoolExpr( "|(f,f,f,t)" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = true
    got = parseBoolExpr( "!(&(f,t))" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
