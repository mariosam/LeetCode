/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { scoreOfString } from './ScoreOfString.js'

TEST('Starting ScoreOfString test...', (t) => {
    //Test 1
    let want = 13
    let got = scoreOfString( "hello" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 50
    got = scoreOfString( "zaz" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
