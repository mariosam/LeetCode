/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { rotateString } from './RotateString.js'

TEST('Starting RotateString test...', (t) => {
    //Test 1
    let want = true
    let got = rotateString( "abcde", "cdeab" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = rotateString( "abcde", "abced" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
