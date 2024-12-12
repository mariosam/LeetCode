/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { canChange } from './MovePiecesToObtainString.js'

TEST('Starting MovePiecesToObtainString test...', (t) => {
    //Test 1
    let want = true
    let got = canChange( "_L__R__R_", "L______RR" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = canChange( "R_L_", "__LR" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = false
    got = canChange( "_R", "R_" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
