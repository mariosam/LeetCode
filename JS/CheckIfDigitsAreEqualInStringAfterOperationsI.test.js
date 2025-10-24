/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { hasSameDigits } from './CheckIfDigitsAreEqualInStringAfterOperationsI.js'

TEST('Starting CheckIfDigitsAreEqualInStringAfterOperationsI test...', (t) => {
    //Test 1
    let want = true
    let got = hasSameDigits( "3902" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = hasSameDigits( "34789" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
