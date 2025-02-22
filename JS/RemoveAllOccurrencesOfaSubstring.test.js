/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { removeOccurrences } from './RemoveAllOccurrencesOfaSubstring.js'

TEST('Starting RemoveAllOccurrencesOfaSubstring test...', (t) => {
    //Test 1
    let want = "dab"
    let got = removeOccurrences( "daabcbaabcbc", "abc" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "ab"
    got = removeOccurrences( "axxxxyyyyb", "xy" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
