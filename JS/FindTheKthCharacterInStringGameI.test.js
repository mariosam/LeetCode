/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { kthCharacter } from './FindTheKthCharacterInStringGameI.js'

TEST('Starting FindTheKthCharacterInStringGameI test...', (t) => {
    //Test 1
    let want = "b"
    let got = kthCharacter( 5 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "c"
    got = kthCharacter( 10 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
