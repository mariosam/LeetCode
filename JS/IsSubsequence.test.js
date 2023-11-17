/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { isSubsequence } from './IsSubsequence.js'

TEST('Starting IsSubsequence test...', (t) => {
    //Test 1
    let want = true
    let got = isSubsequence( "abc", "ahbgdc" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = isSubsequence( "axc", "ahbgdc" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
