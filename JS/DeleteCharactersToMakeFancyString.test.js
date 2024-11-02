/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { makeFancyString } from './DeleteCharactersToMakeFancyString.js'

TEST('Starting DeleteCharactersToMakeFancyString test...', (t) => {
    //Test 1
    let want = "leetcode"
    let got = makeFancyString( "leeetcode" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "aabaa"
    got = makeFancyString( "aaabaaaa" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = "aab"
    got = makeFancyString( "aab" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
