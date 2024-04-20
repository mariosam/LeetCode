/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { makeGood } from './MakeTheStringGreat.js'

TEST('Starting MakeTheStringGreat test...', (t) => {
    //Test 1
    let want = "leetcode"
    let got = makeGood( "leEeetcode" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = ""
    got = makeGood( "abBAcC" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = "s"
    got = makeGood( "s" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
