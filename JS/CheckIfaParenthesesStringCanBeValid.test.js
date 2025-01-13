/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { canBeValid } from './CheckIfaParenthesesStringCanBeValid.js'

TEST('Starting CheckIfaParenthesesStringCanBeValid test...', (t) => {
    //Test 1
    let want = true
    let got = canBeValid( "))()))", "010100" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = true
    got = canBeValid( "()()", "0000" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = false
    got = canBeValid( ")", "0" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
