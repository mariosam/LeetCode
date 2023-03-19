/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { strStr } from './FindTheIndexOfTheFirstOccurrenceInString.js'

TEST('Starting FindTheIndexOfTheFirstOccurrenceInString test...', (t) => {
    //Test 1
    let want = 0
    let got = strStr( "sadbutsad", "sad" )
    t.assert( want === got, "Expect: 0")
    //Test 2
    want = -1
    got = strStr( "leetcode", "leeto" )
    t.assert( want === got, "Expect: -1")

    t.end()
})
