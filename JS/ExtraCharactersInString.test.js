/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minExtraChar } from './ExtraCharactersInString.js'

TEST('Starting ExtraCharactersInString test...', (t) => {
    //Test 1
    let want = 1
    let got = minExtraChar( "leetscode", ["leet","code","leetcode"] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = minExtraChar( "sayhelloworld", ["hello","world"] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
